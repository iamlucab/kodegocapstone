

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('Capstone Project WD19P')</title>
    
    <!-- Custom fonts for this template-->
   
     <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <style>
        .img-logo {
            width:350px;
         }
         .h1-class {
            color:#52874f;
            font-size:20px;
            text-align: center;
            border: 1px solid green;
            background-color:#fbff8c;

         }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/cap-user.css') }}">
  

<body class="bg-gradient-primary">

<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">
 
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
        
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-2">
                        
                                <div class="text-center">
                                <img class="img-logo" src="/img/logo.png" />
                                @include("partials.navbar")
                                </div>
                               <h1 class="h1-class"> <p><br>What is Crowdfunding? <br>
The Clear and Simple Answer <p></h1>
                                <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Our Platforms</h5>
        <p class="card-text">Crowdfunding is a way to raise money for an individual or organization by collecting donations through family, friends, friends of friends, strangers, businesses, and more. </p>
        <a href="/register" class="btn btn-success">Find Out How it works</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fa fa-handshake-o" aria-hidden="true"></i> <i class='fas fa-atom'></i>Trust & safety</h5>
        <p class="card-text">Our platform is the safest, most secure place to give and receive donations. We have a dedicated Trust & Safety team that works day and night to prevent misuse and make sure funds reach the right hands.</p>
        <a href="/login" class="btn btn-primary">Start CrownFunding</a>
      </div>
    </div>
  </div>
</div>
                                <hr>
                                <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/shelter.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tell a compelling story</h5>
        <p class="card-text">From your title to your story and photos, your fundraiser story should be based on your needs and it should inspire people to donate. </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                <!-- </div>  @include("partials.footer") -->
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
    <script src="js/sb-admin-2.min.js"></script>