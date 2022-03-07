<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class TripController extends Controller
{
    public function index() {

        $list_trips = Trip::all();
        
        return view('welcome', ['list_trips' => $list_trips]);
    }
}
