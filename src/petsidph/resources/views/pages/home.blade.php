@extends('welcome')

@section('content')
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 550px;
        }
        .carousel-item:nth-child(1) {
            background-image: url('{{ asset('images/home-images/petidph_banner1.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 550px;
        }
        .carousel-item:nth-child(2) {
            background-image: url('{{ asset('images/home-images/petidph_banner1.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .carousel-item:nth-child(3) {
            background-image: url('{{ asset('images/home-images/petidph_banner1.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: 20px;
            }
        }
        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 600px;
            }
        }
        .card .mask {
            z-index: 10;
        }
        body {
            /*
            background-image: radial-gradient(
              650px circle at 0% 0%,
              hsl(218, 41%, 35%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%
            ),*/
            radial-gradient(
                1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%
            );
        }
        #card-custom {
            width: 350px;
            height: 500px;
            background: hsla(0, 0%, 100%, 0.15);
            backdrop-filter: blur(30px);
        }
        #shape-1 {
            height: 220px;
            width: 220px;
            bottom: -100px;
            left: -90px;
            background: radial-gradient(#0000cc, #ad1fff);
            z-index: -10;
        }
        #shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            top: -100px;
            right: 10px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#0000cc, #ad1fff);
            z-index: -10;
        }
        #chip {
            width: 50px;
        }
        .fade {
            animation-duration: 1s;
            animation-fill-mode: both;
            animation-name: fade-in;
        }
        .fade-delay-small {
            animation-delay: 0.15s;
        }
        .fade-delay-medium {
            animation-delay: 0.3s;
        }
        .fade-delay-big {
            animation-delay: 0.4s;
        }
        @keyframes slidein {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
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
    <div class="container vh-90 my-5">
        <div class="row align-content-center text-white">
            <div class="col-md-6 d-flex align-items-center">
                <div class="animation-delay fade">
                    <h4 class="mb-4 opacity-90 text-dark font-weight-bold" style="color: hsl(240, 100%, 35%)">"YOUR PET IN THE CLOUD "</h4>
                    <h5 class="mb-4 opacity-90 text-dark" style="color: hsl(240, 100%, 50%)">What is Microchip?</h5>
                    <div class="col-md-10 text-dark">
                        <p class="text-muted">
                            A microchip is a permanent method of identification that can be used to easily trace your pet.
                        </p>
                        <p class="mb-4 opacity-90 text-dark" style="color: hsl(240, 100%, 50%)"><strong>Why Microchip?</strong></p>
                        <p class="text-muted">
                            Bigger chance of being found if lost.
                            Lesser chance of experiencing animal abuse and neglect as its online data can be traced.
                        </p>
                        <p class="mb-4 opacity-90 text-dark" style="color: hsl(240, 100%, 50%)"><strong>How?</strong></p>
                        <p class="text-muted">
                            Get your pet injected with microchip.
                            Register your pet online.
                        </p>
                    </div>
                    <a class="btn btn-white btn-rounded btn-lg me-3 opacity-80" href="#" role="button" data-ripple-color="hsl(218, 41%, 45%)">Get your pet microchipped Now!</a>
                    <a class="btn btn-white btn-rounded btn-lg me-3 opacity-80 mt-1" href="#" role="button">Learn more</a>
                </div>
            </div>
            <div class="col-md-5 my-3">
                <div id="shape-1" class="position-absolute rounded-circle shadow-5-strong fade fade-delay-small"></div>
                <div id="shape-2" class="position-absolute shadow-5-strong fade fade-delay-medium"></div>
                <div id="card-custom" class="card shadow-6 rounded-6 fade fade-delay-big">
                    <div class="card-body p-5 opacity-90 ls-widest mb-2 text-dark">
                        <h2><strong>PetsIDPh</strong> <span class="fw-light">Card</span></h2>
                    </div>
                    <div class="card-footer px-5 border-0 opacity-90 ls-widest fw-light">
                        <img id="chip" class="mb-5" src="{{ asset('images/logo_nobg.jpg') }}" alt="microchip"/>
                        <h5 class="mb-5 text-dark">990000005976382</h5>
                        <p class="mb-2 text-dark">"Kiki John Doe"</p>
                        <p class="mb-5 text-dark">12/25</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-md-4 my-1">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                        <img src="{{ asset('images/home-images/logo.jpg') }}" class="img-fluid" alt="Logo"/>
                        <a href="#">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                        </a>
                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="left: 0; bottom: 0">
                            <path fill="#fff" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Microchipping at A Glance</h5>
                        <p class="card-text text-justify">
                            Here in PetsIDph, we use an 8mm x 2mm microchip. It’s smaller than a grain of rice!.
                            It is a smaller version of the commonly used microchip for pets now. It can be
                            safely implanted on small dogs, puppies and cats and should be relatively less
                            painful for your furbabies!
                        </p>
                        <a class="btn btn-outline-info btn-md " href="{{ url('services') }}"
                           role="button" rel="nofollow">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-1">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                        <img src="{{ asset('images/home-images/logo.jpg') }}" class="img-fluid" alt="Logo"/>
                        <a href="#"><div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div></a>
                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="left: 0; bottom: 0">
                            <path fill="#fff" d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">About PetsIDPh</h5>
                        <p class="card-text text-justify">
                            Show your pet badge!
                            Your most convenient access to pet facilities!
                            Some malls and other pet friendly facilities already require pet registration to ensure public safety. This usually requires your dog to be vaccinated against rabies.
                        </p>
                        <a class="btn btn-outline-info btn-md mt-4" href="{{ url('about-us') }}" role="button" rel="nofollow">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-1">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-ripple-color="light" >
                        <img src="{{ asset('images/home-images/logo.jpg') }}" class="img-fluid" alt="Logo"/>
                        <a href="#"><div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div></a>
                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="left: 0; bottom: 0">
                            <path fill="#fff" d="M0,288L48,256C96,224,192,160,288,160C384,160,480,224,576,213.3C672,203,768,117,864,85.3C960,53,1056,75,1152,69.3C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Locations</h5>
                        <p class="card-text text-justify">
                            Cebu city animal care and control (formerly cebu city dog pound) is now capable of scanning pets who find their way to the pound. If your chipped pets are lost and surrendered to this facility then you can be contacted and your pet returned to you!
                        </p>
                        <a class="btn btn-outline-info btn-md " href="{{ url('contact-us') }}" role="button" rel="nofollow">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main layout-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js" integrity="sha512-K9tDZvc8nQXR1DMuT97sct9f40dilGp97vx7EXjswJA+/mKqJZ8vcZLifZDP+9t08osMLuiIjd4jZ0SM011Q+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        VanillaTilt.init(document.querySelector("#card-custom"), {
            startX: 45,
            startY: 45,
            reset: false,
        });
        //It also supports NodeList
        VanillaTilt.init(document.querySelectorAll("#card-custom"));
    </script>
@endsection
