<?php
namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $imagePath = $request->hasFile('image') ? $request->file('image')->store('testimonials', 'public') : null;

        Testimonial::create([
            'name' => $request->name,
            'review' => $request->review,
            'rating' => $request->rating,
            'image' => $imagePath,
        ]);

        return response()->json(['success' => 'Testimonial added successfully!']);
    }

    public function edit(Testimonial $testimonial) {
        return response()->json($testimonial);
    }

    public function update(Request $request, Testimonial $testimonial) {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $data = $request->only(['name', 'review', 'rating']);

        if ($request->hasFile('image')) {
            if ($testimonial->image) Storage::disk('public')->delete($testimonial->image);
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        $testimonial->update($data);
        return response()->json(['success' => 'Testimonial updated successfully!']);
    }

    public function destroy(Testimonial $testimonial) {
        if ($testimonial->image) Storage::disk('public')->delete($testimonial->image);
        $testimonial->delete();
        return response()->json(['success' => 'Testimonial deleted successfully!']);
    }
}