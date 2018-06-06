@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Pemboking 
			  	<div class="panel-title pull-right"><a href="{{ route('pesanan.create') }}">Tambah</a>
			  	</div>
			  </div>
			   <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                 <thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Tanggal Boking</th>
					  <th>id_mobil</th>
					  <th>id_costumer</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($pesanan as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->tanggal_boking }}</td>
				    	<td><p>{{ $data->id_mobil }}</p></td>
				    	<td><p>{{ $data->id_costumer }}</p></td>
							<a class="btn btn-warning" href="{{ route('pesanan.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('pesanan.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('pesanan.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection