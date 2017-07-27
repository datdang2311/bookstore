<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function getAll()
    {
        return view('backend.news');
    }
}