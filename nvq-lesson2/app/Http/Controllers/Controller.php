<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Request;

class Controller extends BaseController
{
    public function index()
    {
     return "<h1> Account Controller; action index; return string";
    }
}
