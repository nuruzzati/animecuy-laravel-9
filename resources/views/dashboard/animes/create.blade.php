@extends('layouts.main')


@section('content')
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create New anime</h1>
        </div>
        <button type="submit" class="btn btn-primary mb-2 d-flex align-items-center gap-1"><span data-feather="arrow-left"></span> <span> <a href="/dashboard/animes" class="text-white text-decoration-none">Back to anime</a></span></button>

        <form method="post" action="/dashboard/animes" class="mb-5" enctype="multipart/form-data">
        @csrf

    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul') }}" autofocus>
          @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @endif
        </div>

          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
               <select class="form-select" name="category_id" id="kategori">
                @foreach ($categories as $category)       
                @if (old('category_id') == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->kategori }}</option>
                @else
                  <option value="{{ $category->id }}" >{{ $category->kategori }}</option>
                @endif
            @endforeach
               </select>
                 @error('rilis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rilis" class="form-label">Rilis</label>
            <input type="date" class="form-control @error('rilis') is-invalid @enderror" name="rilis" id="rilis" value="{{ old('rilis') }}" autofocus>
            @error('rilis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" id="rating" value="{{ old('rating') }}" autofocus>
            @error('rating')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <input type="text" class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" id="sinopsis" value="{{ old('sinopsis') }}" autofocus>
            @error('sinopsis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
      </div>  
        
      <div class="col-md-6">
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control @error('durasi') is-invalid @enderror" name="durasi" id="durasi" value="{{ old('durasi') }}" autofocus>
            @error('durasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" id="genre" value="{{ old('genre') }}" autofocus>
            @error('genre')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="episode" class="form-label">Episode</label>
            <input type="number" class="form-control @error('episode') is-invalid @enderror" name="episode" id="episode" value="{{ old('episode') }}" autofocus>
            @error('episode')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="studio" class="form-label">Studio</label>
            <input type="text" class="form-control @error('studio') is-invalid @enderror" name="studio" id="studio" value="{{ old('studio') }}" autofocus>
            @error('studio')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}" autofocus>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
      </div>
    </div>
        <button type="submit" class="btn btn-success d-flex align-items-center gap-1"><span data-feather="plus-circle"></span> <span> Create Anime</span></button>
        </form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function(){
        $('#durasi').mask('00:00:00');
    });
</script>

@endsection