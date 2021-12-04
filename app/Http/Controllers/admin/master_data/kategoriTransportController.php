<?php

namespace App\Http\Controllers\admin\master_data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kategoriTransportController extends Controller
{
    public function index(){
        return view('panel.admin.master_data.kategori_transport.index'); 
     }
 
     public function create(){
         return view('panel.admin.master_data.kategori_transport.create'); 
      }
}
