<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BackHomePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view("back.home");
    }
    public function create(){
        Gate::forUser(Auth::guard('admin')->user())->authorize('add_user'); // Gate Work Also for Policy 
    }
}
