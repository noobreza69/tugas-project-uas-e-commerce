<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
			'nama_makanan'=>'Mie Goreng Telur',
			'harga_makanan'=>'Rp.15.000',
			'stok'=>'100'
			];
			DB::table('t_produk')->insert($data);
    }
}
