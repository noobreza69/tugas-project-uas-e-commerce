<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
     public $primaryKey='id_menu';
	
	protected $table='t_menu';
	
	protected $fillable=[
	'id_produk'
	];
	
	public function produk()
	{
		return $this->hasOne('\App\Produk','id_produk','id_produk');
	}
}
