@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Program Studi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama_progran') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Program</label>	
			  			<input type="text" name="nama_progran" class="form-control" value="{{ $a->nama_progran }}" readonly>
			  			@if ($errors->has('nama_progran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_progran') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('fasilitas_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Fasilitas_id</label>	
			  			<input type="text" name="fasilitas_id" class="form-control" value="{{ $a->fasilitas_id }}" readonly>
			  			@if ($errors->has('fasilitas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fasilitas_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('industris_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Industri_id</label>	
			  			<input type="text" name="industris_id" class="form-control" value="{{ $a->industris_id }}" readonly>
			  			@if ($errors->has('industris_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('industris_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('strukturs_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Struktur_id</label>	
			  			<input type="text" name="strukturs_id" class="form-control" value="{{ $a->strukturs_id }}" readonly>
			  			@if ($errors->has('strukturs_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('strukturs_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection