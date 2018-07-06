@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			<div class="m-b-10">
                    <a href="{{ route('syarat.create') }}" class="btn btn-outline-danger">
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
					<th>Paket Termasuk</th>
					<th>Paket Tidak Termasuk</th>
					<th>Persyaratan Umroh</th>
					<th>Menyerahkan Dp </th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($syarats as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->termasuk }} </td>
		<td><p> {{ $data->tidak_termasuk }} </p></td>
		<td><p> {{ $data->persyaratan }} </p></td>	
		<td><p> {{ $data->dp }} </p></td>
	<td>
		<a class="btn btn-primary" href=" {{ route('syarat.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('syarat.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('syarat.destroy',$data->id) }}">
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