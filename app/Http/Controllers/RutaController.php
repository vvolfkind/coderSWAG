<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
		if(Auth::check() && Auth::user()->is_admin == 1) {
			return view('adminpanel');
		} else {
			return view('index'); 
		}
	}
	public function indexUsers(){
		$users = \App\User::where('is_admin', "=", 0)->get();
		return view('users', compact('users'));
	}

	public function edit($email) {
		$user = \App\User::where('email', $email)->first();

		return view('edituser', compact('user'));
	}

	public function update(Request $request, $email){
		$user = \App\User::where('email', $email)->first();

		$user->name = $request->input('name');
		$user->email = $request->input('email');

		

		$user->save();

		return redirect('users');
	}
	public function destroy($email) {
		$user = \App\User::where('email', $email)->first();

		$user->delete();

		return redirect('users');
	}
}
