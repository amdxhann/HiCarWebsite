<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        return view('web.dashboard.customer.biodata.biodata', [
            'title' => 'Biodata',
            'biodata' => Customer::all()
        ]);
    }

    public function tbiodata()
    {
        return view('web.dashboard.customer.biodata.tambahbio', [
            'title' => 'Tambah Biodata',
        ]);
    }
    
    public function sbiodata(Request $request)
    {
        $customer=new customer;
        $customer->nama=$request->nama;
        $customer->tanggal_lahir=$request->tanggal_lahir;
        $customer->alamat=$request->alamat;
        $customer->no_sim=$request->no_sim;
        $customer->jenis_kelamin=$request->jenis_kelamin;
        $customer->email=$request->email;
        $customer->no_hp=$request->no_hp;
        $customer->save();
        
        return redirect('web.dashboard.customer.biodata.biodata')->with("update", "Customer Berhasil Ditambahkan!");
    }
    public function dbiodata($id)
    {
        Customer::find($id)->delete();
        return redirect()->back()->with("update", "Biodata Berhasil di Hapus!");
    }
    public function ubiodata($id)
    {
        return view('web.dashboard.customer.biodata.editbio', [
            'title' => 'Update Customer',
            'customer'=> customer::find($id),
        ]);
    }
    public function ebiodata(Request $request)
    {
        $customer= customer::find($request->id);
        $customer->nama=$request->nama;
        $customer->tanggal_lahir=$request->tanggal_lahir;
        $customer->alamat=$request->alamat;
        $customer->no_sim=$request->no_sim;
        $customer->jenis_kelamin=$request->jenis_kelamin;
        $customer->email=$request->email;
        $customer->no_hp=$request->no_hp;
        $customer->save();
        
        return redirect('/web.dashboard.customer.biodata.biodata')->with("update","Pasien Berhasil Diupdate!");
    }

    public function back(Request $request)
    {
        return view('web.dashboard.customer.biodata.biodata', [
            'title' => 'Biodata',
            'biodata' => customer::all()
        ]);
    }
}
