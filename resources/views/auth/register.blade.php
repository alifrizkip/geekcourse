@extends('layouts.app')
@section('title') Geekcourse Video Tutorial - Register @endsection

@section('content')
<div class="container marketing">
  <div class="row">
      @include('auth._register_form')
  </div>
  <hr class="featurette-divider">
</div>
@endsection