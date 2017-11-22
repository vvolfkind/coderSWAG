<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function index() {
		$categories = \App\Category::all();

		$variables = [
			"categories" => $categories
		];

		return view('products.categories', $variables);
	}
}
