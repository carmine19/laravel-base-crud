<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $all_product = Product::all();

        $data = [

            'products' => $all_product,
        ];
        return view('home', $data);
    }
}

