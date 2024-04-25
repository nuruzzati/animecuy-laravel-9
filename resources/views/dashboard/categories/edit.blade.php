@extends('layouts.main')


@section('content')
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create New Category</h1>
        </div>
        <button type="submit" class="btn btn-primary mb-2 d-flex align-items-center gap-1"><span data-feather="arrow-left"></span> <span> <a href="/dashboard/categories" class="text-white text-decoration-none">Back to Category</a></span></button>

        <form method="post" action="/dashboard/categories/{{ $categories->id }}" class="mb-5">
         @method('put')
        @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori" value="{{ old('kategori',$categories->kategori) }}" autofocus>
                @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @endif
                </div>
            </div>
            </div>
        <button type="submit" class="btn btn-success d-flex align-items-center gap-1"><span data-feather="plus-circle"></span> <span> Update category</span></button>
        </form>


@endsection