<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{

	public function mostrar(){
		return view('productos');
	}

	public function show(){
		 return view('buzos');
	}

	public function muestra(){
		return view('remeras');
	}

}