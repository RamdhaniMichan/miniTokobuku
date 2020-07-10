@extends('admin.master')

@section('content')

<div class="container">
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h2 class="m-0 font-weight-bold text-primary">Data Categori</h2>
	<a href="{{route('category.create')}}"><button type="" class="btn btn-primary">Tambah Categori</button></a>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Categori</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($category as $categories)
					<tr>
						<td>{{++$no}}</td>
						<td>{{$categories->category_name}}</td>
						<td>
							<a href="{{route('category.destroy')}}"><i class="fa fa-trash-o" style="color: red;" onclick="return confirm('Hapus data Category')"></i></button></a>
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

@endsection