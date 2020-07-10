@extends('admin.master')

@section('content')

<div class="container">
	@if(Session::has('success'))
	<div class="alert alert-success">{{Session::get('success')}}</div>
	@elseif(Session::has('update'))
	<div class="alert alert-info">{{Session::get('update')}}</div>
	@elseif(Session::get('delete'))
	<div class="alert alert-warning">{{Session::get('delete')}}</div>
	@endif
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h2 class="m-0 font-weight-bold text-primary">Data Buku</h2>
	<div class="card-body">
	<a href="{{route('buku.create')}}" class="btn btn-info ml-2 mt-2">Tambah Buku</a>
	<hr>
	<div class="float-right">
		<form action="{{route('buku.search')}}" method="get" accept-charset="utf-8">
			@csrf
			<input class="form-control" type="text" name="kata" placeholder="cari">
		</form>
		<br>
	</div>
	<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<th>Penulis</th>
				<th>Harga</th>
				<th>Tgl Terbit</th>
				<th>Category</th>
				<th>Opsi</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($databuku as $buku)
			<tr>
				<td>{{++$no}}</td>
				<td>{{$buku->judul}}</td>
				<td>{{$buku->penulis}}</td>
				<td>Rp. {{number_format($buku->harga, 0, '.','.')}}</td>
				<td>{{$buku->tgl_terbit->format('d/m/Y')}}</td>
				<td>{{$buku->category->category_name}}</td>
				<td><a href="{{route('buku.destroy', $buku->id)}}"><i onclick="return confirm('Hapus Data')" class="fa fa-trash-o" style=" color: red;"></i></a>
					
					<a href="{{route('buku.edit', $buku->id)}}"><i class="fa fa-pencil"  style=""></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<div>Jumlah Buku : {{$jumlah_buku}}</div>
	<div class="float-right">{{$databuku->links()}}</div>
</div>
</div>
</div>
</div>
@endsection