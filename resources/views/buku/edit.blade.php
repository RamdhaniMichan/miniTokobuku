@extends('admin.master')

@section('content')

<div class="container">
	<h2>Edit Data Buku</h2>
	<form action="{{route('buku.update', $buku->id)}}" method="post" accept-charset="utf-8">
		@csrf
		@method('PUT')
	<div class="form-group row">
		<label class="col-sm-1 col-form-label">Judul</label>
		<div class="col-sm-10">
			<input type="text" name="judul" class="form-control" value="{{$buku->judul}}">
			@if($errors->has('judul'))
				<div class="alert alert-danger">
			{{$errors->first('judul')}}
				</div>
			@endif
		</div>
		
	</div>
	<div class="form-group row">
		<label class="col-sm-1 col-form-label">Penulis</label>
		<div class="col-sm-10">
			<input type="text" name="penulis" class="form-control" value="{{$buku->penulis}}">
			@if($errors->has('penulis'))
				<div class="alert alert-danger">
			{{$errors->first('penulis')}}
				</div>
			@endif
		</div>
		
	</div>
	<div class="form-group row">
		<label class="col-sm-1 col-form-label">Harga</label>
		<div class="col-sm-10">
			<input type="text" name="harga" class="form-control" value="{{$buku->harga}}">
			@if($errors->has('harga'))
				<div class="alert alert-danger">
			{{$errors->first('harga')}}
				</div>
			@endif
		</div>
		
	</div>
	<div class="form-group row">
		<label class="col-sm-1 col-form-label">Tgl Terbit</label>
		<div class="col-sm-10">
			<input type="text" name="tgl_terbit" class="date form-control" value="{{$buku->tgl_terbit}}">
			@if($errors->has('tgl_terbit'))
				<div class="alert alert-danger">
			{{$errors->first('tgl_terbit')}}
				</div>
			@endif
		</div>
		
	</div>
	<div class="form-group row">
		<label class="col-sm-1 col-form-label">Category</label>
		<div class="col-sm-10">
			<select name="category_id" class="form-control">
				<option>----Pilih----</option>}
				@foreach($categories as $category)
				@if($category->id == $buku->category_id)
				{
					<option value="{{$category->id}}" selected="">{{$category->category_name}}</option>
				}
				else
				{
					<option value="{{$category->id}}">{{$category->category_name}}</option>
				}
				@endif
				
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
	</form>
</div>

@endsection