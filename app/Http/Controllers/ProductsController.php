<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
	public function index() {
		$products = \App\Product::all();
		
		$variables = [
			"products" => $products
		];

		return view('products.index', $variables);
	}
}
