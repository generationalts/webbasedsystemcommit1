<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Mail\VerifyEmail;
use App\Models\User;


class EmailVerificationController extends Controller
{

public function verify(Request $request, $id)
{
    $user = User::findOrFail($id);

    if (!$user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();

        // Send welcome email to the user
       // Send welcome email to the user
Mail::to($user->email)->send(new WelcomeEmail($user));


        return redirect()->route('user.dashboard')->with('message', 'Email verified successfully.');
    } else {
        return redirect()->route('user.dashboard')->with('message', 'Email already verified.');
    }


    }

    public function resend(Request $request)
    {
        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('user.dashboard')->with('message', 'Email already verified.');
        }

        $verificationUrl = route('verification.verify', ['id' => $user->id]);
        Mail::to($user->email)->send(new VerifyEmail($verificationUrl));

        return redirect()->back()->with('message', 'Verification email sent. Please check your inbox.');
    }
}
