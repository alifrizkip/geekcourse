<div class="col-lg-12 mb-4">
    <h2>Popular Courses</h2>
</div>
<div class="col-lg-12" style="padding: 0 7px;">
    <div class="row">
        @foreach(range(1,8) as $item)
            @include('home._card')
        @endforeach
    </div>
</div>