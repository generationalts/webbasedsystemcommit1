<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EnsureEmailIsVerified
{
    public function handle($request, Closure $next)
    {
        if ($request->user() instanceof MustVerifyEmail && ! $request->user()->hasVerifiedEmail()) {
            return Redirect::route('verification.notice')->with('message', 'Please verify your email address.');
        }

        // Send welcome email to the user
        $user = $request->user();
        Mail::to($user->email)->send(new WelcomeEmail());

        return $next($request);
    }
}
