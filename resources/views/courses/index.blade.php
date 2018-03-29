@extends('layouts.app')
@section('title') Geekcourse Video Tutorial - Courses List @endsection

@section('content')
  <div class="container marketing">
      <div class="row">
          @include('courses._list_courses')
      </div>
      <hr class="featurette-divider">
  </div>
@endsection

@push('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars.min.css">
@endpush()

@push('end')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $('.rating').barrating({
            theme: 'fontawesome-stars'
        });
    });
    </script>
@endpush