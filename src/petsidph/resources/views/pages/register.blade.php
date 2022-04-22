@extends('welcome')

@section('content')
    <style>
        #intro {
            background-image: url("{{ asset('images/dog.jpg') }}");
            height: 143vh;
        }
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }
        .navbar .nav-link {
            color: #fff !important;
        }
    </style>

    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="bg-white rounded shadow-5-strong p-5">
                            <img src="{{ asset('images/home-images/logo.jpg') }}" style="height:50px;" alt="Logo"/>
                            <h2>Pets ID PH</h2>
                            <hr><br>
                            <form>
                                <div class="row">
                                    <div class="col-md-4 p-5">
                                        <div class="ratio ratio-1x1 rounded-circle overflow-hidden shadow-2-strong">
                                            <a href="#" onclick="$('#picture').trigger('click'); return false;">
                                                <img src="{{ asset('images/avatar.png') }}" class="img-fluid" alt="User Photo" id="userPhoto" />
                                            </a>
                                        </div>
                                        <input accept="image/*" type="file" class="form-control" name="picture" id="picture" style="display: none" />
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary btn-sm mt-3" onclick="clearPhoto()">Clear Photo</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ms-auto p-3">
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-outline">
                                                    <input type="text" name="firstname" id="firstname" class="form-control" value="" required/>
                                                    <label class="form-label" for="firstname">First name</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-outline">
                                                    <input type="text" name="lastname" id="lastname" class="form-control" required />
                                                    <label class="form-label" for="lastname">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control" required />
                                            <label class="form-label" for="email">Email address</label>
                                        </div>
                                        <!-- Cellphone# input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" name="contact_no" id="contact_no" class="form-control" onkeypress="return numbersonly(event)" required/>
                                            <label class="form-label" for="contact_no">Cellphone #</label>
                                        </div>
                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="password" class="form-control" onkeyup="check()" required/>
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <!-- Confirm Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="confirm" class="form-control" id="confirm" onkeyup="check()" required/>
                                            <label class="form-label" for="confirm">Confirm Password</label>
                                        </div>
                                    </div>
                                    <!-- Success message -->
                                    <div class="alert" id="message" style="display:none"></div>
                                    <!-- Submit button -->
                                    <button type="submit" id="btnRegister" class="btn btn-primary btn-block mb-4">Register</button>
                                </div>
                            </form>
                            <!-- Social media accounts -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $("#btnRegister").click(function(e){
            e.preventDefault();
            $.ajax({
                url: '{{ url('/user/create') }}',
                method:'POST',
                data: {
                    "_token":   "{{ csrf_token() }}",
                    firstname:  $('#firstname').val(),
                    lastname:   $('#lastname').val(),
                    email:      $('#email').val(),
                    contact_no: $('#contact_no').val(),
                    password:   $('#password').val()
                },
                success:function(response){
                    $("#message").show();
                    $("#message").removeClass("alert-danger");
                    $("#message").addClass("alert-success");
                    $("#message").html(response.success);
                },
                error: function (err) {
                    $.each(err.responseJSON.errors, function (key, value) {
                        $("#message").show();
                        $("#message").removeClass("alert-success");
                        $("#message").addClass("alert-danger");
                        $("#message").html(value[0]);
                    });
                },
            });
        });

        picture.onchange = evt => {
            const [file] = picture.files
            if (file) {
                userPhoto.src = URL.createObjectURL(file)
            }
        }

        function clearPhoto() {
            $("#picture").val('');
            $("#userPhoto").attr("src", '{{ asset('images/avatar.png') }}');
        }

        function check() {
            var message = "";

            if($("#password").val() !== $("#confirm").val()) {
                message += "Please confirm password!<br>";
            }

            if(message === "") {
                $("#message").hide();
                $("#message").removeClass("alert-danger");
                $("#btnRegister").prop("disabled", false);
            } else {
                $("#message").show();
                $("#message").addClass("alert-danger");
                $("#btnRegister").prop("disabled", true);
            }
            $("#message").html(message);
        }

        function numbersonly(e) {
            var unicode=e.charCode? e.charCode : e.keyCode
            if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
                if (unicode<48||unicode>57) //if not a number
                    return false //disable key press
            }
        }
    </script>
@endsection
