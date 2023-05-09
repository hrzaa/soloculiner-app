<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Resto;
use Illuminate\Http\Request;

class CulinerController extends Controller
{
    public function index()
    {
        $foods = Food::take(9)->get();
        $restos = Resto::with('resto_galleries')->take(9)->get();
        return view('pages.kuliner',[
            'foods' => $foods,
            'restos' =>  $restos
        ]);
    }

    public function detail()
    {
        return view('pages.detail-kuliner');
    }
}
