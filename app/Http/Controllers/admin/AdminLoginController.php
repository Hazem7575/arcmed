<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = User::where('email' , $request->email)->where('status' , 1)->first();
        if(!$check) {
            return response()->json(['msg' => 'معلومات الاتصال غير صحييحه'] , 403);
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return true;
        }

        return response()->json(['msg' => 'معلومات الاتصال غير صحييحه'] , 403);
    }
}
