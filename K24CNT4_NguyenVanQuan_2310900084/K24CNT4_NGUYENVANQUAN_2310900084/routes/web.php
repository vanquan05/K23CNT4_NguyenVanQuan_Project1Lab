<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Nvq_Quan_Tri_Vien_Controller;
use App\Http\Controllers\Nvq_Loai_San_Pham_Controller;
use App\Http\Controllers\Nvq_San_Pham_Controller;
use App\Http\Controllers\Nvq_Khach_Hang_Controller;
use App\Http\Controllers\Nvq_Hoa_Don_Controller;
use App\Http\Controllers\Nvq_CT_Hoa_Don_COntroller;
use App\Http\Controllers\Nvq_Thanh_Toan_Controller;

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
# Đăng nhập
Route::get('/admins/nvq-login',[nvq_Quan_Tri_Vien_Controller::class,'nvqLogin'])->name('admins.nvqLogin');
Route::post('/admins/nvq-login',[nvq_Quan_Tri_Vien_Controller::class,'nvqsubmit'])->name('admins.nvqLoginSubmit');

 #Admins
Route::get('/nvq-admins',function(){
    return view('nvqAdmins.nvqSanPham.nvqIndex');});
  
#Loai San Pham
Route::get('/nvq-admins/nvq-loai-san-pham',[Nvq_Loai_San_Pham_Controller::class,'nvqList'])->name('nvqadmins.nvqloaisanpham');
#Edit loại sản phẩm
Route::get('/nvq-admins/nvq-loai-san-pham/nvq-edit/{id}',[Nvq_Loai_San_Pham_Controller::class,'nvqEdit'])->name('nvqadmins.nvqloaisanpham.nvqedit');
Route::get('/nvq-admins/nvq-loai-san-pham/nvq-edit',[Nvq_Loai_San_Pham_Controller::class,'nvqEditSubmit'])->name('nvqadmins.nvqloaisanpham.nvqeditsubmit');

#Delete loai san pham
Route::get('/nvq-admins/nvm-loai-san-pham/nvq-delete/{id}',[Nvq_Loai_San_Pham_Controller::class,'nvqDelete'])->name('nvqadmins.nvqloaisanpham.nvqdelete');

#San Pham
Route::get('/nvq-admins/nvq-san-pham',[Nvq_San_Pham_Controller::class,'nvqList'])->name('nvqadmins.nvqsanpham');
Route::get('/nvq-admins/nvq-san-pham/nvq-create',[Nvq_San_Pham_Controller::class,'nvqCreate'])->name('nvqadmins.nvqsanpham.nvqcreate');
Route::post('/nvq-admins/nvq-san-pham/nvq-create',[Nvq_San_Pham_Controller::class,'nvqCreateSubmit'])->name('nvqadmins.nvqsanpham.nvqcreatesubmit');

#Edit sản phẩm
Route::get('/nvq-admins/nvq-san-pham/nvq-edit/{id}',[Nvq_San_Pham_Controller::class,'nvqEdit'])->name('nvqadmins.nvqsanpham.nvqedit');
Route::get('/nvq-admins/nvq-san-pham/nvq-edit',[Nvq_San_Pham_Controller::class,'nvqEditSubmit'])->name('nvqadmins.nvqsanpham.nvqeditsubmit');

#Khach Hang
Route::get('/nvq-admins/nvq-khach-hang',[Nvq_Khach_Hang_Controller::class,'nvqList'])->name('nvqadmins.nvqkhachhang');
Route::get('/nvq-admins/nvq-khach-hang/nvm-create',[Nvq_Khach_Hang_Controller::class,'nvqCreate'])->name('nvqadmins.nvqkhachhang.nvmcreate');
Route::post('/nvq-admins/nvq-khach-hang/nvm-create',[Nvq_Khach_Hang_Controller::class,'nvqCreateSubmit'])->name('nvqadmins.nvqkhachhang.nvqcreatesubmit');
