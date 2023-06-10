<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Resto;
use App\Models\Review;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(Request $request, $id)
    {
        $foods = Food::with(['food_galleries', 'user'])
            ->where('slug', $id)
            ->firstOrFail();
        $restos = Resto::with(['resto_galleries', 'food'])
            ->where('food_id', $foods->id) // Menambahkan kondisi where untuk memfilter berdasarkan ID makanan
            ->take(4)
            ->get();
        $reviews = Review::with(['user', 'food'])
            ->where('is_aktif', true)
            ->orderBy('created_at', 'desc') // Sorting by 'created_at' column in descending order
            ->get();
        return view('pages.detail-kuliner', [
            'foods' => $foods,
            'reviews' => $reviews,
            'restos' => $restos
        ]);

    }
}
