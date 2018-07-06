@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('syarat.index') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                       Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('syarat.update',$syarats->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('termasuk') ? ' has-error' : '' }}">
			  			<label class="control-label">Paket termasuk</label>	
			  			<input type="text" name="termasuk" class="form-control" value="{{ $syarats->termasuk }}"  required>
			  			@if ($errors->has('termasuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('termasuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tidak_termasuk') ? ' has-error' : '' }}">
			  			<label class="control-label">Paket tidak termasuk </label>	
			  			<input type="text" name="tidak_termasuk" class="form-control" value="{{ $syarats->tidak_termasuk }}"  
			  			required>
			  			@if ($errors->has('tidak_termasuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tidak_termasuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('persyaratan') ? ' has-error' : '' }}">
			  			<label class="control-label">persyaratan Umroh</label>	
			  			<input type="text" name="persyaratan" class="form-control" value="{{ $syarats->persyaratan }}"  required>
			  			@if ($errors->has('persyaratan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('persyaratan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('dp') ? ' has-error' : '' }}">
			  			<label class="control-label">dp Umroh</label>	
			  			<input type="text" name="dp" class="form-control" value="{{ $syarats->dp }}"  required>
			  			@if ($errors->has('dp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dp') }}</strong>
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