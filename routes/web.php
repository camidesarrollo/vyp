<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@inicio')->name('inicio');


Route::get('/nosotros','Controller@nosotros')->name('nosotros'); 

Route::get('/contacto','Controller@contacto')->name('contacto'); 

Route::get('/producto/{id}', 'Controller@fichaProducto')
    ->name('producto.fichaProducto');

Route::get('/productos', 'Controller@productos')
    ->name('view_productos');

Route::get('/producto/detalleProducto', 'Controller@datoproducto')
    ->name('producto.detalleProducto');

Route::get('/getmsg','Controller@index')->name('getmsg');

Route::get('categoria-producto/{categoria}','Controller@categoriaProducto')->name('categoria');

Route::get('/cotizacion', 'Controller@cotizacion')->name('cotizacion');

Route::get('/solicitud-de-cotizacion', 'Controller@solicitud')->name('solicitud');

Route::GET('/enviarCotizacion', 'Controller@enviarCotizacion')->name('enviarCotizacion');

Route::get('/exportar', 'ExcelController@getExport')->name('exportar');

Route::get('/getModelo', 'Controller@getModelo')->name('getModelo');

Route::get('/enviarContacto', 'Controller@enviarContacto')->name('enviarContacto');

Route::get('/getProductos', 'Controller@getProductos')->name('get.productos');

Route::get('/getProducto', 'Controller@getProducto')->name('get.producto');

Route::get('/getProductosCategoria', 'Controller@getProductosCategoria')->name('get.productos.categoria');

Route::get('/getMedidaTipo', 'Controller@getMedidaTipo')->name('get.medida.tipo');

Route::get('/getColorTipo', 'Controller@getColorTipo')->name('get.color.tipo');

