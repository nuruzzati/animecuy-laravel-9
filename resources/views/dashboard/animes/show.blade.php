
<div  style="background: url('https://wallpapercave.com/wp/wp7740421.jpg'); background-position: center; background-size: cover; background-blend-mode: darken; margin: 0; padding: 0;">@include('style.allstyle')

@section('content')
    
<div class="container"><br>
  <h2 align="center" class="mb-5 fw-bold text-decoration-underline" style="color: #444;text-transform: capitalize">Detail {{ $anime->judul }}</h2> 
<div class="row justify-content-center">
        <div class="col-md-6">

          <img style="height: 90%" class="img-fluid img-thumbnail rounded-full" src="{{ asset('storage/' . $anime->image) }}" >
        </div>
        <div class="col-md-6">

          <h3 class="mb-4 fw-bold" style="color: #444">{{ $anime->judul }}</h5>
          <p class="mb-2"><span class="fw-bold" style="color: #444">Tahun Rilis : </span> {{ $anime->rilis }}</p>
         <p class="mb-2 "><span class="fw-bold" style="color: #444">Rating : </span>{{ $anime->rating }}/10</p>
         <p class="mb-2 "><span class="fw-bold" style="color: #444">Sinopsis Anime<br> </span>{{ $anime->sinopsis }}</p>
         <p class="mb-2 "><span class="fw-bold" style="color: #444">Durasi : </span>{{ $anime->durasi }}</p>
         <p class="mb-2 "><span class="fw-bold" style="color: #444">Total episode : </span>{{ $anime->episode }} episode</p>
         <p class="mb-2 "><span class="fw-bold" style="color: #444">Studio : </span>{{ $anime->studio }}</p>
         <p class="mb-2 "><span class="fw-bold" style="color: #444">Genre : </span>{{ $anime->genre }}</p>
         <p class="mb-4"><span class="fw-bold" style="color: #444">kategori : </span>{{ $anime->category->kategori }}</p>
         
         <a href="/dashboard/animes" class="btn btn-sm btn-primary btn-danger"> Back to page </a>
         <a href="#" class="btn btn-sm btn-primary btn-danger"> Edit </a>   
         <a href="#" class="btn btn-sm btn-primary btn-danger"> Delete </a>
        
        </div>
    </div>
    </div>
    </div>
