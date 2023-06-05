<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Resto;
use App\Models\Review;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::take(6)->get();
        $foods = Food::take(4)->get();
        $restos = Resto::take(4)->get();
        $reviews = Review::all();
        return view('pages.home', [
            'categories' => $categories, 
            'restos' => $restos,
            'foods' => $foods,  
            'reviews' => $reviews,  
        ]);
    }

}
