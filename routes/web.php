<?php

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
// Route::get('/', function (){
//     return view('layout/front/f_template');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');
Route::get('/profil/add', [App\Http\Controllers\ProfilController::class, 'add']);
Route::post('/profil/insert', [App\Http\Controllers\ProfilController::class, 'insert']);
Route::get('/profil/{id_profil}/edit', [App\Http\Controllers\ProfilController::class, 'edit']);
Route::post('/profil/update/{id_profil}', [App\Http\Controllers\ProfilController::class, 'update']);
Route::get('/profil/delete/{id_profil}', [App\Http\Controllers\ProfilController::class, 'delete']);

Route::get('/portofolio', [App\Http\Controllers\PortofolioController::class, 'index'])->name('portofolio');
Route::get('/portofolio/add', [App\Http\Controllers\PortofolioController::class, 'add']);
Route::post('/portofolio/insert', [App\Http\Controllers\PortofolioController::class, 'insert']);
Route::get('/portofolio/{id_portofolio}/edit', [App\Http\Controllers\PortofolioController::class, 'edit']);
Route::post('/portofolio/update/{id_portofolio}', [App\Http\Controllers\PortofolioController::class, 'update']);
Route::get('/portofolio/delete/{id_portofolio}', [App\Http\Controllers\PortofolioController::class, 'delete']);

Route::get('/keahlian', [App\Http\Controllers\KeahlianController::class, 'index'])->name('keahlian');
Route::get('/keahlian/add', [App\Http\Controllers\KeahlianController::class, 'add']);
Route::post('/keahlian/insert', [App\Http\Controllers\KeahlianController::class, 'insert']);
Route::get('/keahlian/{id_keahlian}/edit', [App\Http\Controllers\KeahlianController::class, 'edit']);
Route::post('/keahlian/update/{id_keahlian}', [App\Http\Controllers\KeahlianController::class, 'update']);
Route::get('/keahlian/delete/{id_keahlian}', [App\Http\Controllers\KeahlianController::class, 'delete']);

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/contact/add', [App\Http\Controllers\ContactController::class, 'add']);
Route::post('/contact/insert', [App\Http\Controllers\ContactController::class, 'insert']);

Route::get('/pengalaman', [App\Http\Controllers\PengalamanController::class, 'index'])->name('pengalaman');
Route::get('/pengalaman/add', [App\Http\Controllers\PengalamanController::class, 'add']);
Route::post('/pengalaman/insert', [App\Http\Controllers\PengalamanController::class, 'insert']);
Route::get('/pengalaman/{id_pengalaman}/edit', [App\Http\Controllers\PengalamanController::class, 'edit']);
Route::post('/pengalaman/update/{id_pengalaman}', [App\Http\Controllers\PengalamanController::class, 'update']);
Route::get('/pengalaman/delete/{id_pengalaman}', [App\Http\Controllers\PengalamanController::class, 'delete']);

Route::get('/pendidikan', [App\Http\Controllers\PendidikanController::class, 'index'])->name('pendidikan');
Route::get('/pendidikan/add', [App\Http\Controllers\PendidikanController::class, 'add']);
Route::post('/pendidikan/insert', [App\Http\Controllers\PendidikanController::class, 'insert']);
Route::get('/pendidikan/{id_pendidikan}/edit', [App\Http\Controllers\PendidikanController::class, 'edit']);
Route::post('/pendidikan/update/{id_pendidikan}', [App\Http\Controllers\PendidikanController::class, 'update']);
Route::get('/pendidikan/delete/{id_pendidikan}', [App\Http\Controllers\PendidikanController::class, 'delete']);
