<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NVQ_Quan_Tri_Controller extends Controller
{
    //
    public function nvhLogin(){
        return view('NvhLogin.nvh-login');
    }

    public function nvhLoginSubmit(Request $request){
        return view('NvhLogin.nvh-login');
    }
}