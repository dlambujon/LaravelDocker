@extends('welcome')

@section('content')
    <style>
        #intro {
            background-image: url("{{ asset('images/dog.jpg') }}");
            height: 100vh;
        }
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }
    </style>
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <div class="bg-white rounded shadow-5-strong p-5">
                            <form>
                                <img src="{{ asset('images/home-images/logo.jpg') }}" style="height:50px;"  alt="Logo"/>
                                <h2>Pets ID PH</h2>
                                <hr><br>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Email address</label>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="form1Example2" class="form-control" />
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                            <label class="form-check-label" for="form1Example3">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block" data-attach-loading>Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
