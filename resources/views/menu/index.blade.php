@extends('tempcu.cust')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Menu yang tersedia
        
      </h1>
      <ol class="breadcrumb">
       
   
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	  <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.min.css">
		
      <!-- Default box -->
	  
      <div class="box">
        
		  </div>
			<div class="box-body">
				<table class="table table-stripped " border="4">
				<thead>
				<tr>
					<th>No</th>
					<th>foto</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>stok</th>
					
					
				</tr>
				</thead>
				
				<tbody>
					@foreach ($result as $result)
					<tr>
						<td>{{!empty($i) ? ++$i : $i =1 }}</td>
						<td><img src="{{asset('uploads/'.@$result->produk->foto)}}" width="80px" class="img"/></td>
						<td>{{@$result->produk->nama_makanan}}</td>
						<td>{{@$result->produk->harga_makanan}}</td>
						<td>{{@$result->produk->stok}}</td>
						
						
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