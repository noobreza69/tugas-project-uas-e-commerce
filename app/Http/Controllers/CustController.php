<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustController extends Controller
{
    public function index()
	{
	$total=\App\Cust::all()->count();
	$data['result']=\App\Cust::all();
	return view('customer/index')->with($data);
	}
	
	
	public function create()
	{
		return view('customer/form');
	}
	
	public function edit($id)
	{
		$data['result']=\App\Cust::where('id_cust',$id)->first();
	return view('customer/form')->with($data);
	}
	
	public function update(Request $request,$id)
	{
		$rules=[
		
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		$result=\App\Cust::where('id_cust',$id)->first();
		$status=$result->update($input);
		
		if ($status) return redirect('customer')->with('success','Data berhasil diubah');
		else return redirect('customer')->with('error','Data gagal diubah');

		}
	
	
	public function store(Request $request)
	{
		$rules=[
		'id_produk'=>'required|exists:t_produk',	
		'jumlah'=>'required|max:100'
		
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		$status=\App\Cust::create($input);
		
		if ($status) return redirect('customer')->with('success','Data berhasil ditambahkan');
		else return redirect('customer')->with('error','Data gagal ditambahkan');
	}
	
	
		
		public function destroy(Request $request,$id)
		{
			$result= \App\Cust::where('id_cust',$id)->first();
			$status=$result->delete();
			
			if ($status) return redirect('customer')->with('success','Data berhasil dihapus');
			else return redirect('customer')->with('error','Data gagal dihapus');
		}

}

