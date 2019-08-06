<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
	
	public function index(Request $request)
	{
		
	$data['result']=\App\Produk::all();
	return view('produk/index')->with($data);
	}
	
	public function create()
	{
		return view('produk/form');
	}
	public function store(Request $request)
	{
		$rules=[
		'nama_makanan'=>'required|max:100',
		'harga_makanan'=>'required|max:100',
		'stok'=>'required|max:100',
		
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		
		if ($request->hasFile('foto')&& $request->file('foto')->isValid()){
			$filename = $input['id_produk']. ".". $request->file('foto')->getClientOriginalExtension();
			$request->file('foto')->storeAs('',$filename);
			$input['foto']=$filename;
		}
		$status=\App\Produk::create($input);
		
		if ($status) return redirect('/')->with('success','Data berhasil ditambahkan');
		else return redirect('/')->with('error','Data gagal ditambahkan');
	}
	
	public function edit($id)
	{
		$data['result']=\App\Produk::where('id_produk',$id)->first();
	return view('produk/form')->with($data);
	}
	
	public function update(Request $request,$id)
	{
		$rules=[
		'nama_makanan'=>'required|max:100',
		'harga_makanan'=>'required|max:100',
		'stok'=>'required|max:100',
		
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		$result=\App\Produk::where('id_produk',$id)->first();
		
		if($request->hasFile('foto')&& $request->file('foto')->isValid()){
			$filename=$input['id_produk']. ".". $request->file('foto')->getClientOriginalExtension();
			$request->file('foto')->storeAs('',$filename);
			$input['foto']=$filename;
		}
		$status=$result->update($input);
		
		if ($status) return redirect('/')->with('success','Data berhasil diubah');
		else return redirect('/')->with('error','Data gagal diubah');

		}
		
		public function destroy(Request $request,$id)
		{
			$result= \App\Produk::where('id_produk',$id)->first();
			$status=$result->delete();
			
			if ($status) return redirect('/')->with('success','Data berhasil dihapus');
			else return redirect('/')->with('error','Data gagal dihapus');
		}
		
		public function search(Request $request)
		{
			$search=$request->get('cari');
			$result=\App\Produk::where('nama_makanan','LIKE','%'.$search.'%')->get();
			
			return view('produk/index',compact('search','result'));
		}
}

