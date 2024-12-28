<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function detail($slug){
        return view('product-detail');
    }
}
