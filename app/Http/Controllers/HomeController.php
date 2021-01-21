<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $all_rpoduct = Product::all();
        $data = [

            'products' => $all_rpoduct,
        ];
        return view('home', $data);
    }
}

