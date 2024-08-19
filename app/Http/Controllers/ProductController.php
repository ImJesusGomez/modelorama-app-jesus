<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function index(){
    return view('product.index-producto');
  }

  public function create(){
    return view('product.create-producto');
  }
  public function show(){
    return view('product.show-producto');
  }
}
