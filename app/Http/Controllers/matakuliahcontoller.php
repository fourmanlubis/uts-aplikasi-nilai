<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matakuliahcontoller extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.matakuliah.",[
            "matakuliah" => matakuliah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.matakuliah.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create([
            "nama_matakuliah" => $request->nama_matakuliah
        ]);

        return redirect()->route("matakuliah.index")
            ->with("info","Berhasil Tambah matakuliah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(matakuliah $matakuliah)
    {
        return view("admin.matakuliah.form",[
            "matakuliah" => $matakuliah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matakuliah $matakuliah)
    {
        $kategori->update([
            "nama_matakuliah" => $request->nama_matakuliah
        ]);

        return redirect()->route("matakuliah.index")
            ->with("info","Berhasil Update matakuliah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(matakuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route("matakuliah.index")
            ->with("info","Berhasil Hapus matakuliah");
    }
}
