@extends('tempcu/cust')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Silahkan Pesan Makanan Kesukaan Anda
        
      </h1>
      <ol class="breadcrumb">
       
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	  <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.min.css">
		@include('templates/feedback')
      <!-- Default box -->
       
		  
		  <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('customer/add')}}" class="btn btn-success"><i class="fa 
		  fa-plus-circle"></i>Pesan</a>
		  </div><br>
			<div class="box-body">
				<table class="table table-stripped " border="4">
				<thead>
				<tr>
					<th>No</th>
					<th>foto</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Jumlah Pembelian</th>
					<th>Total</th>
					<th>Pembatalan</th>
					
					
				</tr>
				</thead>
				
				<tbody>
					@foreach ($result as $result)
					<tr>
						<td>{{!empty($i) ? ++$i : $i =1 }}</td>
						<td><img src="{{asset('uploads/'.@$result->produk->foto)}}" width="80px" class="img"/></td>
						<td>{{@$result->produk->nama_makanan}}</td>
						<td>Rp.{{@$result->produk->harga_makanan}}</td>
						<td>{{@$result->jumlah}}</td>
						<td>RP.{{@$result->produk->harga_makanan*@$result->jumlah}}.000</td>
						<td> 
						<a href="{{url("customer/$result->id_cust/edit")}}" class="btn btn-sm
						btn-warning"><i class="fa fa-pencil"></i></a>
						<form action="{{url("customer/$result->id_cust/delete")}}"
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
       
      
      <!-- /.box -->

    </section>
    <!-- /.content -->
	@endsection