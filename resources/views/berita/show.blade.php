@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('berita.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label"> tanggal</label>	
			  			<input type="text" name="tanggal" class="form-control" value="{{ $beritas->tanggal }}"  readonly>
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