<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaController extends Controller
{
	Public function mostrar() {
		return view('index');
	}

	public function subir() {
		return view('subir');
	}

	public function adminPanel() {
		//dd(auth()->user()->is_admin);
		if(auth()->user()->is_admin == 1) {
			return view('adminpanel');
		} else {
			return view('index'); 
		}
	}
}
