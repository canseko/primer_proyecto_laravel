<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    function index(){
    
        return view('carousel.index', [
            
        ]);
    }
}
