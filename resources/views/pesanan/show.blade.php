@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pesanan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Tanggal Boking</label>	
			  			<input type="text" name="tanggal_boking" class="form-control" value="{{ $pesanan->tanggal_boking }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">id_mobil</label>
						<input type="text" name="id_mobil" class="form-control" value="{{ $pesanan->id_mobil }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">id_costumer</label>
						<input type="text" name="id_costumer" class="form-control" value="{{ $pesanan->id_costumer }}"  readonly>
			  		</div>
                      </div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection