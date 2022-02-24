@extends('layouts.main')
@push('title')
   <title>About</title>
@endpush
@section('main-section')
<h1>This is About Page</h1>
<a href="{{url('/')}}">Back to home</a>
@endsection
