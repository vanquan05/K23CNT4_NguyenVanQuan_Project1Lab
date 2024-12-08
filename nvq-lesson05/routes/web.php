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
Route::get('/', function () {
    return view('welcome');
});


Route::get('/nvq-login',[nvqController::class,'nvqindex'])->name('nvqlogin.nvqindex'); 
Route::post('/nvq-login',[nvqController::class,'nvqSubmit'])->name('nvqlogin.nvqSubmit'); 


Route::get('/nvq-register', [nvqController::class, 'nvhshowForm'])->name('nvqregister.nvqform');
Route::post('/nvq-register', [nvqController::class, 'nvhsubmitForm'])->name('nvq.nvqsubmit');


Route::get('/nvq-register2', [nvqController::class, 'nvqshowForm2'])->name('nvq.nvh.form2');
Route::post('/nvq-register2', [nvqController::class, 'nvqsubmitForm2'])->name('nvq.nvhsubmit2');

Route::get('/nvq-reservation', [nvqController::class, 'nvqcreate'])->name('nvqreservation.nvqcreate');
Route::post('/nvq-reservation', [nvqController::class, 'nvqstore'])->name('nvqreservation.nvqstore');
