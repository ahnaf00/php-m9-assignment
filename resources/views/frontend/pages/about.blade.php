@extends('frontend.layout.template')

@section('body-content')
<section class="py-4 mt-5">
    <div class="container">
      <div class="row justify-space-between py-2">
        <div class="col-6 mx-auto">
          <div class="card card-profile mt-md-0 mt-5">
            <div class="card-header mt-n4 mx-3 p-0 bg-transparent position-relative z-index-2">
              <a class="d-block blur-shadow-image">
                <img src="{{ asset('frontend/assets') }}/img/bruce-mars.jpg" alt="img-blur-shadow" class="img-fluid border-radius-lg">
              </a>
            </div>
            <div class="card-body text-center">
              <h4 class="mb-0">Ahnaf Anan</h4>
              <p>Hello there! I'm Ahnaf, a dedicated student in the Computer Science and Engineering department at East West University. My skill set includes proficiency in PHP, Laravel, JavaScript, and Vue.js. I thrive on staying updated with the latest technologies and am always eager to learn something new.

                Beyond academics, I actively contribute to the East West University Telecommunication Club and Marketing Club as a general member, fostering a well-rounded experience. Passionate about exploring innovative solutions, I'm excited about the intersection of technology and creativity. </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
