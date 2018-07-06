@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('jadwal.index') }}" class="btn btn-outline-danger">
                        
                        Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('jadwal.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal</label>	
			  			<input type="date" name="tanggal" class="form-control"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('durasi') ? ' has-error' : '' }}">
			  			<label class="control-label">durasi </label>	
			  			<input type="time" name="durasi" class="form-control"  required>
			  			@if ($errors->has('durasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('durasi') }}</strong>
                            </span>
                        @endif
					  </div>
					  <div class="form-group {{ $errors->has('quad') ? ' has-error' : '' }}">
			  			<label class="control-label">dp Masuk </label>	
			  			<input type="text" name="quad" class="form-control"  required>
			  			@if ($errors->has('quad'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quad') }}</strong>
                            </span>
                        @endif
			  		</div>
					  <div class="form-group {{ $errors->has('paket_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis paket</label>	
			  			<select name="paket_id" class="form-control">
			  				@foreach($a as $data)
			  				<option value="{{ $data->id }}">{{ $data->jenis_paket }} </option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('paket_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paket_id') }}</strong>
                            </span>
                        @endif
					  </div>
			  		

			  	<button type="submit" class="btn btn-outline-primary"> 
                                    <i class="fa fa-check-circle fa-lg"></i>
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-outline-danger"> 
                                    <i class="fa  fa-exclamation-triangle fa-lg"></i>
                                    Batal
                                </button>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection