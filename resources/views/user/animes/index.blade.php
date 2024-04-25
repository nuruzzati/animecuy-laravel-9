@extends('layouts.main2')


@section('content')

<h2 align="center" class="mt-4 mb-3 fw-bold " style="color: #333">All Anime</h2>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/animes">
    <div class="input-group mb-3">
      <input value="{{ request('search') }}" type="text" class="form-control" placeholder="Search anime..." name="search"  aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-danger"  type="submit" id="button-addon2">Search</button>
</div>
    </form>
  </div>
</div>
<div class="row">

   @foreach ($animes as $anime)
   <div class="col-md-3 mb-3" style="text-transform: capitalize;text-align: center;">
     <div class="card">
        <img src="{{ asset('storage/' . $anime->image) }}" alt="Gambar Anime">
       <div class="card-body">
         <p class="mb-3 small opacity-50">Rilis pada {{ $anime->rilis }}</p>
         <h5 class="card-title mt-3">{{ $anime->judul }}</h5>
         <p class="mb-2 ">Rating : {{ $anime->rating }}/10</p>
       
              <p class="mb-4">kategori {{ $anime->category->kategori }}</p>
          <a href="/animes/{{ $anime->id }}" class="btn btn-sm btn-primary btn-danger">
    <i class="fas fa-info-circle"></i> Detail Anime
</a>

        </div>
      </div>
    </div>
    @endforeach


@endsection