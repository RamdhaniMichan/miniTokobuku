@extends('admin.master')

@section('content')

<div class="container">
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h2 class="mb-3 font-weight-bold text-primary">Tambah Data Category</h2>
	<form action="{{route('category.store')}}" method="post" accept-charset="utf-8">
		@csrf
		<div class="form-group row"> 
			<label class="col-sm-2 col-form-label">Name Category</label>
			<div class="col-sm-10">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>
</div>
</div>
@endsection