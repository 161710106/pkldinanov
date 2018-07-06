@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			<div class="m-b-10">
                    <a href="{{ route('paket.create') }}" class="btn btn-outline-danger">
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
					<th>Jenis Paket</th>
					<th>Pembina Umroh</th>
					<th>Fasilitas</th>
					<th>Syarat Dan Ketentuan </th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($k as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->jenis_paket }} </td>
		<td><p><b>{{ $data->Pembina->nama }}</b></p></td>
		<td>{{ $data->Fasilitas->bus }} <br> {{ $data->Fasilitas->pesawat }} <br> {{ $data->Fasilitas->hotel }}</td>
		<td>{{ $data->Syarat->termasuk }} <br> {{ $data->Syarat->tidak_termasuk }} <br> {{ $data->Syarat->persyaratan }} <br>{{ $data->Syarat->dp }}</td>
	<td>
		<a class="btn btn-primary" href=" {{ route('paket.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('paket.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('paket.destroy',$data->id) }}">
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