@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Industri
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Industri</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}" readonly>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tahun_kerjasama') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun Kerjasaahun</label>	
			  			<input type="text" name="tahun_kerjasama" class="form-control" value="{{ $a->tahun_kerjasama }}" readonly>
			  			@if ($errors->has('tahun_kerjasama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_kerjasama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection