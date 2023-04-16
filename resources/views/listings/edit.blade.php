@extends('layout')
@section('content')
@php
//session_start();
//session()->now('success', 'Success! message.');
//session(['success' => 'You have successfully updated a post!']);
////session()->forget('success');
@endphp

<div class="col-12">
  <x-card class="mx-sm-auto shadow-0" style="margin-top:70px;max-width: 500px;background-color: #f7f9fb">
    <x-flash-message :redirect="url('')" />
    <h3 class="fw-bolder text-uppercase text-center">Edit a GiG</h3>
    <p class="fw-bold text-center">
      <small>Edit {{$listing->title}}</small>
    </p>
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group mb-4">
        <label>Company</label>
        <input name="company" type="text" class="form-control" placeholder="" value="{{$listing->company}}">
        @error('company')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="form-group mb-4">
        <label>Job Title</label>
        <input name="title" type="text" class="form-control" placeholder="" value="{{$listing->title}}">
        @error('title')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="form-group mb-4">
        <label>Contact Email</label>
        <input name="email" type="email" class="form-control" placeholder="" value="{{$listing->email}}">
        @error('email')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="form-group mb-4">
        <label>Job Location</label>
        <input name="location" type="text" class="form-control" placeholder="" value="{{$listing->location}}">
        @error('location')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="form-group mb-4">
        <label>Website/Application URL</label>
        <input name="website" type="text" class="form-control" placeholder="" value="{{$listing->website}}">
        @error('website')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="form-group mb-4">
        <label>Tags (Comma Separated)</label>
        <input name="tags" type="text" class="form-control" placeholder="Example:PHP,Laravel,CMS" value="{{$listing->tags}}">
        @error('tags')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="form-group mb-4">
        <label class="form-label">Company Logo</label>
        <input type="file" accept="image/*" name="logo" class="form-control form-control-file">
        <img src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}" width="200" style="" class="img-fluid mx-auto mt-2">
        @error('logo')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>


      <div class="form-group mb-4">
        <label>Job Description</label>
        <textarea name="description" class="form-control">{{$listing->description}}</textarea>
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="d-flex">
        <button type="submit" class="btn bg-black text-white">Update GiG</button>
        <a href="/listings/{{$listing->id}}" class="btn  border-0  shadow-0">Back</a>
      </div>

    </form>
  </x-card>
</div>
@endsection
