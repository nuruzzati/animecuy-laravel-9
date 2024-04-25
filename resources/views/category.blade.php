@extends('layouts.main')


@section('content')

<h2 align="center" class="mt-4 mb-5 fw-bold " style="color: #333">All category</h2>
<div class="row">
   <div class="col-md-3 mb-3" style="text-transform: capitalize;text-align: center;">
     <div class="card">
       <img class="img-fluid" src=""
         class="card-img-top" alt="...">
       <div class="card-body">
         <p class="mb-3 small opacity-50">{{ $categories->kategori }}</p>
         <a href="#" class="btn btn-sm btn-primary btn-danger"> Edit </a>
         <a href="#" class="btn btn-sm btn-primary btn-danger"> Delete </a>
         
        </div>
      </div>
    </div>
@endsection