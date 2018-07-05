@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('pembina.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label"> nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $pembinas->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">jabatan </label>	
			  			<input type="text" name="jabatan" class="form-control" value="{{ $pembinas->jabatan }}"  
			  			readonly>
			  		</div>

			

			  	
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection