@extends('frontend.layout.template')

@section('body-content')
<section class="pt-5 pb-0">
    <div class="my-5 text-center">
        <h2 class="mb-5">Projects</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
              <a class="d-block blur-shadow-image">
                <img src="{{ asset('frontend/assets') }}/img/products/product-2-min.jpg" alt="img-blur-shadow" class="img-fluid border-radius-lg">
              </a>
            </div>
            <div class="card-body pt-3">
              <p class="text-dark mb-2 text-sm">Entire Apartment • 3 Guests • 2 Beds</p>
              <a href="javascript:;">
                <h5>
                  PHP Newsletter Project
                </h5>
              </a>
              <p>
                Siri&#39;s latest trick is offering a hands-free TV viewing experience, that will allow consumers to turn on or off their television, change inputs, fast forward.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
              <a class="d-block blur-shadow-image">
                <img src="{{ asset('frontend/assets') }}/img/products/product-1-min.jpg" alt="img-blur-shadow" class="img-fluid border-radius-lg">
              </a>
            </div>
            <div class="card-body pt-3">
              <p class="text-dark mb-2 text-sm">Private Room • 1 Guests • 1 Sofa</p>
              <a href="javascript:;">
                <h5>
                  Single Page Website
                </h5>
              </a>
              <p>
                As Uber works through a huge amount of internal management turmoil, the company is also consolidating more of its international business.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
              <a class="d-block blur-shadow-image">
                <img src="{{ asset('frontend/assets') }}/img/products/product-3-min.jpg" alt="img-blur-shadow" class="img-fluid border-radius-lg">
              </a>
            </div>
            <div class="card-body pt-3">
              <p class="text-dark mb-2 text-sm">Entire Apartment • 4 Guests • 2 Beds</p>
              <a href="javascript:;">
                <h5>
                  Vue Js Project
                </h5>
              </a>
              <p>
                Music is something that every person has his or her own specific opinion about. Different people have different taste, and various types of music.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm mb-0">From / Night</button>
            </div>
          </div>
        </div>
        <div class="col-sm-7 ms-auto text-end">
          <ul class="pagination pagination-primary mt-4">
            <li class="page-item ms-auto">
              <a class="page-link" href="javascript:;" aria-label="Previous">
                <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:;">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:;">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:;">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:;">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:;">5</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:;" aria-label="Next">
                <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection
