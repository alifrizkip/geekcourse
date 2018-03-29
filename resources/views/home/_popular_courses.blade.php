<div class="col-lg-12 mb-4">
    <h2>Popular Courses</h2>
</div>
<div class="col-lg-12" style="padding: 0 7px;">
    <div class="row">
        @foreach(range(1,4) as $item)
            <div class="col-lg-3">
                <div class='card card1'>
                    <div class='image'></div>
                    <div class='details'>
                        <h5 class="card-title">Course title</h5>
                        <select class="rating">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                        <p class="card-text">Course detail - Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>