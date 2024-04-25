@extends('layouts.main')


@section('content')

<h2 align="center" class="mt-4 mb-5 fw-bold " style="color: #333">All Anime</h2>
<a href="/dashboard/animes/create" class="btn btn-primary mb-3" style="width: fit-content">  <i class="fas fa-plus-circle"></i> Create new anime</a>
    @if (session()->has('succes'))
              <div class="alert alert-success d-flex align-items-center col-lg-5" role="alert">
                <div>
                  {{ session('succes') }}
                </div>
              </div>
            @endif
<div class="row">
   @foreach ($animes as $anime)
   <div class="col-md-3 mb-3" style="text-transform: capitalize;text-align: center;">
     <div class="card">
        <img src="{{ asset('storage/' . $anime->image) }}" alt="Gambar Anime">
       <div class="card-body">
         <p class="mb-3 small opacity-50">Rilis pada {{ $anime->rilis }}</p>
         <h5 class="card-title mt-3">{{ $anime->judul }}</h5>
         <p class="mb-2 ">Rating : {{ $anime->rating }}/10</p>
         @if($anime->category !== null)
              <p class="mb-4">kategori {{ $anime->category->kategori }}</p>
          @else
              <p class="mb-4">category not found</p>
          @endif

          <a href="/dashboard/animes/{{ $anime->id }}" class="btn mb-2 btn-sm btn-primary btn-danger">
    <i class="fas fa-info-circle"></i> Detail
</a>
<a href="/dashboard/animes/{{ $anime->id }}/edit" class="btn mb-2 btn-sm btn-primary btn-danger">
    <i class="fas fa-edit"></i> Ubah
</a>
<form action="/dashboard/animes/{{ $anime->id }}" method="post" class="d-inline">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('are you sure deleted this anime?')" class="btn btn-sm btn-primary btn-danger">
        <i class="fas fa-trash-alt"></i> Hapus
    </button>
</form>

        </div>
      </div>
    </div>
    @endforeach
@endsection