<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Medical CROWDFundingBOX #1 fundraising Platform..</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vir-medical.css')}}">


 

</head>
@extends('layouts.frontend')
@section('medical')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="col-top-gethelp">
                <p id="get">Get help with medical fundraising</p>
                <p id="sub-get">With a CrowdFundBOX, you can get immediate help with medical bills.</p>
                <a href="registration"> <button type="button" class="btn btn-success" id="center-button-medical">START a CrowdFundBox</button></a>
                <p id="a-friend">A friend raised php35k to help Cindy's children with their medical care.</p>   
            </div>
            <div class="col-md-6" id="test-do">
            <img src="{{URL('images/medical.png')}}" class="main-medical-img"></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md">
                <p id="Were">We're the leader in online medical fundraising</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="amount">250,000+</p>
                <p class="amount-content">medical fundraisers per year</p>
            </div>
            <div class="col-md-2" id="middle-line">
                            </div>
            <div class="col-md-5">
                <p class="amount">Php650 million+</p>
                <p class="amount-content">raised per year</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <p id="title-stories">CrowdFundBox Fundraising Stories</p>
            </div>
        </div>
    </div>
    
    <div class="container" id="con-slide">
        <div class="row">
            <div class="col-lg-12">
            <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{URL('images/medical-stories-1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">AN ARMY AGAINST LYMPHOMA</h5>
                <p class="content-slide">Richard was just 33 when he got the diagnosis he couldn't prepare for: B-cell non-Hodgkin lymphoma. His "army" of more than 200 donors and supporters have helped him and his family through multiple rounds of chemo.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{URL('images/medical-stories-2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">GIVING BACK TO AN ADVOCATE</h5>
                <p class="content-slide">Orla has fought cystic fibrosis her whole life—and fiercely advocated for her community. When she needed support for a double lung transplant, her friend Belinda started a CrowdFundBox and raised over php90k for her recovery.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{URL('images/medical-stories-3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="title-slide">A THERAPEUTIC ANIMAL COMPANION</h5>
                <p class="content-slide">Boyet is a sweet boy with autism spectrum disorder. With a CrowdFunBox, his mother Ashley was able to secure a specially-trained service dog to help him navigate the world with more comfort and confidence.</p>
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
                <a href="registration"> <button type="button" class="btn btn-success" id="center-button-medical-ready-bottom">START a CrowdFundBox</button></a>
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

