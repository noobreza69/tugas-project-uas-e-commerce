<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $primaryKey='id_produk';
	
	protected $table='t_produk';
	
	protected $fillable=[
	'nama_makanan','harga_makanan','stok','foto'
	];
}
