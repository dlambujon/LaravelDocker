@extends('welcome')

@section('content')
    <style>
        .flex-container {
            display: flex;
        }
        .flex-child {
            flex: 1;
        }
        .div-table-col{
            font-size: 12px;
        }
    </style>
    <h1 class="d-flex justify-content-center mt-3">CONTACT US</h1>
    <div class="d-flex justify-content-center mb-5" style="font-size: 12px;text-align: center;">
        If you are interested or have questions, you can visit our clinic or contact us:
    </div>
    <div class="flex-container" style="height:50vh;">
        <div class="flex-child">
            <div class="div-table-col d-flex justify-content-center">
                <img src="{{ asset('images/contact-us/location.png') }}" height="30" alt="" loading="lazy"/>
            </div>
            <div class="div-table-col d-flex justify-content-center">
                <b>LOCATION</b>
            </div>
            <div class="div-table-col d-flex justify-content-center">935K, Salinas Dr. Lahug, Cebu City, 6000</div>
        </div>
        <div class="flex-child">
            <div  class="div-table-col d-flex justify-content-center">
                <img src="{{ asset('images/contact-us/phone.png') }}" height="30" alt="" loading="lazy" />
            </div>
            <div class="div-table-col d-flex justify-content-center">
                <b>PHONE</b>
            </div>
            <div class="div-table-col d-flex justify-content-center">032 - 272 - 7829</div>
        </div>
        <div class="flex-child">
            <div class="div-table-col d-flex justify-content-center">
                <img src="{{ asset('images/contact-us/email.png') }}" height="30" alt="" loading="lazy" />
            </div>
            <div class="div-table-col d-flex justify-content-center">
                <b>EMAIL</b>
            </div>
            <div class="div-table-col d-flex justify-content-center">support@petsidph.com</div>
        </div>
    </div>
@endsection
