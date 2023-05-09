<?php

namespace App\Http\Controllers\Admin;

use App\Models\Food;
use App\Models\User;
use App\Models\Event;
use App\Models\Resto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user  = User::count();
        $food = Food::count();
        $resto = Resto::count();
        $event = Event::count();
        return view('pages.admin.dashboard',[
            'user' => $user,
            'food' => $food,
            'resto' => $resto,
            'event' => $event
        ]);
    }

}
