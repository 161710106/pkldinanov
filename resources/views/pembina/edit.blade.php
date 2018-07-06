@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('pembina.create') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                       Tambah Data
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('pembina.update',$pembinas->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $pembinas->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">jabatan </label>	
			  			<input type="text" name="jabatan" class="form-control" value="{{ $pembinas->jabatan }}"  
			  			required>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
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