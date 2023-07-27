<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('message', 'Profile updated successfully.');
    }
    public function settings()
{
    $user = Auth::user(); // Fetch the authenticated user

    return view('dashboards.user.settings.setting', compact('user'));
}

}
