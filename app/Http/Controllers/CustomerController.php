<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.dashboard.admin.customer.customers', [
            'title' => 'Customer',
            'customer' => customer::all()
        ]);
    }

    public function tcustomer()
    {
        return view('web.dashboard.admin.customer.tambahcustomer', [
            'title' => 'Tambah Pelanggan',
        ]);
    }
    
    public function scustomer(Request $request)
    {
        $customer=new customer;
        $customer->nama=$request->nama;
        $customer->tanggal_lahir=$request->tanggal_lahir;
        $customer->alamat=$request->alamat;
        $customer->no_sim=$request->no_sim;
        $customer->jenis_kelamin=$request->jenis_kelamin;
        $customer->email=$request->email;
        $customer->no_hp=$request->no_hp;
        $customer->password = Hash::make($request->password);
        $customer->save();
        
        return redirect('web.dashboard.admin.customer.customers')->with("update", "Customer Berhasil Ditambahkan!");
    }
    public function dcustomer($id)
    {
        Customer::find($id)->delete();
        return redirect()->back()->with("update", "Customer Berhasil di Hapus!");
    }
    public function ucustomer($id)
    {
        return view('web.dashboard.admin.customer.editcust', [
            'title' => 'Update Customer',
            'customer'=> customer::find($id),
        ]);
    }
    public function ecustomer(Request $request)
    {
        $customer= customer::find($request->id);
        $customer->nama=$request->nama;
        $customer->tanggal_lahir=$request->tanggal_lahir;
        $customer->alamat=$request->alamat;
        $customer->no_sim=$request->no_sim;
        $customer->jenis_kelamin=$request->jenis_kelamin;
        $customer->email=$request->email;
        $customer->no_hp=$request->no_hp;
        $customer->password = Hash::make($request->password);
        $customer->save();
        
        return redirect('/web.dashboard.admin.customer.customers')->with("update","Pasien Berhasil Diupdate!");
    }

    public function back(Request $request)
    {
        return view('web.dashboard.admin.customer.customers', [
            'title' => 'Customer',
            'customer' => customer::all()
        ]);
    }

    // //login
    // public function createcustomer(Request $request)
    // {
    //     $customer=new customer;
    //     $customer->email=$request->email;
    //     $customer->nama=$request->nama;
    //     $customer->alamat=$request->alamat;
    //     $customer->password = Hash::make($request->password);
    //     $customer->save();
        
    //     return redirect('web.login.loginCustomer')->with("update", "Akun berhasil Berhasil Dibuat!");
    // }

    // public function logincustomer(Request $request)
    // {
    //     $customer=new customer;
    //     $customer->nama=$request->nama;
    //     $customer->alamat=$request->alamat;
    //     $customer->password = Hash::make($request->password);
    //     $customer->save();
        
    //     return redirect('web.dashboard.customer.dashboard')->with("update", "Berhasil LogIn!");
    // }
}
