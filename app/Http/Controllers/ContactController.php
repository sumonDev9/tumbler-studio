<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User; // User model
use Illuminate\Support\Facades\Mail;
use App\Mail\UserContactMail;
use App\Mail\AdminContactMail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    // AJAX submit handle korar jonno
    public function store(Request $request)
    {
        // 1. Strong Validation Rules
        $request->validate([
            'name'         => 'required|string|max:100',
            'email'        => 'required|email:rfc,dns|max:150', // Authentic email validation
            'phone'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15', // Only valid numbers
            'subject'      => 'nullable|string|max:200',
            'message'      => 'required|string|min:10|max:2000',
            'math_captcha' => 'required|numeric', // Math check
        ], [
            // Custom Error Messages
            'phone.regex' => 'Please enter a valid phone number format.',
            'message.min' => 'Message must be at least 10 characters long.',
            'math_captcha.required' => 'Please solve the math puzzle to prove you are human.',
        ]);

        // 2. Math Calculation Validation Logic
        if ((int)$request->math_captcha !== (int)Session::get('math_captcha')) {
            return response()->json([
                'success' => false, 
                'message' => 'Math calculation is incorrect! Please try again.'
            ], 422); // 422 Unprocessable Entity
        }

        // 3. Save Data (Math captcha chara baki data save hobe)
        $contact = Contact::create($request->except('math_captcha'));

        // 4. Clear the captcha session after successful submission
        Session::forget('math_captcha');

        // 5. Send Emails
        try {
            // Send Email to User
            Mail::to($contact->email)->send(new UserContactMail($contact));

            // Send Email to Admin & Super Admin
            $admins = User::whereIn('status', ['Admin', 'Super Admin'])->get();
            foreach($admins as $admin) {
                Mail::to($admin->email)->send(new AdminContactMail($contact));
            }
        } catch (\Exception $e) {
            // Email jete somossa hole form submit theme jabe na, kintu data save hobe
            \Log::error('Contact Email Error: ' . $e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }

    // Admin Panel e show korar jonno
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    // Admin view korle is_read update hobe
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update(['is_read' => true]);
        return view('admin.contact.show', compact('contact'));
    }

    // Sweetalert diye delete korar jonno
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Contact deleted successfully!']);
    }
}