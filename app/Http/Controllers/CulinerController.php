<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Review;
use Illuminate\Http\Request;

class CulinerController extends Controller
{
    public function index()
    {
        $foods = Food::with('food_galleries')->simplePaginate(9);

        return view('pages.kuliner',[
            'foods' => $foods,
        ]);
    }

    public function detail(Request $request, $id)
    {
        $foods = Food::with(['food_galleries', 'user', 'restos'])->where('slug', $id)->firstOrFail();
        $reviews = Review::with(['user', 'food'])
        ->where('is_aktif', true)
        ->orderBy('created_at', 'desc') // Sorting by 'created_at' column in descending order
        ->get();
        return view('pages.detail-kuliner', [
            'foods' => $foods,
            'reviews' => $reviews
        ]);

    }
}
