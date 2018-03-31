<div class="col-lg-12 mb-4 mt-5">
    <h2>Courses List</h2>
</div>
<div class="col-lg-12" style="padding: 0 7px;">
    <div class="row">
        @foreach(range(1,4) as $item)
            <div class="col-lg-3">
                <div class='card card5'>
                    <div class='image'></div>
                    <div class='details'>
                        <h5 class="card-title">Course title</h5>
                        <p>John Doe</p>
                        <select class="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <p class="card-text">Course detail - Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="pull-right">
                          <strong>$ 9.99</strong>
                        </div>
                    <a href="{{ route('courses.show', 1) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>