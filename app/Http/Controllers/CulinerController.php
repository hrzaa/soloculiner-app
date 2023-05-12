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

    public function detail(Request $request, $id)
    {
        $foodId = $id;
        $foods = Food::query()
            ->select('food.food_name', 'food.food_history', 'food.food_desc')
            ->where('food.id', $foodId)
            ->first();

        $restos = Resto::query()
            ->select('restos.resto_name', 'restos.price', 'resto_galleries.photos')
            ->where('food_resto.food_id', $foodId)
            ->join('food_resto', 'restos.id', '=', 'food_resto.resto_id')
            ->join('resto_galleries', 'restos.id', '=', 'resto_galleries.resto_id')
            ->take(4)
            ->get();

        $food = Food::count();
        $resto = Resto::count();

        return view('pages.detail-kuliner', [
            'foods' => $foods,
            'restos' => $restos,
            'food' => $food,
            'resto' => $resto
        ]);

    }
}
