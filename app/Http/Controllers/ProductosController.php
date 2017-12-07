<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{

	public function mostrar(){
		return view('productos');
	}

	public function mostrarBuzos(){
		 return view('buzos');
	}

	public function mostrarRemeras(){
		return view('remeras');
	}

	public function  mostrarMisc(){
		return view('misc');
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

		return redirect('/productos');
	}

	public function traer($id) {
		
		$products = \App\product::where('category_id', "=", $id)->get();
		
		$VAC= compact('products');
		return view('buzos')->with($VAC);
	}

	public function todos(){
		$products = \App\product::all();
		return view('buzos',compact('products'));
	}

}