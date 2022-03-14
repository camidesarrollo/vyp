<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Producto;
use App\Tipo;
use App\Categoria;
use Illuminate\Http\Request;
use DB;

// use App\Http\Controllers\Mail\Email;
use Mail;
use App\Mail\Email;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Helpers\helper;
use Excel;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PHPExcel_Worksheet_Drawing;

use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    	/**
	 * Método que lista las prestaciones del mantenedor
	 *
	 * @return view
	 */
	public function inicio(){
		$categoriasProductos = Categoria::categoriaProductos();
		$productos = Producto::productosDestacados();
        return view('welcome')->with("productosDestacados", $productos)->with("categoriasProductos", $categoriasProductos);
	}
    
	public function fichaProducto(Request $request){
		$producto = Producto::producto($request->id);
		if(!$producto){
			return view('404');
		}
		// print_r($producto);
		// die();
		$productoCategoria = Producto::productofilterCategoria($producto[0]->id_categoria, null);
		$productosDestacados = Producto::productosDestacados();	
		$categorias = DB::select('Select * from categoria where id_categoria = ' . $producto[0]->id_categoria);
		$productoT = DB::select('Select * from tipo_producto 
		left join tipo on tipo_producto.id_tipo = tipo.id_tipo where tipo_producto.id_imagen = ' . $producto[0]->id_imagen);
		$productoM = DB::select('SELECT * FROM medida left join medida_tipo on medida.id_medida = medida_tipo.id_medida WHERE medida_tipo.id_imagen =' .$producto[0]->id_imagen);
		// print_r(count($productoM));
		// die();
		$productoColores = DB::Select("select * from colores where colores.id_color in (Select id_color from colores_producto where id_tipo = " .$productoT[0]->id_tipo ." and id_imagen = ". $producto[0]->id_imagen. ")");

		return view('ficha_producto')->with("productosDestacados", $productosDestacados)
		->with("productosCategoria", $productoCategoria) 
		->with("producto", $producto)
		->with("categoria", $categorias)
		->with("tipo", $productoT)
		->with("medida", $productoM)
		->with('colores', $productoColores);
	}

	public function productos(){
		$productos = Producto::productos(null);
		$style = "";
		foreach($productos as $key => $product){
			$urlimagen = env('APP_URL') .  "/imagenes/Productos/" .$product->nombre_categoria . "/" . $product->url;
			$style .= ".producto-".$product->id_imagen."::before {background: url(".$urlimagen.") no-repeat center;background-size: cover;transition: all 0.3s;}";
		}
		$productos = count($productos);
		$producto = Producto::productos(null);
		$productosDestacados = Producto::productosDestacados();	

		$categorias = DB::select('Select * from categoria');
		return view('productos')->with("productos", $productos)->with("productosDestacados", $productosDestacados)
		->with("productosCategoria", $producto)->with('estilos', $style)->with("categoria", $categorias);
	}

	public function datoproducto(Request $request){
		$producto = Producto::leftJoin('tipo', 'productos.id_tipo', '=', 'tipo.id_tipo')->where('productos.id_producto', '=', $request->id)->get();
		$productoT = DB::select('Select * from tipo_producto 
		left join tipo on tipo_producto.id_tipo = tipo.id_tipo where tipo_producto.id_imagen = ' . $request->id);
		$productoM = DB::select('SELECT * FROM medida left join medida_tipo on medida.id_medida = medida_tipo.id_medida WHERE medida_tipo.id_imagen =' .$request->id);
		// print_r(count($productoM));
		// die();
		$productoColores = DB::Select("select * from colores where colores.id_color in (Select id_color from colores_producto where id_tipo = " .$productoT[0]->id_tipo ." and id_imagen = ". $producto[0]->id_imagen.")");

		return response()->json(array('estado' => '0', 'mensaje' => $producto, 'tipoProducto' => $productoT, 'medidaProducto' => $productoM, 'coloresProducto' => $productoColores ), 200);
	}
	public function index() {
		$msg = "This is a simple message.";
		$producto = Producto::leftJoin('tipo', 'productos.id_tipo', '=', 'tipo.id_tipo')->where('productos.id_producto', '=', 1)->get();
		return response()->json(array('msg'=> $producto), 200);
	}

	public function categoriaProducto(Request $request){
		// $productosDestacados = Producto::productosDestacados();
		// $producto = Categoria::categoriaProductos();
		// $productosListado = Producto::leftJoin('categoria', 'productos.id_categoria', '=', 'categoria.id_categoria')->get();
		// $tipo = Tipo::get();
		// return view('categoria')->with("producto", $producto)->with('productosListado', $productosListado)->with("productosDestacados", $productosDestacados)->with("tipo", $tipo);
		$productos = Producto::leftJoin('categoria', 'productos.id_categoria', '=', 'categoria.id_categoria')->where('categoria.id_categoria',$request->categoria)->get();
		$style = "";
		foreach($productos as $key => $product){
			$urlimagen = env('APP_URL') .  "/imagenes/Productos/" .$product->nombre_categoria . "/" . $product->url;
			$style .= ".producto-".$product->id_imagen."::before {background: url(".$urlimagen.") no-repeat center;background-size: cover;transition: all 0.3s;}";
		}
		$productos = count($productos);
		$producto = Producto::productos(null);
		$productosDestacados = Producto::productosDestacados();	

		$categorias = DB::select('Select * from categoria');
		$datoscategoria = DB::select('Select * from categoria where id_categoria =' .$request->categoria);

		return view('categoria')->with("productos", $productos)->with("productosDestacados", $productosDestacados)
		->with("productosCategoria", $producto)->with('estilos', $style)->with("categoria", $categorias)->with('id_categoria', $request->categoria)->with('datoscategoria', $datoscategoria[0]);
	}

	public function cotizacion(){
		return view('cotizacion');
	}

	public function solicitud(){
		return view('solicitud-cotizacion');
	}

	public function enviarCotizacion(Request $request){
		$data= [
			"rut" => $request->rut,
			"nombre" => $request->nombre,
			"apellido" => $request->apellido,
			"comuna" => $request->comuna,
			"direccion" => $request->direccion,
			"email" => $request->email,
			"productos" => $request->productos,
			"region" => $request->region,
			"telefono" => $request->telefono,
			"productos" => $request->productos
		];

		// print_r($data['productos']);
		// die();


		$estilos_titulos_tabla_contenido = ['fill' => ['color' => ['argb' => 'ebebeb']], 'font' => ['bold' => true]];
		$estilos_linea_totales = ['font' => array('name' => 'Calibri', 'size' => 12, 'bold' => true)];
		
        $archivo = storage_path('exports\Export_Data.xlsx');
        $productos = Producto::all();
        $excel = Excel::create('Export_Data', function($excel) use ($data){
            $excel->sheet('Sheet 1', function($sheet) use ($data){
				
				$estilos_titulo_reporte = ['color' => ['argb' => '000000'], 'font' => array('name' => 'Calibri', 'size' => 15, 'bold' => false, 'color' => ['argb' => '000000'],), 'blackgroud-color' => ['argb' => 'fff'], 'text-align' => 'center'];
				$sheet->setCellValue('A2', "V&P SPA")->getStyle('A2')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A3', "ANTONIA LOPEZ DE BELLO 743 LOCAL 232")->getStyle('A3')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A4', "RECOLETA")->getStyle('A4')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A5', "FONO: +56940177542")->getStyle('A5')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A6', "MAIL: VENTAS@ENVASESVYP.CL")->getStyle('A6')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A10', "SR: ". $data['nombre']." ".$data['apellido'])->getStyle('A10')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A11', "RUT:" . $data['rut'])->getStyle('A11')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A12', "DIRECCION: " . $data['direccion'] )->getStyle('A12')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('A13', "TELEFONO: ". $data['telefono'])->getStyle('B13')->applyFromArray($estilos_titulo_reporte);
				$sheet->setCellValue('B12', "COMUNA: " .$data['comuna']  )->getStyle('B12')->applyFromArray($estilos_titulo_reporte);
				$objDrawing = new PHPExcel_Worksheet_Drawing;
				$objDrawing->setPath(public_path('imagenes\LOGO-VYP.jpg'))->setWidth(180); //your image path
				$objDrawing->setCoordinates('B2');
				$objDrawing->setWorksheet($sheet);
                $sheet->fromArray($data['productos'],NULL, 'A15');
            });
        // })->store('xlsx', storage_path('app/public/excel/exports'));
		})->store('xlsx', storage_path('exports'));

      
		// $ruta = asset("storage/excel/exports/Export_Data.xlsx");
		// $ruta = asset("storage\exports\Export_Data.xlsx");
        $archivo = storage_path('exports\Export_Data.xlsx');
		Mail::to('camila.zaragoza.villaseca@gmail.com')->send(new Email($data,    $archivo));
		return response()->json(array('msg'=> "Correo de cotizacion enviado exitosamente"), 200);
		//estas usando el servidor de correo de prueba 
		//abre tu correo
	}

	public function getModelo(Request $request){
		$getModelo = DB::Select("Select * from modeloproductos where id_producto = {$request->id}");
		return $getModelo;
	}

	public function enviarContacto(Request $request){
		$data= [
			"rut" => $request->rut,
			"nombre" => $request->nombre,
			"email" => $request->email,
			"telefono" => $request->telefono,
		];
		$ruta = null;
		Mail::to('camila.zaragoza.villaseca@gmail.com')->send(new Email($data,   $ruta));
		return response()->json(array('msg'=> "Correo de cotizacion enviado exitosamente"), 200);

	}
	public function getProductos(Request $request){
		// print_r($request->between);
		// die();
		$productos = Producto::productos($request->between);
		return response()->json(array('estado' => '1', 'productos' => $productos), 200);		
	}

	public function nosotros(){
		return view('nosotros');
	}

	public function contacto(){
		return view('contacto');
	}

	public function getProducto(Request $request){
		// dd($request);
		// die();
		$producto = Producto::producto($request->id_imagen);
		
		$productoT = DB::select('Select * from tipo_producto 
		left join tipo on tipo_producto.id_tipo = tipo.id_tipo where tipo_producto.id_imagen = ' . $producto[0]->id_imagen);

		$productoM = DB::select('SELECT * FROM medida left join medida_tipo on medida.id_medida = medida_tipo.id_medida WHERE medida_tipo.id_imagen =' .$producto[0]->id_imagen);
		// print_r(count($productoM));
		// die();
		$productoColores = DB::Select("select * from colores where colores.id_color in (Select id_color from colores_producto where id_tipo = " .$productoT[0]->id_tipo ." and id_imagen = ". $producto[0]->id_imagen.")");

		return response()->json(array('estado' => '1', 'producto' => $producto, 'tipo' => $productoT, 'medida' => $productoM, 'colores' => $productoColores ), 200);		
	}

	public function getProductosCategoria(Request $request){
		$productos = Producto::productoCategoria($request->id_categoria,$request->limit);
		return response()->json(array('estado' => '1', 'productos' => $productos), 200);	
	}

	public function getMedidaTipo(Request $request){
		$getModelo = DB::Select("select * from medida where medida.id_medida in (Select id_medida from medida_tipo where id_tipo = " . $request->id_tipo ." and id_imagen = ". $request->id_imagen. ")");
		// print_r("select * from medida where medida.id_medida in (Select id_medida from medida_tipo where id_tipo = " . $request->id_tipo ." and id_imagen = ". $request->id_imagen. ")");
		// die();
		// if(!$getModelo){
		// 	print_r("select * from medida where medida.id_medida in (Select id_medida from medida_tipo where id_tipo = " . $request->id_tipo ." and id_imagen = ". $request->id_imagen. ")");
		// 	die();
		// }
		
		return $getModelo;
	}

	public function getColorTipo(Request $request){
		$getColores = DB::Select("select * from colores where colores.id_color in (Select id_color from colores_producto where id_tipo = " . $request->id_tipo ." and id_imagen = ". $request->id_imagen. ")");
		// print_r("select * from medida where medida.id_medida in (Select id_medida from medida_tipo where id_tipo = " . $request->id_tipo ." and id_imagen = ". $request->id_imagen. ")");
		// die();
		// if(!$getColores){
		// 	print_r("select * from colores where colores.id_id_color in (Select id_ from id_colores_producto where id_tipo = " . $request->id_tipo ." and id_imagen = ". $request->id_imagen. ")");
		// 	die();
		// }
		
		return $getColores;
	}
}
// @if($producto[0]->id_medida != null)
// <span class="posted_in" id="medida">Medida: <select id="select_medida">



// @foreach($medida as $key => $pro)
// <option value="{{$pro->id_medida}}">{{$pro->nombre_medida}}</option>
// @endforeach
// </select></span>
// @endif