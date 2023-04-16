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
    <x-flash-message :redirect="url('/login')" />
    <h3 class="fw-bolder text-uppercase text-center">Login </h3>
    <p class="fw-bold text-center">
      <small>Login to your account to post gigs</small>
    </p>
    <form method="POST" action="/users/authenticate">
      @csrf
      <div class="form-group mb-4">
        <label>Email</label>
        <input name="email" type="email" class="form-control" placeholder="" value="{{old('email')}}">
        @error('email')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="form-group mb-4">
        <label>Password</label>
        <input name="password" type="password" class="form-control" placeholder="" value="{{old('password')}}">
        @error('password')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>

      <div class="d-flex flex-column justify-content-start">
        <button type="submit" class="btn bg-laragigs text-white col-4">Login</button>
        <p class="my-4">
          New user? <a href="/register" class=text-laragigs">Register</a>
            </div>

            </form>
            </x-card>
            </div>
            @endsection