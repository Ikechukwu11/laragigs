@extends('layout')
@section('hero')
@include('partials._hero')

@endsection
@section('content')
@include('partials._search')
@unless(count($listings) == 0)
@foreach($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach
@else
<p>
  No listings found
</p>
@endunless
<div class="d-flex justify-content-center">
  {{$listings->render()}}
</div>

@endsection