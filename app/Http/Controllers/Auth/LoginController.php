<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail; // Assuming you have a VerifyEmail Mailable

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if (!$user->email_verified_at) {
            $user->sendEmailVerificationNotification();
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

