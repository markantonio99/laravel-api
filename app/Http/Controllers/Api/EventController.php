<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::limit(20)->get();
        return response()->json([
            'success' => true,
            'results' =>$events,
        ]);
    }
}
