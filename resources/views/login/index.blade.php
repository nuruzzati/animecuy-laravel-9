@extends('layouts.main2')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5 bg-white rounded-full shadow-sm p-5 ">


        @if (session()->has('success'))
            
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session('success') }} 
           {{ $user->name }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

           @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif


        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
                <h2 class="text-center">
                </h2>
                <h5 class=" mb-3 fw-bold text-center">LOGIN ANIMECUY</h5>
            
            <div class="form-floating">
            <input type="email" autofocus class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button class="w-100 btn btn-lg fw-bold btn-danger" type="submit">Login</button>
    </form>

      <small class="text-center d-block mt-3" >Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
    </main>
    </div>
</div>

@endsection