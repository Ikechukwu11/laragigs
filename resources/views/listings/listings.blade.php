@extends('layout')
@section('hero')
@include('partials._hero')

@endsection
@section('content')
<h1 class="mb-4 fw-bold d-none">{{$heading}}</h1>
@include('partials._search')
@unless(count($listings) == 0)
    @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
@else
    <p>No listings found</p>
@endunless
@endsection
