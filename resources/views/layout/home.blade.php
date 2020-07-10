@extends('layout.master')

@section('content')

<div class="album py-5 bg-light mt-5">
        <div class="container">

          <div class="row">
            @foreach($buku as $book)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Judul Buku : {{$book->judul}}</p>
                  <p class="card-text">Penulis : {{$book->penulis}}</p>
                  <p class="card-text">Harga : Rp.{{$book->harga}}</p>
                  <p class="card-text">Tgl Terbit : {{$book->tgl_terbit}}</p>
                  <p class="card-text">Category : {{$book->category->category_name}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
      </div>
</div>
</div>

@endsection