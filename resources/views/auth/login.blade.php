@extends('layout')
  
@section('content')
<!DOCTYPE html>
<html lang="en">
<style>
    .img-logo {
        width:350px; 
    }
    </style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Registration</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}">
     <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/128/1807/1807455.png" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/cap-user.css') }}">


    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                            <!-- <img class="img-fluid" src="/img/logo.png" width="350px" /> -->
                             <!-- @include("partials.navbar") -->
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back! </h1>
                            </div>
                            <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" id="email_address" class="form-control" placeholder="Enter Email Address"  name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                                </div></div>
                                <div class="form-group ">
                                    <div class="col-sm-12">
                                    <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                                    </div>
                                   
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Login to your Account">
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                                 </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/registration">Don't have an Account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


</body>

</html>


    @endsection
