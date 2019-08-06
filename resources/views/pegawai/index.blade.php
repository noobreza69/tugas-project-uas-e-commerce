@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pegawai
        <small>Restoran Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		@include('templates/feedback')
      <!-- Default box -->
	  <div class="container">
			<form method="GET" action="{{route('cari')}}">
				<input name="cari" type="text" Placeholder="search">
				<button type="submit">Cari</button>
			</form></div>
			
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('pegawai/add')}}" class="btn btn-success"><i class="fa 
		  fa-plus-circle"></i>Tambah</a>
		  </div>
			<div class="box-body">
				<table class="table table-stripped">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Umur</th>
					<th>Aksi</th>
				</tr>
				</thead>
				
				<tbody>
					@foreach ($result as $result)
					<tr>
						<td>{{!empty($i) ? ++$i : $i =1 }}</td>
						
						<td>{{$result->nama}}</td>
						<td>{{$result->jk}}</td>
						<td>{{$result->umur}}</td>
						<td>
						<a href="{{url("pegawai/$result->id_pegawai/edit")}}" class="btn btn-sm
						btn-warning"><i class="fa fa-pencil"></i></a>
						<form action="{{url("pegawai/$result->id_pegawai/delete")}}"
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