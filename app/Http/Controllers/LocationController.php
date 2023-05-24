<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use Illuminate\Http\Request;

class LocationController extends Controller
{
     public function index()
    {
        $resto = Resto::all();

        return view('pages.locations', [
            'resto' => $resto,
        ]);
    }
}
