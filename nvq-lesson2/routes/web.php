<?php

use App\Http\Controllers\TvcAccountController;
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
Route::get('/greeting', function () {
    return "<h1>Hello World, I'm Văn Quân </h1>";
});

#Redirect
Route::redirect('/here','/there');

Route::get('/there', function() {
    return "<h1>Redirect: here to there";
});

#Route return view
Route::get('/van-quan',function(){
    return view('VanQuan');
});

#Route parameter
Route::get('devmaster/{id}',function($id){
       return "<h1> Devmaster ".$id . "</h1>";
});

#Optional parameter
Route::get('/dev/{name}',function($name = "VanQuan"){
    return "<h1> TÔI RẤT IU Bản thân tôi $name";
});


Route::get('/tvc-account',[TvcAccountController::class,'index'])->name('tvcAccount.index');

Route::get('/account',[Controller::class,'index'])->name('account.index');