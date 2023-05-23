<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

//Login Admin
    public function checkLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/web.dashboard.admin.dashboard');
        }
        return redirect('/web.login.loginAdmin');
    }
}
