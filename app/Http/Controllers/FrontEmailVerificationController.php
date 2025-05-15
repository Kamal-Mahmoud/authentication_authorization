<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontEmailVerificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
        ? to_route("front.index")
        : view("auth.verify-email");
    }
}
