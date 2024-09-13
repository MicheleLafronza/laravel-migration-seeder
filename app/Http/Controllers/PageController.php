<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\Travel;

class PageController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('home', compact('trains'));
    }

    public function today(){

        $trains = Train::whereDate('created_at', now()->format('Y-m-d'))->get();

        return view('home', compact('trains'));
    }

    public function travels(){

        $travels = Travel::all();

        return view('agency', compact('travels'));
    }
}
