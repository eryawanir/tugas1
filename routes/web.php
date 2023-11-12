<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    echo '<h1>Hello World</h1>';
    echo '<p> Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/anto', function(){
    echo '<h2 style="text-align: center"> <u>Welcome Anto</u></h2>';

});

Route::get('/belajar', function(){
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/variabel/{satu}/{dua}', function($satu, $dua){
    return "satu = $satu, dua = $dua";
});

Route::get('/stok_barang/{jenis?}/{merek?}',
function($jenis = 'smartphone', $merek = 'samsung'){
    return "Cek sisa stok untuk $jenis $merek";
});

Route::get('/user/{id}', function($id){
    return "tampilkan user dengan id = $id";
})->where('id', '[0-9]+');