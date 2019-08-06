@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produk Makanan
        <small>Restoran Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Makanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
	 
		<div class="container">
			<form method="GET" action="{{route('search')}}">
				<input name="cari" type="text" Placeholder="search">
				<button type="submit">Cari</button>
			</form></div>
		
			
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('produk/add')}}" class="btn btn-success"><i class="fa 
		  fa-plus-circle"></i>Tambah</a>
		  </div>
			<div class="box-body">
				<table class="table table-stripped">
				<thead>
				<tr>
					<th>No</th>
					
					<th>Nama Makanan</th>
					<th>Harga Makanan</th>
					<th>Stok</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
				</thead>
				
				<tbody>
					@foreach ($result as $result)
					<tr>
						<td>{{!empty($i) ? ++$i : $i =1 }}</td>
						
						<td>{{$result->nama_makanan}}</td>
						<td>Rp.{{$result->harga_makanan}}.</td>
						<td>{{$result->stok}}</td>
						<td>
							<img src="{{asset('uploads/'.@$result->foto)}}" width="80px" class="img"/>
						</td>
						<td>
						<a href="{{url("produk/$result->id_produk/edit")}}" class="btn btn-sm
						btn-warning"><i class="fa fa-pencil"></i></a>
						<form action="{{url("produk/$result->id_produk/delete")}}"
						method="POST" style="display:inline;">
						{{ csrf_field() }}
						{{ method_field('DELETE')}}
							<button class="btn btn-sm btn-danger"><i class="fa fa-trash"
							></form></i></a>
				
						</td>
					</tr>
					</tbody>
					@endforeach
					
					</table>
        </div>
        <!-- /.box-body -->
       
      </div>
	  	
      <!-- /.box -->

    </section>
    <!-- /.content -->
	@endsection