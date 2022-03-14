<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Producto extends Model
{
    //
    protected $table = 'productos';
	
	protected $primaryKey = 'id_producto';
	
	public $timestamps = false;

	public static function productos($data){
		// print_r($data);
		$sql = 'select * from productos left join categoria on
		productos.id_categoria = categoria.id_categoria
		left join imagen on productos.id_producto = imagen.id_productos
		where productos.id_producto  order by productos.nombre_producto ' . $data;
		// print_r('------------------------------');
		// print_r($sql);
		// die();
		$obj = DB::select($sql);
		return $obj;
	}
	public static function producto($data){
		$sql = 'select productos.*,imagen.*,tipo.*, categoria.*, embalaje.* from productos 
		left join imagen on productos.id_producto = imagen.id_productos 
		left join tipo_producto on imagen.id_imagen = tipo_producto.id_imagen 
		left join tipo on tipo_producto.id_tipo = tipo.id_tipo 
		left join categoria on productos.id_categoria = categoria.id_categoria 
		left join producto_embalaje on productos.id_producto = producto_embalaje.id_producto 
		left join embalaje on producto_embalaje.id_embalaje = embalaje.id_embalaje 
		 where imagen.id_imagen = ' . $data.' order by productos.nombre_producto ';
		//  print_r('select productos.*,imagen.*,tipo.*, categoria.*, embalaje.* from productos 
		//  left join imagen on productos.id_producto = imagen.id_productos 
		//  left join tipo_producto on imagen.id_imagen = tipo_producto.id_imagen 
		//  left join tipo on tipo_producto.id_tipo = tipo.id_tipo 
		//  left join categoria on productos.id_categoria = categoria.id_categoria 
		//  left join producto_embalaje on productos.id_producto = producto_embalaje.id_producto 
		//  left join embalaje on producto_embalaje.id_embalaje = embalaje.id_embalaje 
		//   where imagen.id_imagen = ' . $data.' order by productos.nombre_producto');
		//   die();
		$obj = DB::select($sql);
		return $obj;
	}
	

	public static function productoCategoria($data, $limit){
		$sql = 'select productos.*, categoria.*, imagen.*, embalaje.*  from productos 
		left join categoria on
		productos.id_categoria = categoria.id_categoria
		left join imagen on productos.id_producto = imagen.id_productos
		left join producto_embalaje on productos.id_producto = producto_embalaje.id_producto
        left join embalaje on producto_embalaje.id_embalaje = embalaje.id_embalaje
		';
		if($data != null){
			$sql += 'where  categoria.id_categoria = ' . $data;
		}
		if($limit != null){
			$sql += 'order by productos.nombre_producto ' .$limit;
		}

		$obj = DB::select($sql);
		return $obj;
	}

	public static function productofilterCategoria($data){
		
		$sql = 'select * from productos 
		left join categoria on
		productos.id_categoria = categoria.id_categoria
		left join imagen on productos.id_producto = imagen.id_productos
		where  categoria.id_categoria = ' . $data.' order by productos.nombre_producto';

		$obj = DB::select($sql);
		return $obj;
	}
    public static function productosDestacados(){
				$obj = Producto::leftJoin('categoria', 'productos.id_categoria', '=', 'categoria.id_categoria')
				->leftJoin('imagen', 'productos.id_producto', "=", "imagen.id_productos")
				->whereIn('productos.id_categoria', [2, 3])
				->get();
				$cantidad = DB::select('SELECT productos.id_producto, productos.id_categoria, count(tipo_producto.id_tipo) as cantidad from productos left join categoria on productos.id_producto = categoria.id_categoria left join imagen on productos.id_producto = imagen.id_productos left join tipo_producto on tipo_producto.id_imagen = imagen.id_imagen where productos.id_categoria = 2 or productos.id_categoria = 3 GROUP by productos.id_producto, productos.id_categoria');
				
				foreach($obj as $key => $productos){
					foreach($cantidad as $key_2 => $pro){
						if($productos->id_producto = $pro->id_producto ){
							if($pro->cantidad > 1){
								$obj[$key]->botonModal = true;
							}else{
								$obj[$key]->botonModal = false;
							}

						
						}
					}
				}
				return $obj;
	}
}
