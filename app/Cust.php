<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cust extends Model
{
     public $primaryKey='id_cust';
	
	protected $table='t_cust';
	
	protected $fillable=[
	'jumlah','id_produk'
	];
	
	public function produk()
	{
		return $this->hasOne('\App\Produk','id_produk','id_produk');
	}
}
