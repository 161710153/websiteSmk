@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Ekstrakulikuler
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Ektrakulikuler</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}" readonly>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jadwal') ? ' has-error' : '' }}">
			  			<label class="control-label">Jadwal Kegiatan</label>	
			  			<input type="text" name="jadwal" class="form-control" value="{{ $a->jadwal }}" readonly>
			  			@if ($errors->has('jadwal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jadwal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('prestasis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Prestasi_id</label>	
			  			<input type="text" name="prestasis_id" class="form-control" value="{{ $a->prestasis_id }}" readonly>
			  			@if ($errors->has('prestasis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('prestasis_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection