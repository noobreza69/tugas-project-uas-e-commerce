@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  {{empty ($result) ? 'Tambah':'Edit'}}Tambah Produk Makanan
        <small>Restoran Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Produk</li>
		<li class="active">{{empty ($result) ? 'Tambah':'Edit'}}Data Makanan</li>
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
				<form action="{{empty ($result)? url('produk/add') : url("produk/$result->id_produk/edit" ) }}" 
				class="form-horizontal" method="POST"
				enctype=”multipart/form-data">
					{{csrf_field()}}
					
					@if(!empty($result))
					{{method_field('patch')}}
					@endif
					
					
				<div class="form-group">
					<label class="control-label col-sm-2">Nama Makanan</label>
					<div class="col-sm-10">
						<input type="text" name="nama_makanan" class="form-control" placeholder=
						"Masukkan produk" value="{{@$result->nama_makanan}}"/>
					</div>
					
				<div class="form-group">
					<label class="control-label col-sm-2">Harga Makanan</label>
					<div class="col-sm-10">
						<input type="text" name="harga_makanan" class="form-control" placeholder=
						"Masukkan harga produk"value="{{@$result->harga_makanan}}"/>
					</div>
					
					<div class="form-group">
					<label class="control-label col-sm-2">Stok produk</label>
					<div class="col-sm-10">
						<input type="text" name="stok" class="form-control" placeholder=
						"Masukkan stok produk"value="{{@$result->stok}}"/>
					</div>
						
					<div class="form-group">
					<label class="control-label col-sm-2">Foto</label>
					<div class="col-sm-10">
						<input type="file" name="foto" value="{{@$result->foto}}" />
					</div>
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