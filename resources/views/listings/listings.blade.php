@extends('layout')
@section('hero')
@include('partials._hero')

@endsection
@section('content')
<x-flash-message class="my-3" />
@include('partials._search')
@unless(count($listings) == 0)
@foreach($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach
@else
<p class="my-3 text-center">
  No listings found
</p>
@endunless
<div class="d-flex justify-content-center">
  {{$listings->render()}}
</div>

@endsection
