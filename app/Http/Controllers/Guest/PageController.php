<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {

        // tutti i treni del mio db
        $trains = Train::all();
        // data attuale
        $dateNow = date('Y-m-j');

        // dd($dateNow);

        return view('home', compact('trains', 'dateNow'));
    }

}
