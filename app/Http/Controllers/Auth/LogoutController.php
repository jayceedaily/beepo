<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LogoutController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Logout', [

        ]);
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }
}
