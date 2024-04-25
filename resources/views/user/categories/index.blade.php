@extends('layouts.main2')

@section('content')        
    <h2 align="center" class="mt-4 mb-5 fw-bold" style="color: #333">All Categories</h2>

    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center col-lg-5" role="alert">
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row align-items-center">
            @foreach ($categories as $category) 
                <div class="col-md-4 mb-3">
                    <a href="/categories/{{ $category->id }}" class="card bg-light text-white text-decoration-none">
                        <img src="https://source.unsplash.com/500x500?{{ $category->kategori }}" class="card-img img-thumbnail" alt="{{ $category->kategori }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill fs-3 text-shadow-sm" style="background-color: rgba(24, 3, 3, 0.7); padding: 10px 0;text-transform: capitalize">{{ $category->kategori }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
