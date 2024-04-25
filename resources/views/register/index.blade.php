@extends('layouts.main2')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5 bg-white rounded-full shadow-sm p-5 ">


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
            <form action="/register" method="post">
                @csrf
                <h2 class="text-center">
                </h2>
                <h5 class=" mb-3 fw-bold text-center">DAFTAR ANIMECUY</h5>
            
            <div class="form-floating">
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="name@example.com" value="{{ old('name') }}">
             <label for="floatingInput">Name</label>
            @error('name')
             <div class="invalid-feedback">
                {{ $message }}
             </div>
            @enderror

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
             <label for="floatingInput">Email address</label>
            @error('email')
             <div class="invalid-feedback">
                {{ $message }}
             </div>
            @enderror

        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button class="w-100 btn btn-lg fw-bold btn-danger" type="submit">Daftar</button>
    </form>

      <small class="text-center d-block mt-3" >Sudah punya akun? <a href="/login">Login sekarang!</a></small>
    </main>
    </div>
</div>

@endsection