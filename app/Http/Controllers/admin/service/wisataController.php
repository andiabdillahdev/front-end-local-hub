<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class wisataController extends Controller
{
    public function index(){
        return view('panel.admin.service.wisata.index');
    }

    public function create(){
        return view('panel.admin.service.wisata.create');
    }
}
