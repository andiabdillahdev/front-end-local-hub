<?php

namespace App\Http\Controllers\admin\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subKategoriController extends Controller
{
    public function index(){
       return view('panel.admin.master_data.sub_kategori.index'); 
    }

    public function create(){
        return view('panel.admin.master_data.sub_kategori.create'); 
     }
}
