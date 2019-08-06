<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
	{

	$data['result']=\App\Pegawai::all();
	return view('pegawai/index')->with($data);
	}
	
	public function create()
	{
		return view('pegawai/form');
	}
	public function store(Request $request)
	{
		$rules=[
		'nama'=>'required|max:100',
		'jk'=>'required|max:100',
		'umur'=>'required|max:100'
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		$status=\App\Pegawai::create($input);
		
		if ($status) return redirect('pegawai')->with('success','Data berhasil ditambahkan');
		else return redirect('pegawai')->with('error','Data gagal ditambahkan');
	}
	
	public function edit($id)
	{
		$data['result']=\App\Pegawai::where('id_pegawai',$id)->first();
	return view('pegawai/form')->with($data);
	}
	
	public function update(Request $request,$id)
	{
		$rules=[
		'nama'=>'required|max:100',
		'jk'=>'required|max:100',
		'umur'=>'required|max:100',
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		$result=\App\Pegawai::where('id_pegawai',$id)->first();
		$status=$result->update($input);
		
		if ($status) return redirect('/')->with('success','Data berhasil diubah');
		else return redirect('/')->with('error','Data gagal diubah');

		}
		
		public function destroy(Request $request,$id)
		{
			$result= \App\Pegawai::where('id_pegawai',$id)->first();
			$status=$result->delete();
			
			if ($status) return redirect('/pegawai')->with('success','Data berhasil dihapus');
			else return redirect('/pegawai')->with('error','Data gagal dihapus');
		}
		public function search(Request $request)
		{
			$search=$request->get('cari');
			$result=\App\Pegawai::where('nama','LIKE','%'.$search.'%')->get();
			
			return view('pegawai/index',compact('search','result'));
		}
		
}
