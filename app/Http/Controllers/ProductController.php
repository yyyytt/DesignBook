<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  // productブレードへ返す処理
  public function index()
  {
    return view('product');
  }

  // プロダクトデータ全件をJSONで返す処理
  public function show()
  {
    return Product::with(['product_images', 'tags'])
      ->has('product_images')
      ->get();
  }
}
