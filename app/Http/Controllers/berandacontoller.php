<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berandacontoller extends Controller
{
    public function index(){
        return view("admin.beranda.",[
            "beranda" => Beranda::latest()
                            ->where("user_id",\Auth::id())
                            ->get()
        ]);
    }

    public function show(){
        return view("admin.berita.form", [
            "matakuliah" => \App\Models\matakuliah::all()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            "nama" => "required",
            "matakuliah" => "required|min:50|max:100",
            "nim" => "required|min:10"
        ]);

        Beranda::create([
            "user_id" => $request->user()->id,
            "matakuliah_id" => $request->kategori,
            "nim" => $request->nim,
            "nilai" => $request->nilai
        ]);

        return redirect()->route("admin.berita.index")
                ->with("info","Berhasil input nilai");
    }

    public function edit(Beranda $beranda){
        return view("admin.berita.form",[
            "matakuliah" => \App\Models\matakuliah::all(),
            "beranda" => $beranda
        ]);
    }

    public function update(Beranda $beranda,Request $request){
        $request->validate([
            "nama" => "required",
            "" => "required|min:50|max:255",
            "isi" => "required|min:100"
        ]);

        $berita->update([
            "user_id" => $request->user()->id,
            "matakuliah_id" => $request->kategori,
            "nim" => $request->nim,
            "nilai" => $request->nilai
        ]);

        return redirect()->route("admin.beranda.index")
            ->with("info","Berhasil update nilai");
    }

    public function destory(Beranda $beranda){
        $beranda->delete();

        return redirect()->route("admin.beranda.index")
                ->with("info","Berhasil hapus nilai");
    }

    public function simpannilai(Request $request){
        \App\Models\matakuliah::create([
            "matakuliah" => $request->matakuliah,
            "nim" => $request->nim,
            "user_id" => $request->user()->id
        ]);

        return redirect()->route('detail.beranda',["beranda" => $request->beranda]);
    }
}