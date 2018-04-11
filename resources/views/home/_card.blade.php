<div class="col-lg-3">
  <div class='card'>
      <img class="card-img-top" src="{{ asset('images/card.svg') }}" alt="Course image">
      <div class='card-body'>
          <h5 class="card-title">Course title</h5>
          John Doe
          <select class="rating">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
          <div class="pull-right">
              <strong>$ 9.99</strong>
          </div>
      <a href="{{ route('courses.show', 1) }}" class="btn btn-primary">Detail</a>
      </div>
  </div>
</div>