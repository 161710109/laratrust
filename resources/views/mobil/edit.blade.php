@extends('layouts.admin')
@section('content')
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Perbaharui Data Mobil
			  <br> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('mobil.update',$mobil->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobil->nama }}" required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('plat_nomor') ? ' has-error' : '' }}">
			  			<label class="control-label">Plat Nomor</label>	
			  			<input type="text" value="{{ $mobil->plat_nomor }}" name="plat_nomor" class="form-control"  required>
			  			@if ($errors->has('plat_nomor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_nomor') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kapasitas') ? ' has-error' : '' }}">
			  			<label class="control-label">kapasitas</label>	
			  			<input type="text" value="{{ $mobil->kapasitas }}" name="kapasitas" class="form-control"  required>
			  			@if ($errors->has('kapasitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kapasitas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" value="{{ $mobil->harga }}" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis</label>	
			  			<input type="text" value="{{ $mobil->jenis }}" name="jenis" class="form-control"  required>
			  			@if ($errors->has('jenis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna</label>	
			  			<input type="text" value="{{ $mobil->warna }}" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('perseneling') ? ' has-error' : '' }}">
			  			<label class="control-label">Perseneling</label>	
			  			<input type="text" value="{{ $mobil->perseneling }}" name="perseneling" class="form-control"  required>
			  			@if ($errors->has('perseneling'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perseneling') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_galeri') ? ' has-error' : '' }}">
			  			<label class="control-label">Galeri</label>	
			  			<input name="id_galeri" class="form-control" required>
			  			@if ($errors->has('id_galeri'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_galeri') }}</strong>
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