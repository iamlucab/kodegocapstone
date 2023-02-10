<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Emergency CROWDFundingBOX #1 fundraising Platform..</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vir-medical.css')}}">


 

</head>
@extends('layouts.frontend')
@section('emergency')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="col-top-gethelp">
                <p id="get">Get help with emergency fundraising</p>
                <p id="sub-get">With a crowdfundingbox, you can get help with emergency costs.</p>
                <a href="registration"> <button type="button" class="btn btn-success" id="center-button-medical">START a CrowdFundingBox</button></a>
                <p id="a-friend">Manoy raised php32k to help his community after devastating mudslides.</p>   
            </div>
            <div class="col-md-6">
            <img src="{{URL('images/emergency.png')}}" class="main-medical-img"></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md">
                <p id="Were">We're the leader in online emergency fundraising</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="amount">100,000+</p>
                <p class="amount-content">emergency fundraisers per year</p>
            </div>
            <div class="col-md-2" id="middle-line">
                            </div>
            <div class="col-md-5">
                <p class="amount">Php230 million+</p>
                <p class="amount-content">raised per year</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <p id="title-stories">CrowdFundingBox Fundraising Stories</p>
            </div>
        </div>
    </div>
    
    <div class="container" id="con-slide">
        <div class="row">
            <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{URL('images/emergency-stories-1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            <h5 class="title-slide">RISING FROM THE ASHES</h5>
                <p class="content-slide">Days after surviving the Las Vegas shooting, Michella lost her family home to wildfire. Nearly 5000 donors gave php633k, helping Michella and her parents get back on their feet.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{URL('images/emergency-stories-2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">REBUILDING AFTER THE FLOODS</h5>
                <p class="content-slide">When Hurricane Harvey hit, the Pruetts were among the thousands whose houses were damaged by flood waters. Friends and family raised php300k to help them move back home.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{URL('images/emergency-stories-3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">VEGAS STRONG AFTER TRAGEDY</h5>
                <p class="content-slide">More than 88,000 people from around the world came together to help the victims of the Las Vegas shooting. With php200 million raised, survivors are getting the support they need.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <span class="visually"><<</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <span class="visually" >>></span>
        </button>
        </div>
            </div>
                   </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <p id="ready">Ready to fundraise?</p>
                <a href="registration"> <button type="button" class="btn btn-success" id="center-button-medical-ready-bottom">START a CrowdFundingBox</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
            <div>
            <!--     @include('layouts.customercare') -->
        </div>
            </div>
        </div>
    </div>

    
</body>
@endsection
</html>

