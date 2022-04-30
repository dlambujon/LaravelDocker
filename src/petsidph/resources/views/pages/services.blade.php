@extends('welcome')

@section('content')
    <style>
        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;

        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
            padding-bottom: 15px;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <h1 class="mt-3 mb-3" style="text-align: center;">WHAT WE DO</h1>
    <div class="row pl-3 pr-3">
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img src="{{ asset('images/photo=sample.jpg') }}" height="30" alt="" loading="lazy" />
                </a>
                <div class="desc">Microchip</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img src="{{ asset('images/photo=sample.jpg') }}" height="30" alt="" loading="lazy" />
                </a>
                <div class="desc">Vaccination</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img src="{{ asset('images/photo=sample.jpg') }}" height="30" alt="" loading="lazy" />
                </a>
                <div class="desc">Consultation</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img src="{{ asset('images/photo=sample.jpg') }}" height="30" alt="" loading="lazy" />
                </a>
                <div class="desc">Medication</div>
            </div>
        </div>
    </div>
    <div class="row pl-3 pr-3">
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img src="{{ asset('images/photo=sample.jpg') }}" height="30" alt="" loading="lazy" />
                </a>
                <div class="desc">Clinic Services</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img src="{{ asset('images/photo=sample.jpg') }}" height="30" alt="" loading="lazy" />
                </a>
                <div class="desc">Pet Grooming</div>
            </div>
        </div>
    </div>
@endsection
