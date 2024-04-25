@extends('layouts.main')

@section('content')
        
<h2 align="center" class="mt-4 mb-5 fw-bold " style="color: #333">All Categories</h2>

<div class="container">
<a href="/dashboard/categories/create" class="btn btn-primary mb-3">
    <i class="fas fa-plus-circle"></i> Create new category
</a>
      @if (session()->has('succes'))
              <div class="alert alert-success d-flex align-items-center col-lg-5" role="alert">
                <div>
                  {{ session('succes') }}
                </div>
              </div>
            @endif
    <div class="row align-items-center">
        @foreach ($categories as $category) 
        <div class="col-md-4 mb-3">
            <div class="card bg-light text-white">
                <img src="https://source.unsplash.com/500x500?{{ $category->kategori }}" class="card-img img-thumbnail" alt="{{ $category->kategori }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill fs-3 text-shadow-sm" style="background-color: rgba(24, 3, 3, 0.7); padding: 10px 0;text-transform: capitalize">{{ $category->kategori }}</h5>
            </div>
                <div class="card bg-light p-3">
                <div class="d-flex justify-content-center gap-1">
    <a href="/dashboard/categories/{{ $category->id }}/edit" class="btn btn-primary">
        <i class="fas fa-edit"></i> Edit
    </a>
    <form action="/dashboard/categories/{{ $category->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Kamu yakin nih pengen hapus kategori ini?')">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
    </form>
</div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
