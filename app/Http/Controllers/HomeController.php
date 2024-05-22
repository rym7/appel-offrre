<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype === '0') {
                return redirect()->route('user.home');
            } elseif (Auth::user()->usertype === '1') {
                return redirect()->route('admin.home');
            } elseif (Auth::user()->usertype === '2') {
                return redirect()->route('super_admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function userHome()
    {
        return view('user.home');
    }

    public function adminHome()
    {
        return view('admin.home');
    }

    public function superAdminHome()
    {
        return view('super_admin.home');
    }
}