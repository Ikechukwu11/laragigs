@extends('layout')
@section('content')
     <div class="input-group mt-5 mb-5">
        <a href="/" class="text-dark">
            <i class="fa-solid fa-arrow-left me-3"></i> Back
        </a>
    </div>
    <div class="col-12 mx-auto text-center">
        <x-card class="py-4 shadow">
            <img src="/images/no-image.png" width="200" style="" class="img-fluid mx-auto">
            <h4>{{$listing['title']}}</h4>
            <h4><small>{{$listing['company']}}</small></h4>
            <p><x-listing-tags :listingTags="$listing->tags" class="justify-content-center" /></p>
            <p><i class="fa-solid fa-location-dot me-3"></i>{{$listing->location}}</p>
            <hr>
            <h4>Job Description</h4>
            <p class="text-start">{{$listing->description}}</p>
            <button class="btn w-100 mb-4 rounded-5 text-white bg-laragigs">
                <i class="fa-solid fa-envelope me-3"></i> Contact Employer
            </button>

            <button class="btn w-100 mb-4 rounded-5 text-white bg-dark">
                <i class="fa-solid fa-globe me-3"></i> Visit Website
            </button>
        </x-card>
    </div>
@endsection
