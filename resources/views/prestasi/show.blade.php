@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Prestasi
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bidang</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}" readonly>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_peroleh') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Peroleh</label>	
			  			<input type="text" name="tgl_peroleh" class="form-control" value="{{ $a->tgl_peroleh }}" readonly>
			  			@if ($errors->has('tgl_peroleh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_peroleh') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection