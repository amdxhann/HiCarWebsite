<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        return view('web.dashboard.admin.transaksi.transaksi', [
            'title' => 'Transaksi',
            'transaction' => transaction::all()
        ]);
    }
    
    public function ttransaction()
    {
        return view('web.dashboard.admin.transaksi.tambahtransaksi', [
            'title' => 'Tambah Transaksi',
        ]);
    }

    public function stransaction(Request $request)
    {
        $transaction=new transaction;
        $transaction->nama=$request->nama;
        $transaction->jaminan=$request->jaminan;
        $transaction->email=$request->email;
        $transaction->no_sim=$request->no_sim;
        $transaction->no_hp=$request->no_hp;
        $transaction->durasi=$request->durasi;
        $transaction->save();
        
        return redirect('web.dashboard.admin.transaksi.transaksi')->with("update", "transaksi Berhasil Ditambahkan!");
    }
    public function dtransaction($id)
    {
        transaction::find($id)->delete();
        return redirect()->back()->with("update", "Transaksi Berhasil di Hapus!");
    }
    public function utransaction($id)
    {
        return view('web.dashboard.admin.transaksi.edittransaksi', [
            'title' => 'Update Transaction',
            'transaction'=> transaction::find($id),
        ]);
    }
    public function etransaction(Request $request)
    {
        $transaction= transaction::find($request->id);
        $transaction->nama=$request->nama;
        $transaction->jaminan=$request->jaminan;
        $transaction->email=$request->email;
        $transaction->no_sim=$request->no_sim;
        $transaction->no_hp=$request->no_hp;
        $transaction->durasi=$request->durasi;
        $transaction->save();
        
        return redirect('/web.dashboard.admin.transaksi.transaksi')->with("update","Transaksi Berhasil Diupdate!");
    }

    public function back(Request $request)
    {
        return view('web.dashboard.admin.transaksi.transaksi', [
            'title' => 'transaction',
            'transaction' => transaction::all()
        ]);
    }
}
