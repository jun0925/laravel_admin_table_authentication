<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')])) {
            $user = auth()->guard('admin')->user();
            if($user->is_admin == 1) {
                return redirect()->route('adminDashboard')->with('message', 'You are Logged in success');
            }
        } else {
            return back()->with('message', 'Whoops! invalid email and password.');
        }
    }

    // 로그아웃
    public function adminLogout()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('message', 'You are Logged in success');
        return view('admin.auth.logout');
    }
}
