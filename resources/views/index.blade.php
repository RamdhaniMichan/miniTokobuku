@extends('layout.master')

@section('content')

<div class="container">
	<h2>Data Buku</h2>
	<p>pppppppp</p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<th>Penulis</th>
				<th>Harga</th>
				<th>Tgl Terbit</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($databuku as $buku)
			<tr>
				<td>{{$buku->id}}</td>
				<td>{{$buku->judul}}</td>
				<td>{{$buku->penulis}}</td>
				<td>{{$buku->harga}}</td>
				<td>{{$buku->tgl_terbit}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection