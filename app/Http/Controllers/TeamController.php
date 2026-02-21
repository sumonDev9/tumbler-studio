<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::latest()->get();
        return view('admin.team.index', compact('teams'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $path = $request->file('profile_image')->store('teams', 'public');

        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'profile_image' => $path,
        ]);

        return response()->json(['success' => 'Team member added successfully!']);
    }

    public function edit(Team $team) {
        return response()->json($team);
    }

    public function update(Request $request, Team $team) {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
        ];

        if ($request->hasFile('profile_image')) {
            if ($team->profile_image) {
                Storage::disk('public')->delete($team->profile_image);
            }
            $data['profile_image'] = $request->file('profile_image')->store('teams', 'public');
        }

        $team->update($data);
        return response()->json(['success' => 'Team member updated successfully!']);
    }

    public function destroy(Team $team) {
        if ($team->profile_image) {
            Storage::disk('public')->delete($team->profile_image);
        }
        $team->delete();
        return response()->json(['success' => 'Member deleted successfully!']);
    }
}