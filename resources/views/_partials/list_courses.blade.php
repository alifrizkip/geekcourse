<div class="col-lg-12" style="padding: 0 7px;">
    @foreach(range(1,3) as $item)
      <div class="row mb-3">
          @foreach(range(1,4) as $item)
              <div class="col-lg-3">
                  <div class='card'>
                      <img class="card-img-top" src="{{ asset('images/card.svg') }}" alt="Course image">
                      <card class="card-body">
                        <h5 class="card-title">Course title</h5>
                        <p class="card-text">John Doe, Web Developer</p>
                        <hr>
                        <a href="{{ route('courses.show', 1) }}" class="card-link">Start Course</a>
                      </card>
                  </div>
              </div>
          @endforeach
      </div>
    @endforeach
  </div>