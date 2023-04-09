@extends('layout')
@section('hero')
@include('partials._hero')

@endsection
@section('content')
<h1 class="mb-4 fw-bold d-none">{{$heading}}</h1>
@include('partials._search')
@unless(count($listings) == 0)
    @foreach($listings as $listing)
        <div class="col-12 col-md-6 my-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row" style="gap: 20px">
                        <img src="/images/no-image.png" width="70" style="object-fit: contain; flex-basis: 30%" class="d-flex img-fluid">
                         <div style="flex-basis: 70%" class="fw-bold">
                             <small>
                                <p><a class="text-dark" href="/listings/{{$listing->id}}">{{$listing->title}}</a></p>
                                <p><span>{{$listing->company}}</span></p>
                                 <p class="bg-black p-2 text-white">{{$listing->tags}}</p>
                                <p class="d-none">{{$listing->description}}</p>
                                <p><i class="fa-solid fa-location-dot me-3"></i>{{$listing->location}}</p>
                             </small>
                         </div>
                    </div>
                </div>
            </div>

        </div>

    @endforeach
@else
    <p>No listings found</p>
@endunless
@endsection
