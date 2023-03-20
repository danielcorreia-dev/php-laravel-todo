<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index() {

    $products = 'product list';
    return view('products.index', ['products' => $products]);
  }
}
