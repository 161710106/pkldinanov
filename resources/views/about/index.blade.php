@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			<div class="m-b-10">
                    <a href="{{ route('about.create') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                       Tambah Data
                    </a>
                    
                </div>
			</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Sejarah</th>
					<th>Visi & misi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($abouts as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->sejarah }} </td>
		<td><p> {{ $data->visi_misi }} </p></td>
	<td>
		<a class="btn btn-primary" href=" {{ route('about.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('about.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('about.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection