@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('berita.index') }}" class="btn btn-outline-danger">
                         
                        Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label"> tanggal</label>	
			  			<input type="date" name="tanggal" class="form-control" value="{{ $beritas->tanggal }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">judul </label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $beritas->judul }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">isi</label>	
			  			<input type="text" name="isi" class="form-control" value="{{ $beritas->isi }}"  readonly>
			  		</div>

			  	
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection