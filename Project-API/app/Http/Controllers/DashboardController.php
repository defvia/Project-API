<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\DetailOrder;
// use App\Http\Controllers\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masterdata.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $info= new Order;
       // $detail= new DetailOrder;
        $info->id_user=Auth::user()->id_user;//yang kiri harus sama dengan database, kanan sama dgn name diform input
        // $detail->id_service=$request->jenis_layanan;
        $info->nama=$request->nama;//yang kiri harus sama dengan database, kanan sama dgn name diform input
        $info->alamat=$request->alamat;
        $info->no_telp=$request->no_telp;
        // $order->email=$request->email;
        // $order->kode_pos=$request->kode_pos;
        // $detail->warna=$request->warna;
        // $detail->jumlah_sepatu=$request->jml_sepatu;
        $info->status='Belum Dibayar';
        $info->save();
        
        return view('masterdata.konfirmasi')->compact('pesan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
