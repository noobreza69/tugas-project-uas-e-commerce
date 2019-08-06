@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  {{empty ($result) ? 'Pilih':'Edit'}} Menu 
        <small>Restoran Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('customer')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></li>
		<li class="active">{{empty ($result) ? '':'Edit'}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('customer')}}" class="btn bg-purple"><i class="fa 
		  fa-chevron-left"></i>Kembali</a>
		  </div>
			<div class="box-body">
				<form action="{{empty ($result)? url('customer/add') : url("customer/$result->id_cust/edit" ) }}" 
				class="form-horizontal" method="POST">
					{{csrf_field()}}
					
					@if(!empty($result))
					{{method_field('patch')}}
					@endif
					
				<div class="form-group">
					<label class="control-label col-sm-2">Menu Makanan</label>
					<div class="col-sm-10">
						<select name="id_produk" class="form-control">
							@foreach (\App\Produk::all() as $produk)
							<option value=""></option>
							<option value="{{ $produk->id_produk}}" {{@$result->id_produk==
							$produk->id_produk ? 'selected'  : ''}}>{{ $produk->nama_makanan}}</option>
							@endforeach
						</select>
					</div>
					</div>
					
				<div class="form-group">
					<label class="control-label col-sm-2">Jumlah Pembelian</label>
					<div class="col-sm-10">
						<input type="text" name="jumlah" class="form-control" 
						value="{{@$result->jumlah}}"/>
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