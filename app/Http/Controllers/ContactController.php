<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Sndpbag\AdminPanel\Models\User; // User model
use Illuminate\Support\Facades\Mail;
use App\Mail\UserContactMail;
use App\Mail\AdminContactMail;
use Illuminate\Support\Facades\Crypt; // Session এর বদলে Crypt import করা হলো

class ContactController extends Controller
{
    // AJAX submit handle korar jonno
    public function store(Request $request)
    {
        // 1. Strong Validation Rules
        $request->validate([
            'name'         => 'required|string|max:100',
            'email'        => 'required|email:rfc,dns|max:150',
            'phone'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'subject'      => 'nullable|string|max:200',
            'message'      => 'required|string|min:10|max:2000',
            'math_captcha' => 'required|numeric',
            'captcha_hash' => 'required|string', // Hidden input validation
        ], [
            'phone.regex' => 'Please enter a valid phone number format.',
            'message.min' => 'Message must be at least 10 characters long.',
            'math_captcha.required' => 'Please solve the math puzzle to prove you are human.',
        ]);

        // 2. Math Calculation Validation Logic (Encryption based)
        try {
            $expectedAnswer = Crypt::decryptString($request->captcha_hash);
            
            if ((int)$request->math_captcha !== (int)$expectedAnswer) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Math calculation is incorrect! Please try again.'
                ], 422); 
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false, 
                'message' => 'Security token is invalid or expired. Please refresh the page.'
            ], 422);
        }

        // 3. Save Data (Math captcha r hash chara baki data save hobe)
        $contact = Contact::create($request->except(['math_captcha', 'captcha_hash']));

        // 4. Send Emails
        try {
            // Send Email to User
            Mail::to($contact->email)->send(new UserContactMail($contact));

            // Send Email to Admin & Super Admin
            $admins = User::whereIn('status', ['Admin', 'Super Admin'])->get();
            foreach($admins as $admin) {
                Mail::to($admin->email)->send(new AdminContactMail($contact));
            }
        } catch (\Exception $e) {
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

