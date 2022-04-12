<?php

use App\Http\Controllers\AnnunciController;
use App\Http\Controllers\RecensioniController;
use App\Http\Controllers\DettagliController;
use App\Http\Controllers\ImmaginiController;

use App\Http\Controllers\AnnuncioAdminController;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');








Route::get('/annunci', [AnnunciController::class, 'index'])->name('annunci.index')->middleware('auth');

Route::get('/annuncio/create', [AnnunciController::class, 'create'])->name('annunci.create')->middleware('auth');
Route::get('/dettagli/create', [DettagliController::class, 'create'])->name('dettagli.create')->middleware('auth');
Route::get('/immagini/create', [ImmaginiController::class, 'create'])->name('immagini.create')->middleware('auth');


Route::post('dettagli/store/{id}', [DettagliController::class, 'store'])->name('dettagli.store');
Route::post('annunci/store', [AnnunciController::class, 'store'])->name('annunci.store');
Route::post('immagini/store/{id}', [ImmaginiController::class, 'store'])->name('immagini.store');



Route::get('/annunci/{id}', [AnnunciController::class, 'show'])->name('annunci.show');
Route::get('/annuncio/{id}/edit', [AnnunciController::class, 'edit'])->name('annunci.edit');
Route::post('annuncio/{id}/update', [AnnunciController::class, 'update'])->name('annunci.update');
Route::get('/annuncio/{id}/destroy', [AnnunciController::class, 'destroy'])->name('annunci.destroy')->middleware('auth');



Route::get('/admin/users', [UserAdminController::class, 'index'])->name('admin.users.index')->middleware('admin');

Route::get('/admin/annunci', [AnnuncioAdminController::class, 'index'])->name('admin.annunci.index')->middleware('admin');

Route::post('recensioni/{id}', [RecensioniController::class, 'store'])->name('recensioni.store');





Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth')->middleware('admin')->name('adminroute');

Route::get('/notauth',function(){
    return view('notauth');
})->name('notauth');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
