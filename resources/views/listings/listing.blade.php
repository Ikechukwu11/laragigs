@extends('layout')
@section('content')
<div class="input-group mt-5 mb-5">
  <a href="/" class="text-dark">
    <i class="fa-solid fa-arrow-left me-md-3"></i> Back
  </a>
</div>
<div class="col-12 mx-auto text-center">
  <x-card class="py-4 shadow">
    <img src={{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}} width="200" style="" class="img-fluid mx-auto">
    <h4>{{$listing->title}}</h4>
    <h4><small>{{$listing['company']}}</small></h4>
    <p>
      <x-listing-tags :listingTags="$listing->tags" class="justify-content-center" />
    </p>
    <p>
      <i class="fa-solid fa-location-dot me-md-3"></i>{{$listing->location}}
    </p>
    <hr>
    <h4>Job Description</h4>
    <p class="text-start">
      {{$listing->description}}
    </p>
    <div class="d-flex flex-row flex-md-column justify-content-center" style="gap:10px">
      <button class="btn w-100 mb-4 rounded-5 text-white bg-laragigs d-flex justify-content-center align-items-center">
        <i class="fa-solid fa-envelope me-md-3"></i>
        <span class="d-none d-md-block">Contact Employer</span>
      </button>

      <button class="btn w-100 mb-4 rounded-5 text-white bg-dark d-flex justify-content-center align-items-center">
        <i class="fa-solid fa-globe me-md-3"></i>
        <span class="d-none d-md-block">Visit Website</span>
      </button>

      <a href="/listings/{{$listing->id}}/edit" class="w-100">
        <button class="btn w-100 mb-4 rounded-5 text-white bg-primary d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-pen me-md-3"></i>
          <span class="d-none d-md-block">Edit</span>
        </button>
      </a>

      <form method="POST" class="w-100" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="btn w-100 mb-4 rounded-5 text-white bg-danger d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-trash me-md-3"></i>
          <span class="d-none d-md-block">Delete</span>
        </button>
      </form>
    </div>

  </x-card>

</div>
@endsection