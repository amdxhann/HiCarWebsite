<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tcars()
    {
        return view('web.dashboard.admin.cars.tambahcars', [
            'title' => 'Tambah Mobil',
        ]);
    }
    
    public function scars(Request $request)
    {
        $car=new cars;
        $car->foto_mobil=$request->foto_mobil;
        $car->no_polisi=$request->no_polisi;
        $car->merk=$request->merk;
        $car->tahun=$request->tahun;
        $car->transmisi=$request->transmisi;
        $car->save();
        
        return redirect('web.dashboard.admin.cars.cars')->with("update", "Mobil Berhasil Ditambahkan!");
    }
    public function dcars($id)
    {
        cars::find($id)->delete();
        return redirect()->back()->with("update", "Mobil Berhasil di Hapus!");
    }
    public function ucars($id)
    {
        return view('web.dashboard.admin.cars.editcars', [
            'title' => 'Update Cars',
            'cars'=> Cars::find($id),
        ]);
    }
    public function ecars(Request $request)
    {
        $car= cars::find($request->id);
        $car->foto_mobil=$request->foto_mobil;
        $car->no_polisi=$request->no_polisi;
        $car->merk=$request->merk;
        $car->tahun=$request->tahun;
        $car->transmisi=$request->transmisi;
        $car->save();
        
        return redirect('/web.dashboard.admin.cars.cars')->with("update","Mobil Berhasil Diupdate!");
    }

    public function back(Request $request)
    {
        return view('web.dashboard.admin.cars.cars', [
            'title' => 'cars',
            'cars' => Cars::all()
        ]);
    }
}
