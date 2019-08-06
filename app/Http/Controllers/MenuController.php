<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function index()
	{
	$data['result']=\App\Menu::all();
	return view('menu/index')->with($data);
	}
	
	public function store(Request $request)
	{
		$rules=[
		
		
		];
		$this->validate($request,$rules);
		
		$input=$request->all();
		$status=\App\Menu::create($input);
	
	}
	
	
}
