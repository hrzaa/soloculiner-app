<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Resto;
use App\Models\Review;
use App\Models\Category;
use Illuminate\Http\Request;

class CulinerController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $foods = Food::with('food_galleries')->Paginate(6);

        return view('pages.culinary',[
            'foods' => $foods,
            'categories' => $categories
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $foods = Food::with('food_galleries')->where('categories_id', $category->id)->Paginate(32);

        return view('pages.culinary', [
            'categories' => $categories,
            'foods' => $foods 
        ]);
    }
}
