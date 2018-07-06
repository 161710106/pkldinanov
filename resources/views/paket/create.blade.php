@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('paket.index') }}" class="btn btn-outline-danger">
                        Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('paket.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('jenis_paket') ? ' has-error' : '' }}">
			  			<label class="control-label"> jenis paket</label>	
			  			<input type="text" name="jenis_paket" class="form-control"  required>
			  			@if ($errors->has('jenis_paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_paket') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pembina_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pembina</label>	
			  			<select name="pembina_id" class="form-control">
			  				@foreach($p as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pembina_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pembina_id') }}</strong>
                            </span>
                        @endif
			  		</div>
					  <div class="form-group {{ $errors->has('fasilitas_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Fasilitas</label>	
			  			<select name="fasilitas_id" class="form-control">
			  				@foreach($f as $data)
			  				<option value="{{ $data->id }}">{{ $data->bus }} 
								  Dan {{ $data->pesawat }} Dan {{ $data->hotel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('fasilitas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fasilitas_id') }}</strong>
                            </span>
                        @endif
					  </div>
					  <div class="form-group {{ $errors->has('syarat_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Syarat dan Ketentuan</label>	
			  			<select name="syarat_id" class="form-control">
			  				@foreach($s as $data)
			  				<option value="{{ $data->id }}">{{ $data->termasuk }} 
								  Dan {{ $data->tidak_termasuk }}
								   Dan {{ $data->persyaratan }}
								   Dan {{ $data->dp }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('syarat_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('syarat_id') }}</strong>
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