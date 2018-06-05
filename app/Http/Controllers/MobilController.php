<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use App\galeri;
use Session;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::with('galeri')->get();
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = mobil::all();
        $galeri = galeri::all();
        return view('mobil.create',compact('mobil','galeri'));
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
            'nama' => 'required',
            'plat_nomor' => 'required|unique:mobils',
            'kapasitas' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'warna' => 'required',
            'perseneling' => 'required',
            'id_galeri' => 'required'
        ]);
        $mobil= new mobil;
        $mobil->nama = $request->nama;
        $mobil->plat_nomor = $request->plat_nomor;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->harga = $request->harga;
        $mobil->jenis = $request->jenis;
        $mobil->warna = $request->warna;
        $mobil->perseneling = $request->perseneling;
        $mobil->id_galeri = $request->id_galeri;
        $mobil->save();
        session::flash("flash_notification",[
            "level" => "success",
            "message" => "success <b>$mobil->nama</b>"]);
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = mobil::findOrFail($id);
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = mobil::findOrFail($id);
        $galeri = galeri::all();
        $selectedGaleri = mobil::findOrFail($id)->id_galeri;
        return view('mobil.edit',compact('mobil','galeri','selectedGaleri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'plat_nomor' => 'required|unique:mobils',
            'kapasitas' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'warna' => 'required',
            'perseneling' => 'required',
            'id_galeri' => 'required'
        ]);
        $mobil = mobil::find($id);
        $mobil->update($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
