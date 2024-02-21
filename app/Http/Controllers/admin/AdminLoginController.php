<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $check = User::where('name' , $request->email)->where('status' , 1)->first();
        if(!$check) {
            return response()->json(['msg' => 'معلومات الاتصال غير صحييحه2'] , 403);
        }

        if(Hash::check($request->password , $check->password)) {
            Auth::guard('admin')->login($check);
            $request->session()->regenerate();
            return true;

        }

        return response()->json(['msg' => 'معلومات الاتصال غير صحييحه'] , 403);
    }
}
