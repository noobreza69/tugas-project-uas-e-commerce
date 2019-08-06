<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
     public $primaryKey='id_pegawai';
	
	protected $table='t_pegawai';
	
	protected $fillable=[
	'nama','jk','umur'
	];
}
