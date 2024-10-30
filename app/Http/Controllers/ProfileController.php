<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */ public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'photo' => ['nullable', 'image', 'max:2048'], // 2MB limit
        ]);

        $user = $request->user();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            // Generate a unique filename
            $fileName = date('YmdHi') . '_' . $file->getClientOriginalName();

            // Move the file to public/photos
            $file->move(public_path('photos'), $fileName);

            // Store the filename in the user object (not in request)
            $user->photo = $fileName;
        }

        // Update the user's name and email
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Save the user model with the new data (including photo if uploaded)
        $user->save();

        return back()->with('status', 'Profile updated!');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
