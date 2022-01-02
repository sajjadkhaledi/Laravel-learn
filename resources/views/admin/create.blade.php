@extends('admin.layouts.master')
@section('title')
صفحه ساخت
@endsection
@section('style')
<link rel="stylesheet" href="custom.css">
@endsection
{{-- @include('admin.layouts.sidebar') --}}

@section('content')
<div class="row">
    <div class="col">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
