<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{

    public function index(){
        $allProduct= Product::all();
        return $allProduct;
    }
}
