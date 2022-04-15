<html lang="en">
    <head>
        <title>Pets ID PH</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="shortcut icon" href="{{ asset('/images/logo.png') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

        <style>
            /* Carousel styling */
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 100vh;
            }
            .carousel-item:nth-child(1) {
                background-image: url('{{ asset('images/home-images/petidph_banner1.jpg') }}');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                height: 100vh;
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
                    margin-top: -58.59px;
                }
            }
            .navbar .nav-link {
                color: #fff !important;
            }
            .flex-container {
                display: flex;
            }
            .flex-child {
                flex: 1;
            }
        </style>
    </head>
    <body oncontextmenu="return false;">
        @include('partials.sidebar')
        @include('partials.navbar')

        <main class="mt-5">
            <br>
            <div class="container">
                @yield('content')

                @include('partials.footer')
            </div>
        </main>

        <script src="https://stacksnippets.net/scripts/snippet-javascript-console.min.js?v=1"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('/js/tether.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/mdb.min.js') }}"></script>
    </body>
</html>
