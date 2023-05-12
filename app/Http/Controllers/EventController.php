<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('event_galleries')->take(8)->get();
        return view('pages.event', [
            'events' => $events
        ]);
    }

    public function detail(Request $request, $id)
    {
        $data = Event::findOrFail($id);
        return view('pages.detail-event',[
            'data' => $data
        ]);
    }
}
