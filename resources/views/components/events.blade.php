  <!-- Events -->
  <section class="container-fluid content">
    <!-- Posts -->
      <div class="row justify-content-center">
          <div class="col-10 justify-content-center">
              <h4 class="text-center mb-14 underline underline-offset-4 mt-14">OUR EVENTS</h4>
              <div class="row">
                  <!-- Post 1 -->

                  @foreach ($eventos as $evento)
                  <div class="col-md-4 col-12 justify-content-center mb-5">
                      <div class="card m-auto bg-black" style="width: 18rem;">
                          <img class="card-img-top" src="{{$evento->featured}}" alt="{{$evento->name}}">
                          <div class="card-body bg text-white">
                              <small class="card-txt-category">Categoría: Programación</small>
                              <h5 class="card-title my-2">{{$evento->name}}</h5>
                              <div class="d-card-text">
                                  {{$evento->description}}
                              </div>
                              <a href="#" class="post-link"><b>Leer más</b></a>
                              <hr>
                          
                          </div>
                      </div>
                  </div>
                      
                  @endforeach
                  <div class="flex justify-center">
                    {{ $eventos->links('pagination::bootstrap-4') }}
                  </div>
       
      </div>
    
  </section>