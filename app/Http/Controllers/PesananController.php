<?php

namespace App\Http\Controllers;

use App\pesanan;
use App\mobil;
use App\customer;
use Session;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = pesanan::all();
        return view('pesanan.index',compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesanan = pesanan::all();
        $mobil = mobil::all();
        $customer = customer::all();
        return view('pesanan.create',compact('pesanan','mobil','customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'tanggal_boking' => 'required',
        'id_mobil' => 'required',
        'id_customer' => 'required'   
        ]);
    $pesanan= new pesanan;
    $pesanan->tanggal_boking = $request->tanggal_boking;
    $pesanan->id_mobil = $request->id_mobil;
    $pesanan->id_customer = $request->id_customer;
    $pesanan->save();
    session::flash("flash_notification",[
        "level" => "success",
        "message" => "success <b>$pesanan->tanggal_boking</b>"]);
    return redirect()->route('pesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = pesanan::findOrFail($id);
        return view('pesanan.show',compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesanan = pesanan::findOrFail($id);
        return view('pesanan.edit',compact('pesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
        'tanggal_boking' => 'required',
        'id_mobil' => 'required',
        'id_customer' => 'required',   
        ]);
        
        $pesanan = pesanan::find($id);
        $pesanan->update($request->all());
        return redirect()->route('pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesanan = pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect()->route('pesanan.index');
    }
}
