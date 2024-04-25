@extends('layouts.main')

@section('content')        
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="mb-4 fw-bold" style="color: #444; font-size: 2rem">Selamat datang di Halaman Animecuy, <span style="text-transform: capitalize">{{ auth()->user()->name }}</span></h4>
                <h4 class="lead mb-5" style="color: #666; font-size: 1.3rem;">Kamu login sebagai admin !</h4>
                <a href="/dashboard/animes" class="btn btn-danger btn-lg">Atur anime</a>
            </div>
        </div>
    </div>
@endsection
