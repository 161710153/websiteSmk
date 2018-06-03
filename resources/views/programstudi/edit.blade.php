@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Program Studi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('program_studis.update',$a->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_program') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Program</label>	
			  			<input type="text" name="nama_program" class="form-control" value="{{ $a->nama_program }}" required>
			  			@if ($errors->has('nama_program'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_program') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('fasilitas_id') ? ' has-error' : '' }}">
			  			<label class="control-label"></label>	
			  			<input type="text" name="fasilitas_id" class="form-control" value="{{ $a->fasilitas_id }}" required>
			  			@if ($errors->has('fasilitas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fasilitas_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('industris_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Industri_id</label>	
			  			<input type="text" name="industris_id" class="form-control" value="{{ $a->industris_idm }}" required>
			  			@if ($errors->has('industris_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('industris_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('strukturs_id') ? ' has-error' : '' }}">
			  			<label class="control-label"> Struktur_id</label>	
			  			<input type="text" name="strukturs_id" class="form-control" value="{{ $a->strukturs_id }}" required>
			  			@if ($errors->has('strukturs_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('strukturs_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Perbarui</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection