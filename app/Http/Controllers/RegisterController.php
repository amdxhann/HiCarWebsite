<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
//Register Customer
    // public function registrasi(Request $request) {
    //     $validate = $request->validate([
    //         'email' => 'required|email:dns',
    //         'nama' => 'required',
    //         'password' => 'required',
    //     ]);
    
    //     $customer = new customer;
    //     $customer->email=$request->email;
    //     $customer->nama=$request->nama;
    //     $customer->password=Hash::make($request->password);
    //     $customer->password=Hash::make($request->password);
    //     $customer->role='customer';
    //     $customer->save();

    //     return redirect('/web.login.loginCustomer');
    // }

//Register Admin
    // public function registerUser(Request $request) {
    //     // dd($request);
    //     $validate = $request->validate([
    //         'email' => 'required|email:dns',
    //         'nama' => 'required',
    //         'alamat' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'jenis_kelamin' => 'required|',
    //         'no_hp' => 'required|numeric',
    //         'password' => 'required'
    //     ]);
    
    //     $admin = new Admin;
    //     $admin->email=$request->email;
    //     $admin->nama=$request->nama;
    //     $admin->alamat=$request->alamat;
    //     $admin->tanggal_lahir=$request->tanggal_lahir;
    //     $admin->jenis_kelamin=$request->jenis_kelamin;
    //     $admin->no_hp=$request->no_hp;
    //     $admin->password=Hash::make($request->admin_password);
    //     $admin->role='admin';
    //     $admin->save();

    //     return redirect('/web.login.loginAdmin')->with("update", "Akun Berhasil Ditambahkan!");
    // }

    public function registerAdmin(Request $request){ 
        Admin::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'alamat'=> $request->alamat,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'no_hp'=> $request->no_hp,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'remember_token' => Str::random(60),
        ]);
    
        return redirect('/web.login.loginAdmin');
    }
}
