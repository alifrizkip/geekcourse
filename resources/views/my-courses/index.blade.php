@extends('layouts.app')
@section('title') Geekcourse Video Tutorial - My Courses @endsection

@section('content')
  <div class="container marketing">
      <div class="row">
          @include('my-courses._nav')
          @include('_partials.list_courses')
      </div>
      <hr class="featurette-divider">
  </div>
@endsection