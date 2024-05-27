<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
{
    $user = $request->user();

    if ($user->hasVerifiedEmail()) {
        return redirect()->route('verification.notice')->with('verified', true);
    }

    if ($user->markEmailAsVerified()) {
        event(new Verified($user));
    }

    // Redirect based on the user's role
    if ($user->role_id === 1) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('user.dashboard');
    }
}

}
