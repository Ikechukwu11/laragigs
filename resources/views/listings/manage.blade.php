@extends('layout')
@section('content')
<x-flash-message class="my-3" />
@unless(count($listings) == 0)
    @php
    $counter=1;
    @endphp
<table class="table align-middle bg-white" style="margin-top: 70px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Listing name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listings as $listing)
    <tr>
      <th scope="row">{{$counter++}}</th>
      <td>{{$listing->title}}</td>
        <td class="d-flex">
        <a class="col" href="/listings/{{$listing->id}}/edit">
          <button type="button" class="d-flex align-items-center btn text-white bg-info px-3" style="gap: 5px">
          <span class="d-none d-md-block w-100">Edit</span> <i class="fas fa-pen"></i>
        </button>
        </a>
            <form method="POST" class="col" action="/listings/{{$listing->id}}" onsubmit="confirm('Are you really sure')">
                @csrf
                @method('DELETE')
                  <button type="submit" class="d-flex align-items-center btn text-white  bg-danger px-3" style="gap: 5px">
                  <span class="d-none d-md-block w-100">Delete</span> <i class="fas fa-trash"></i>
                </button>
            </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@else
<p class="my-3 text-center">
  No listings found
</p>
@endunless
<div class="d-flex justify-content-center">
  {{$listings->render()}}
</div>

@endsection
