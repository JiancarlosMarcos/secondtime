<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
    public function index(){
        // $products = Product::all();
        $products = Product::paginate(8);
        return view('home', compact('products'));
    }
}
