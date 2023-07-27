<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Mail\VerifyEmail;
class Authenticate extends Middleware
{
    // ...

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, ...$guards)
    {
        // $this->authenticate($request, $guards);

        // if ($request->user() instanceof MustVerifyEmail && ! $request->user()->hasVerifiedEmail()) {
        //     // Send verification email to the user
        //     $user = $request->user();
        //     $verificationUrl = route('verification.verify', ['id' => $user->id]);
        //     Mail::to($user->email)->send(new VerifyEmail($verificationUrl));

        //     return Redirect::route('login')->with('message', 'Please check your email and follow the verification link to complete the registration process.');
        // }

        return $next($request);
    }

}

