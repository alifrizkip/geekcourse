@extends('layouts.app') @section('title') Geekcourse Video Tutorial @endsection @section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-0.3.5&s=a88e2a710b76e263eeb52c45024bd018&auto=format&fit=crop&w=1500&q=80"
                alt="First slide">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-0.3.5&s=404e88a8cbfb7b2c4295fcbb13a44362&auto=format&fit=crop&w=1500&q=80"
                alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-0.3.5&s=edb6215303ab26c2f7d3d65e1519f2b0&auto=format&fit=crop&w=1500&q=80"
                alt="Third slide">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h2>Popular Courses</h2>
        </div>
        <div class="col-lg-12" style="padding: 0 7px;">
            <div class="row">
                <div class="col-lg-3">
                    <div class='card card1'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class='card card2'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>        
                <div class="col-lg-3">
                    <div class='card card3'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3">
                    <div class='card card4'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>        
            </div>
        </div>  
        
        <div class="col-lg-12 mb-4" style="margin-top: 4em;">
            <h2>Recommendation Courses</h2>
        </div>
        <div class="col-lg-12" style="padding: 0 7px;">
            <div class="row">
                <div class="col-lg-3">
                    <div class='card card1'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class='card card2'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>        
                <div class="col-lg-3">
                    <div class='card card3'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3">
                    <div class='card card4'>
                        <div class='image'></div>
                        <div class='details'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, sapiente!
                        </div>
                    </div>
                </div>        
            </div>
        </div>          
    </div>
    <!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

</div>
<!-- /.container -->

@endsection