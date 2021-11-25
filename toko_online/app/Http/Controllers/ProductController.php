<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
   public function index() {
       $products = product::all();
        return view('products.index',compact(['products']));
    }
}
