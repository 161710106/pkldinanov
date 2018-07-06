@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('fasilitas.index') }}" class="btn btn-outline-danger">
                          
                       Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label"> Jenis Bus</label>	
			  			<input type="text" name="bus" class="form-control" value="{{ $fasilitas->bus }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Pesawat </label>	
			  			<input type="text" name="pesawat" class="form-control" value="{{ $fasilitas->pesawat }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Hotel Berbintang</label>	
			  			<input type="text" name="hotel" class="form-control" value="{{ $fasilitas->hotel }}"  readonly>
			  		</div>

			  	
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection