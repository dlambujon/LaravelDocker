@extends('welcome')

@section('content')
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <ol class="carousel-indicators">
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <!-- <h1 class="mb-3">Pets ID PH</h1>
                            <h3 class="mb-4">Travelling Doggo?<br> Im Vaaxed! Check Online!-->
                            <a class="btn btn-outline-light btn-lg m-2" href="{{ url('user/login') }}" role="button" rel="nofollow">Login</a>
                            <a class="btn btn-outline-light btn-lg m-2" href="{{ url('user/register') }}" role="button">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <!-- <h2>You can place here any content</h2> -->
                            <h1 class="mb-3">Pets ID PH</h1>
                            <h5 class="mb-4">Are your pets mall ready?</h5>
                            <a class="btn btn-outline-light btn-lg m-2" href="{{ url('user/login') }}" role="button" rel="nofollow">Login</a>
                            <a class="btn btn-outline-light btn-lg m-2" href="{{ url('user/register') }}" role="button">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask" style="background: linear-gradient(45deg, rgba(29, 236, 197, 0.7), rgba(91, 14, 214, 0.7) 100%);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h1 class="mb-3">Pets ID PH</h1>
                            <h3 class="mb-4">Your Fur Momma is looking for you!</h3>
                            <a class="btn btn-outline-light btn-lg m-2" href="{{ url('user/login') }}" role="button" rel="nofollow">Login</a>
                            <a class="btn btn-outline-light btn-lg m-2" href="{{ url('user/register') }}" role="button">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section>
        <div class="row mt-5">
            <div class="col-md-6 gx-5 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                    <img src="{{ asset('images/logo.png') }}" height="300" alt="" loading="lazy" />
                    <a href="#">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 gx-5 mb-4">
                <h4><strong>" YOUR PET IN THE CLOUD "</strong></h4>
                <p><strong>What is Microchip?</strong></p>
                <p class="text-muted">
                    A microchip is a permanent method of identification that can be used to easily trace your pet
                </p>
                <p><strong>Why Microchip?</strong></p>
                <p class="text-muted">
                    Bigger chance of being found if lost.
                    Lesser chance of experiencing animal abuse and neglect as its online data can be traced.
                </p>
                <p><strong>How?</strong></p>
                <p class="text-muted">
                    Get your pet injected with microchip.
                    Register your pet online.
                </p>

            </div>
        </div>
    </section>
    <hr class="my-5" />
    <section class="text-center">
        <!-- <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4> -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('images/home-images/services-offered.jpg') }}" height="250" alt="" loading="lazy" />
                        <a href="#">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">What more can we offer?</h5>
                        <p class="card-text">
                            Services that suits your needs! Check other services we offer.
                        </p>
                        <a href="#" class="btn btn-primary">Services</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('images/home-images/know-us.jpg') }}" height="250" alt="" loading="lazy" />
                        <a href="#">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Get to know us</h5>
                        <p class="card-text">
                            What are our Goals? What we plan for the future?
                        </p>
                        <a href="#" class="btn btn-primary">About Us</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('images/home-images/commu-with-us.jpg') }}" height="250" alt="" loading="lazy" />
                        <a href="#">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Communicate with us</h5>
                        <p class="card-text">
                            Got the service you're looking for? Reach us and let's talk about it.
                        </p>
                        <a href="#" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-5" />
@endsection
