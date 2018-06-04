@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Ekskul
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('ekskuls.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bidang</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('jadwal') ? ' has-error' : '' }}">
			  			<label class="control-label">Jadwal Kegiatan</label>	
			  			<input type="text" name="jadwal" class="form-control"  required>
			  			@if ($errors->has('jadwal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jadwal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('prestasis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Prestasi_id</label>	
			  			<input type="text" name="prestasis_id" class="form-control"  required>
			  			@if ($errors->has('prestasis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('prestasis_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		</d
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection