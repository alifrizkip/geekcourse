@extends('layouts.app')
@section('title') Geekcourse Video Tutorial - Courses List @endsection

@section('content')
  <div class="container marketing">
      <div class="row">
        <div class="col-lg-12 mb-4 mt-5">
          <h2>Courses Detail</h2>
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/GNdXrXSCdJM?list=PLCZlgfAG0GXDijjesNoqcCmuYpQSbpucl" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="card mt-5">
            <div class="card-body">
              <h5 class="card-title">Laravel 5.3</h5>
              <select class="rating">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option selected value="5">5</option>
              </select>
              <p>999 students</p>
              <p>Created by John Doe</p>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur architecto, rerum dolores magnam non harum quos officia velit blanditiis! Inventore neque labore adipisci rem error eum at, nesciunt dolore non.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-5 text-left">
            <div class="card-header bg-light">Daftar Video</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa fa-play"></i> Part 1</li>
              <li class="list-group-item"><i class="fa fa-pause"></i> Part 2</li>
              <li class="list-group-item"><i class="fa fa-pause"></i> Part 3</li>
              <li class="list-group-item"><i class="fa fa-pause"></i> Part 4</li>
              <li class="list-group-item"><i class="fa fa-pause"></i> Part 5</li>
              <li class="list-group-item"><i class="fa fa-pause"></i> Part 6</li>
              <li class="list-group-item"><i class="fa fa-pause"></i> Part 7</li>
            </ul>
          </div>
        </div>
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