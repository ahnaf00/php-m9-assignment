@extends('frontend.layout.template')

@section('body-content')
<section class="py-7 bg-gradient-dark position-relative overflow-hidden">
    <img class="position-absolute start-0 top-0 h-100 z-index-1 opacity-6" src="{{ asset('frontend/assets') }}/img/shapes/pattern-lines.svg" alt="pattern">
    <div class="container position-relative z-index-1">
      <div class="row">
        <div class="col-lg-6 col-md-12 d-flex justify-content-center flex-column">
          <h2 class="text-white">Get in Touch</h2>
          <p class="pe-5 text-white opacity-8 z-index-1">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</p>
          <p class="mt-4 text-white opacity-8 z-index-1">730 Dyonisie Wolf <br> Bucharest, RO 010458</p>
          <div class="d-flex p-2 text-white opacity-8">
            <i class="material-icons text-sm">call</i>
            <span class="text-sm ps-3">(+40) 772 100 200</span>
          </div>
          <div class="d-flex p-2 text-white opacity-8">
            <i class="material-icons text-sm">email</i>
            <span class="text-sm ps-3">hello@creative-tim.com</span>
          </div>
          <div class="d-flex p-2 text-white opacity-8">
            <i class="material-icons text-sm">support</i>
            <span class="text-sm ps-3">Open Support Ticket</span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mt-5 mt-lg-0">
            <form id="contact-form" method="post" autocomplete="off">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                      <label>First name</label>
                      <input class="form-control" placeholder="eg. William" aria-label="First Name..." type="text">
                    </div>
                  </div>
                  <div class="col-md-6 ps-2">
                    <div class="input-group input-group-static mb-4">
                      <label>Last name</label>
                      <input type="text" class="form-control" placeholder="eg. Smith" aria-label="Last Name...">
                    </div>
                  </div>
                </div>
                <div>
                  <div class="input-group input-group-static">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="will@creative-tim.com">
                  </div>
                </div>
                <div class="input-group input-group-static mt-4">
                  <label>Your message</label>
                  <textarea name="message" class="form-control" placeholder="Type here" id="message" rows="3"></textarea>
                </div>
                <div class="row mt-3">
                  <div class="col-md-8">
                    <div class="form-check form-switch d-flex align-items-center mb-2">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                      <label class="form-check-label mb-0 ms-3" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark text-underline">Terms and Conditions</a>.</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn bg-gradient-info mt-3">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
