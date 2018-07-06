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
        			<div class="form-group">
			  			<label class="control-label"> Paket Termasuk</label>	
			  			<input type="text" name="termasuk" class="form-control" value="{{ $syarats->termasuk }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Paket tidak termasuk </label>	
			  			<input type="text" name="tidak_termasuk" class="form-control" value="{{ $syarats->tidak_termasuk }}"  
			  			readonly>
			  		</div>
					  <div class="form-group">
			  			<label class="control-label">persyaratan </label>	
			  			<input type="text" name="persyaratan" class="form-control" value="{{ $syarats->persyaratan }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">dp </label>	
			  			<input type="text" name="dp" class="form-control" value="{{ $syarats->dp }}"  readonly>
			  		</div>

			  	
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection