<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});
//untuk mengambil data pegawai dan menampilkan table juga data
Route::get('/pegawai',[EmployeeController::class, 'index'])->name('pegawai');

//untuk page tambah data dan mengirimnya ke database
Route::get('/tambahpegawai',[EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');

//untuk page edit data dan mengirimnya ke database
Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');

//untuk hapus data
Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');

// mengirim foto ke database
Route::post('/dropzone/store',[EmployeeController::class, 'dropzone_store'])->name('dropzone_store');

