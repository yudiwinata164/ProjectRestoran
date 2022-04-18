@extends('restoran/layout/contentmain')

@section('isicontent')
<br>
<div id="carouselExampleCaptions" class="carousel slide shadow" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <img src="/img/jumbotron1.jpg" class="d-block w-100" id="img" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="/img/jumbotron2.jpg" class="d-block w-100" id="img" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="/img/jumbotron3.jpg" class="d-block w-100" id="img" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>









  <div class="row row-cols-2 row-cols-md-5 g-5 mt-4" id="font-st">
  <div class="col">
    <div class="cardr card border-0 shadow-lg p-4 h-100">
      <img src="/img/1.jpg" class="cardr card-img-top" alt="...">
      <div class="card-body text-center text-center">
        <h5 class="card-title fw-bold">Menu 1</h5>
        <hr>
        <p class="text-justify card-text">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="card-footer text-center"><button class="btn btn-outline-danger shadow rounded-circle "><span class="material-icons">shopping_bag</span></button></div>
    </div>
  </div>
  <div class="col">
    <div class="cardr card border-0 shadow-lg p-4 h-100">
      <img src="/img/2.jpg" class="cardr card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-center fw-bold">Menu 2</h5>
        <hr>
        <p class="text-justify card-text">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="card-footer text-center"><button class="btn btn-outline-danger shadow rounded-circle "><span class="material-icons">shopping_bag</span></button></div>
    </div>
  </div>
  <div class="col">
    <div class="cardr card border-0 shadow-lg p-4 h-100">
      <img src="/img/3.jpg" class="cardr card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-center fw-bold">Menu 3</h5>
        <hr>
        <p class="text-justify card-text">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="card-footer text-center"><button class="btn btn-outline-danger shadow rounded-circle "><span class="material-icons">shopping_bag</span></button></div>
    </div>
  </div>
  <div class="col">
    <div class="cardr card border-0 shadow-lg p-4 h-100">
      <img src="/img/4.jpg" class="cardr card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-center fw-bold">Menu 4</h5>
        <hr>
        <p class="text-justify card-text">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="card-footer text-center"><button class="btn btn-outline-danger shadow rounded-circle "><span class="material-icons">shopping_bag</span></button></div>
    </div>
  </div>
  <div class="col">
    <div class="cardr card border-0 shadow-lg p-4 h-100">
      <img src="/img/5.jpg" class="cardr card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-center fw-bold">Menu 5</h5>
        <hr>
        <p class="text-justify card-text">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="card-footer text-center"><button class="btn btn-outline-danger shadow rounded-circle "><span class="material-icons">shopping_bag</span></button></div>
    </div>
  </div>
</div>

@endsection