<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.dashboard.admin.driver.driver', [
            'title' => 'Driver',
            'driver' => Driver::all()
        ]);
    }
    
    public function tdriver()
    {
        return view('web.dashboard.admin.driver.tambahdriver', [
            'title' => 'Tambah Driver',
        ]);
    }

    public function sdriver(Request $request)
    {
        $driver=new driver;
        $driver->foto_profil=$request->foto_profil;
        $driver->nama=$request->nama;
        $driver->usia=$request->usia;
        $driver->email=$request->email;
        $driver->no_sim=$request->no_sim;
        $driver->no_hp=$request->no_hp;
        $driver->save();
        
        return redirect('web.dashboard.admin.driver.driver')->with("update", "Driver Berhasil Ditambahkan!");
    }
    public function ddriver($id)
    {
        driver::find($id)->delete();
        return redirect()->back()->with("update", "Driver Berhasil di Hapus!");
    }
    public function udriver($id)
    {
        return view('web.dashboard.admin.driver.editdriver', [
            'title' => 'Update driver',
            'driver'=> driver::find($id),
        ]);
    }
    public function edriver(Request $request)
    {
        $driver= driver::find($request->id);
        $driver->foto_profil=$request->foto_profil;
        $driver->nama=$request->nama;
        $driver->usia=$request->usia;
        $driver->email=$request->email;
        $driver->no_sim=$request->no_sim;
        $driver->no_hp=$request->no_hp;
        $driver->save();
        
        return redirect('/web.dashboard.admin.driver.driver')->with("update","Driver Berhasil Diupdate!");
    }

    public function back(Request $request)
    {
        return view('web.dashboard.admin.driver.driver', [
            'title' => 'driver',
            'driver' => driver::all()
        ]);
    }
}
