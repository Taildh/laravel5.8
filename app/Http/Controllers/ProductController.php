<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index () {
    	$products = Product::All();
    	return view('products.index', compact('products'));
    }

    public function add () {
    	return view('products.add');
    }
}
