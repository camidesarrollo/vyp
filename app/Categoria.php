<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
    //

    protected $table = 'categoria';
	
	protected $primaryKey = 'id_categoria';
	
	public $timestamps = false;

    protected $fillable = array(
	'id_categoria',
	'nombre_categoria'
  
	);

	public static function categoriaProductos(){
		$obj = DB::select('SELECT categoria.id_categoria, categoria.nombre_categoria, count(imagen.id_imagen) as cantidad FROM imagen left join productos on imagen.id_productos = productos.id_producto
		left join categoria on productos.id_categoria = categoria.id_categoria
		GROUP by categoria.id_categoria, categoria.nombre_categoria');
		return $obj;
	}
	
}
