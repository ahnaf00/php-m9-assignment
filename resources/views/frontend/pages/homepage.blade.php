@extends('frontend.layout.template')

@section('body-content')
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <!-- START Testimonials w/ user image & text & info -->
        <section class="py-sm-7 py-5 position-relative">
        <div class="container">
            <div class="row">
            <div class="col-12 mx-auto">
                <div class="mt-n8 mt-md-n9 text-center">
                <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="{{ asset('frontend/assets') }}/img/bruce-mars.jpg" alt="bruce" loading="lazy">
                </div>
                <div class="row py-5">
                <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                     <h3 class="mb-0">Ahnaf Anan</h3>
                    <div class="d-block">
                        <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
                    </div>
                    </div>
                    <div class="row mb-4">
                    <div class="col-auto">
                        <span class="h6">323</span>
                        <span>Posts</span>
                    </div>
                    <div class="col-auto">
                        <span class="h6">3.5k</span>
                        <span>Followers</span>
                    </div>
                    <div class="col-auto">
                        <span class="h6">260</span>
                        <span>Following</span>
                    </div>
                    </div>
                    <p class="text-lg mb-0">
                        Hello there! I'm Ahnaf, a dedicated student in the Computer Science and Engineering department at East West University. My skill set includes proficiency in PHP, Laravel, JavaScript, and Vue.js. I thrive on staying updated with the latest technologies and am always eager to learn something new.

                        Beyond academics, I actively contribute to the East West University Telecommunication Club and Marketing Club as a general member, fostering a well-rounded experience. Passionate about exploring innovative solutions, I'm excited about the intersection of technology and creativity.
                        {{-- <br><a href="javascript:;" class="text-info icon-move-right">More about me
                        <i class="fas fa-arrow-right text-sm ms-1"></i> --}}
                    </a>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- END Testimonials w/ user image & text & info -->
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-5">Check my latest blogposts</h3>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                    <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                        <img src="{{ asset('frontend/assets') }}/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body px-0">
                        <h5>
                        <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
                        </h5>
                        <p>
                        Finding temporary housing for your dog should be as easy as
                        renting an Airbnb. That’s the idea behind Rover ...
                        </p>
                        <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                    <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                        <img src="{{ asset('frontend/assets') }}/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body px-0">
                        <h5>
                        <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                        </h5>
                        <p>
                        If you’ve ever wanted to train a machine learning model
                        and integrate it with IFTTT, you now can with ...
                        </p>
                        <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                    <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                        <img src="{{ asset('frontend/assets') }}/img/examples/blog-9-4.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body px-0">
                        <h5>
                        <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                        </h5>
                        <p>
                        If you’ve ever wanted to train a machine learning model
                        and integrate it with IFTTT, you now can with ...
                        </p>
                        <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="card card-blog card-background cursor-pointer">
                    <div class="full-background" style="background-image: url('{{ asset('frontend/assets') }}/img/examples/blog2.jpg')" loading="lazy"></div>
                    <div class="card-body">
                        <div class="content-left text-start my-auto py-4">
                        <h2 class="card-title text-white">Flexible work hours</h2>
                        <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                        <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

@endsection
