<?php

use App\Http\Controllers\berandacontoller;
use App\Http\Controllers\matakuliahcontoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda.home',[
        "matakuliah" => \App\Models\matakuliah::all(),
        "beranda" => \App\Models\Beranda::beranda
    ]);
});

Route::get('/home/matakuliah/{matakuliah_id}',function($matakuliah_id){
    return view('beranda.home',[
        
    ]);
})->name("matakuliah");

Route::get('/detail/{beranda}',function($beranda){
    return view('berita.detail',[
        "beranda" => \App\Models\Berita::find($beranda)
    ]);
})->name("detail.beranda");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Berita
Route::middleware(['auth'])->group(function () {
    Route::get("/admin/beranda/",[berandacontoller::class,'index'])->name("admin.beranda.index");
    Route::get("/admin/beranda/form",[berandacontoller::class,'show'])->name("admin.beranda.form");
    Route::post("/admin/beranda",[berandacontoller::class,'nilai'])->name("admin.beranda.nilai");

    Route::get("admin/beranda/rubah/{beranda}",[berandacontoller::class,"edit"])->name("admin.beranda.edit");
    Route::post("admin/beranda/update/{beranda}",[berandacontoller::class,"update"])->name("admin.beranda.update");

    Route::get("admin/beranda/destory/{beranda}",[berandacontoller::class,'destory'])
        ->name("admin.beranda.destroy");

    Route::post("/mahasiswa",[berandacontoller::class,'simpannamamahasiswa'])->name("simpan.mahasiswa");

    Route::resource('matakuliah',matakuliahcontoller::class);
});