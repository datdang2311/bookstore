<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function getAll(){
        return view('backend.orders');
    }
}
