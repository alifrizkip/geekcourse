@extends('layouts.app')
@section('title') Geekcourse Video Tutorial - Login @endsection

@section('content')
<div class="container marketing">
  <div class="row">
      @include('auth._login_form')
  </div>
  <hr class="featurette-divider">
</div>
@endsection