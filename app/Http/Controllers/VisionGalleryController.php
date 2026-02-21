<?php
namespace App\Http\Controllers;

use App\Models\VisionGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisionGalleryController extends Controller
{
    public function index() {
        $items = VisionGallery::latest()->get();
        return view('admin.vision.index', compact('items'));
    }

public function store(Request $request) {
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
    ]);

    $path = $request->file('image')->store('vision', 'public');
    VisionGallery::create(['image' => $path]); // Title bad dewa hoyeche

    return response()->json(['success' => 'Gallery image added successfully!']);
}

    public function edit(VisionGallery $vision) {
        return response()->json($vision);
    }

    public function update(Request $request, VisionGallery $vision) {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($vision->image);
            $vision->image = $request->file('image')->store('vision', 'public');
        }
        $vision->title = $request->title;
        $vision->save();

        return response()->json(['success' => 'Gallery updated successfully!']);
    }

    public function destroy(VisionGallery $vision) {
        Storage::disk('public')->delete($vision->image);
        $vision->delete();
        return response()->json(['success' => 'Image deleted successfully!']);
    }
}