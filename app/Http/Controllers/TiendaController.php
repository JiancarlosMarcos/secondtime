<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){
        // $products = Product::all();
        $products = Product::paginate(12);
        return view('tienda.index', compact('products'));
    }
    public function show($id){
        $producto = Product::find($id);
        return view('tienda.producto',compact('producto'));
    }
    public function checkoutShow($id){
        $producto = Product::find($id);
        return view('tienda.checkout',compact('producto'));
    }
}
