<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tipo extends Model
{
    //

    protected $table = 'tipo';
	
	protected $primaryKey = 'id_tipo';
	
	public $timestamps = false;

    protected $fillable = array(
	'id_tipo',
	'nombre_tipo'
  
	);
	
}
