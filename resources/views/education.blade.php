<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Education CROWDFundingBOX #1 fundraising Platform..</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vir-medical.css')}}">


 

</head>
@extends('layouts.frontend')
@section('education')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="col-top-gethelp">
                <p id="get">Get help with education fundraising</p>
                <p id="sub-get">With a crowdfundingbox, you can quickly get help for school and education costs.</p>
                <a href="registration"> <button type="button" class="btn btn-success" id="center-button-medical">START a crowdfundingbox</button></a>
                <p id="a-friend">Katie raised php80k so every kid in her school could get a bike.</p>   
            </div>
            <div class="col-md-6">
            <img src="{{URL('images/education.png')}}" class="main-medical-img"></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md">
                <p id="Were">We're the leader in online education fundraising</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="amount">250,000+</p>
                <p class="amount-content">education fundraisers per year</p>
            </div>
            <div class="col-md-2" id="middle-line">
                            </div>
            <div class="col-md-5">
                <p class="amount">Php70 million+</p>
                <p class="amount-content">raised per year</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <p id="title-stories">crowdfundingbox Fundraising Stories</p>
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
            <img src="{{URL('images/education-stories-1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">FROM PUBLIC SCHOOL TO DE LA SALLE</h5>
                <p class="content-slide">Balong overcame life's obstacles and made it into De La Salle. Donors from around the World. supported his dreams and helped him with the many education-related expenses he couldn't otherwise 
                afford.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{URL('images/education-stories-2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">FOCUSING ON LEARNING</h5>
                <p class="content-slide">As a first-year teacher, Neneng wants the best for her students but can't necessarily afford it. She turned to crowdfundingbox to raise php50k to equip her classroom.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{URL('images/education-stories-3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">BUILDING A BETTER FUTURE</h5>
                <p class="content-slide">A scrappy robotics team from a low-income school, the Panther Bots were able to attend the World Championship after raising 
                php120k..</p>
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

