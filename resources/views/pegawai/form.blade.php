@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  {{empty ($result) ? 'Tambah':'Edit'}} Pegawai
        <small>Restoran Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Pegawai</li>
		<li class="active">{{empty ($result) ? 'Tambah':'Edit'}}Data Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/')}}" class="btn bg-purple"><i class="fa 
		  fa-chevron-left"></i>Kembali</a>
		  </div>
			<div class="box-body">
				<form action="{{empty ($result)? url('pegawai/add') : url("pegawai/$result->id_pegawai/edit" ) }}" 
				class="form-horizontal" method="POST">
					{{csrf_field()}}
					
					@if(!empty($result))
					{{method_field('patch')}}
					@endif
				<div class="form-group">
					<label class="control-label col-sm-2">Nama</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control" placeholder=
						"Masukkan pegawai" value="{{@$result->nama}}"/>
					</div>
					
				<div class="form-group">
					<label class="control-label col-sm-2">Jenis Kelamin</label>
					<div class="col-sm-10">
						<input type="text" name="jk" class="form-control" placeholder=
						"Masukkan Jenis Kelamin"value="{{@$result->jk}}"/>
					</div>
					
					<div class="form-group">
					<label class="control-label col-sm-2">Umur pegawai</label>
					<div class="col-sm-10">
						<input type="text" name="umur" class="form-control" placeholder=
						"Masukkan umur pegawai"value="{{@$result->umur}}"/>
					</div>
						
				<div class="form-group">
					
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary" class="fa fa-save"></i>
						Simpan</button>
					</div>
					</div>
				</form>
				
					
				
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
	@endsection