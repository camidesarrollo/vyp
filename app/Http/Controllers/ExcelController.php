<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Producto;
use Excel;
use Input;

class ExcelController extends Controller
{
    //
    public function getExport(){
        $productos = Producto::all();
        Excel::create('Export Data', function($excel) use ($productos){
            $excel->sheet('Sheet 1', function($sheet) use ($productos){
                $sheet->fromArray($productos);
            });
        })->export('xlsx');
    }
}
