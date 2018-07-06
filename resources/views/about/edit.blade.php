@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    <a href="{{ route('about.index') }}" class="btn btn-outline-danger">
     
                       Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('about.update',$abouts->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah</label>	
			  			<TextArea name="sejarah" class="form-control" value="{{ $abouts->sejarah }}"  required></TextArea>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('visi_misi') ? ' has-error' : '' }}">
			  			<label class="control-label">Visi & Misi </label>	
			  			<TextArea name="visi_misi" class="form-control" value="{{ $abouts->visi_misi }}"  
			  			required></TextArea>
			  			@if ($errors->has('visi_misi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('visi_misi') }}</strong>
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