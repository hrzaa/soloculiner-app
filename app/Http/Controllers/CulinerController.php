<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulinerController extends Controller
{
    public function index()
    {
        return view('pages.kuliner');
    }

    public function detail()
    {
        return view('pages.detail-kuliner');
    }
}
