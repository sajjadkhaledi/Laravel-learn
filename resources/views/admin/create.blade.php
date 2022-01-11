@extends('admin.layouts.master')
@section('title')
صفحه ساخت
@endsection
{{-- @section('style')
<link rel="stylesheet" href="custom.css">
@endsection --}}
@push('css')
<link rel="stylesheet" href="custom.css">
@endpush
@prepend('css')
<link rel="stylesheet" href="extra.css">
@endprepend()
{{-- @include('admin.layouts.sidebar') --}}

@section('content')
<h1>create</h1>
@endsection
