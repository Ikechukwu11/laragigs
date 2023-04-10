@extends('layout')
@section('content')
    <div class="col-12">
        <x-card class="mx-sm-auto shadow-0" style="margin-top:70px;max-width: 500px;background-color: #f7f9fb">
            <h3 class="fw-bolder text-uppercase text-center">Create a GiG</h3>
            <p class="fw-bold text-center"><small>Post a gig to find a developer</small></p>
            <form method="POST" action="/listings">
                @csrf
                <div class="form-group mb-4">
                    <label>Company</label>
                    <input name="company" type="text" class="form-control" placeholder="">
                    @error('company')
                        <small class="text-danger">{{$company}}</small>
                     @enderror
                </div>
                <div class="form-group mb-4">
                    <label>Job Title</label>
                    <input name="title" type="text" class="form-control" placeholder="">
                    @error('title')
                        <small class="text-danger">{{$title}}</small>
                    @enderror
                </div>
                <div class="form-group mb-4">
                <label>Contact Email</label>
                <input name="email" type="email" class="form-control" placeholder="">
                     @error('email')
                    <small class="text-danger">{{email}}</small>
                    @enderror
              </div>
                <div class="form-group mb-4">
                    <label>Job Location</label>
                    <input name="location" type="text" class="form-control" placeholder="">
                     @error('location')
                    <small class="text-danger">{{$location}}</small>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label>Website/Application URL</label>
                    <input name="website" type="text" class="form-control" placeholder="">
                     @error('website')
                    <small class="text-danger">{{$website}}</small>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label>Tags (Comma Separated)</label>
                    <input name="tags" type="text" class="form-control" placeholder="Example:PHP,Laravel,CMS">
                     @error('tags')
                    <small class="text-danger">{{$tags}}</small>
                    @enderror
                </div>

{{--                 <div class="form-group mb-4">--}}
{{--                    <label class="form-label">Company Logo</label>--}}
{{--                    <input type="file" name="company_logo" class="form-control form-control-file">--}}
{{--                </div>--}}

                <div class="form-group mb-4">
                    <label>Job Description</label>
                    <textarea name="description" class="form-control"></textarea>
                     @error('description')
                    <small class="text-danger">{{$description}}</small>
                    @enderror
                </div>

                <div class="d-flex">
                    <button type="submit" class="btn bg-black text-white">Create GiG</button>
                    <a href="/" class="btn  border-0  shadow-0">Back</a>
                </div>

            </form>
        </x-card>
    </div>
@endsection
