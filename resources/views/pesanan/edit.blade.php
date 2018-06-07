@extends('layouts.admin')
@section('content')
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Perbaharui Data Pemboking
			  <br> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pesanan.update',$pesanan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tanggal_boking') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Boking</label>	
			  			<input type="date" name="tanggal_boking" class="form-control" value="{{ $pesanan->tanggal_boking }}" required>
			  			@if ($errors->has('tanggal_boking'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_boking') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">id_mobil</label>	
			  			<input type="text" value="{{ $pesanan->mobil->nama }}" name="id_mobil" class="form-control"  required>
			  			@if ($errors->has('id_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
			  			<label class="control-label">id_customer</label>	
			  			<input type="text" value="{{ $pesanan->customer->nama }}" name="id_customer" class="form-control"  required>
			  			@if ($errors->has('id_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_customer') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection