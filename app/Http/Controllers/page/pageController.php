<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function penginapan(){
        return view('page.penginapan.index');
    }

    public function transportasi(){
        return view('page.transportasi.index');
    }
}
