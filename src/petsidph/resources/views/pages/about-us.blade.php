@extends('welcome')

@section('content')
    <style>
        .mvformat {
            display: table;
            width: 50%;
            border-spacing: 5px; /* cellspacing:poor IE support for  this */
            margin-left: 20px;
            margin-top: 20px;
            text-align: left;
        }
        .flex-container {
            display: flex;
        }
        .flex-child {
            flex: 1;
        }
        .mySlides{
            display:none;
        }
    </style>
    <h1 class="mt-3" style="text-align: center;">GET TO KNOW US</h1>
    <div class="flex-container mb-3">
        <div class="mvformat flex-child">
            <div class="w3-content w3-section" style="max-width:250px; margin-left: 25%;">
                <img class="mySlides" src="{{ asset('images/about-us/oreo.jpg') }}" style="width:100%;"  alt="Oreo"/>
                <img class="mySlides" src="{{ asset('images/about-us/cat.jpg') }}" style="width:100%"  alt="Cat"/>
                <img class="mySlides" src="{{ asset('images/about-us/bogart.jpg') }}" style="width:100%"  alt="Bogart"/>
            </div>
        </div>
        <div class="mvformat flex-child">
            <p style="font-size: 35px; font-family: Cursive; margin-bottom: -5px;"><b> Mission </b></p>
            <p style="font-size: 12px;">
                PetsIDph mainly aims to provide to the following sectors. <br>
                <br><b> Pets </b>
                <br> Bigger chance of being found if lost.
                <br> Lesser chance of experiencing animal abuse and neglect as its online data can be traced. <br>
                <br><b> Pet Owners </b>
                <br> Convenient availability of pet records and ease of pet transport. <br>
                <br><b> Community</b>
                <br> Help address public health concerns related to animal bite and rabies prevalence in the Philippines.
            </p>
            <p style="font-size: 35px; font-family: Cursive; margin-bottom: -5px;"><b>Vision</b></p>
            <p style="font-size: 12px;"> Your sole pass to convenient pet travel in the Philippines and the world.</p></div>
    </div>
    <script>
        var myIndex = 0;
        carousel();
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
@endsection
