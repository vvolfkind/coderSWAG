<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

	protected $fillable = ['name', 'cost', 'category_id', 'fotopath'];

	public function properties() {
			return $this->belongsToMany('\App\propertie', 'product_property', 'product_id', 'property_id');
	}

	public function category() {
			return $this->belongsTo('\App\categorie', 'category_id', 'id');
	}


	public function producto(Request $request){

		$Imagen = $request->file('fotoPath');

		$fotoPath = $request->file('fotoPath')->productoAs('productos', uniqid() . "." . $Imagen, 'public');
		$img->path = $fotoPath;
		$img->save();
		
		return redirect('/productos');
	}
}
