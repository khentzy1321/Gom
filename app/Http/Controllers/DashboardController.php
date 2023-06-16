<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Events::paginate(2);
        $eventsImage = Events::get();

        return view('welcome', compact('events'));
    }
}
