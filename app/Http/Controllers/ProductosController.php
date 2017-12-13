<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{

	public function mostrar(){
		return view('productos');
	}

		public function mostrarRemeras(){
		$remeras = \App\product::where('category_id', "=", 1)->get();
		return view('remeras', compact('remeras'));
	}

	public function mostrarBuzos(){
		$buzos = \App\product::where('category_id', "=", 2)->get();
		return view('buzos', compact('buzos'));
	}


	public function  mostrarMisc(){
		$misc = \App\product::where('category_id', "=", 3)->get();
		return view('misc', compact('misc'));
	}

	public function store(Request $request) {

		$rules = [
			"name" => "required|unique:products",
			"cost" => "required|numeric",
			"category_id" => "required|numeric|between:1,3",
			"fotoPath" => "required",
		];

		$messages = [
			"required" => "El :attribute es requerido!",
			"unique" => "El :attribute tiene que ser único!",
			"between" => "El :attribute tiene que estar entre :min y :max."
		];

		$request->validate($rules, $messages);



		$extensionImagen = $request->file('fotoPath')->getClientOriginalExtension();

		$fotoPath = $request->file('fotoPath')->storeAs('productos', uniqid() . "." . $extensionImagen, 'public');
		

		$product = \App\product::create([
			'name' => $request->input('name'),
			'cost' => $request->input('cost'),
			'fotopath' => $fotoPath
		]);


		$category = \App\categorie::find($request->input('category_id'));

		$product->properties()->sync($request->input('properties'));
		$product->category()->associate($category);
		$product->save();

		return redirect('/subir');
	}

	public function todos(){
		$products = \App\product::all();
		return view('buzos',compact('products'));
	}

}