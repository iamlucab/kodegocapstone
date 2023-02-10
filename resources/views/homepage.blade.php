<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROWDFundingBOX #1 fundraising Platform..</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vir-index.css')}}">
</head>
@extends('layouts.frontend')
@section('home')

<body>
    <!--slogan-->
    <div class="container-fluid" id="container-main">
        <div class="row">
            <div class="col">
            <p class= "slogan">Little help for a BIG cause. A little help can make a difference!!!</p>
                                <a href="registration"> <button type="button" class="btn btn-success" id="center-button">START with CrowdFundingBox</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
            <p id="todays">Today, Over a billion people live in slums. That's 14% of the world's population.</p>
                                    <p id="we-work">We work over vast areas all over the world to eliminate poverty, provide proper hygiene and education for the children living in the slums.</p>
            </div>
        </div>
    </div>

    <!--do-in-vol part-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <div class="card" id="img-card1"><a href="registration">
                    <img src="{{URL('images/donate.png')}}" class="card-img-top" id="img-do-in-teer1" alt="..."></a>
                    <div class="card-body">
                    <h5 class="card-title">Support CrowdFundingBox</h5>
                    </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="card" id="img-card2"><a href="registration">
                    <img src="{{URL('images/involved.png')}}" class="card-img-top" id="img-do-in-teer2"  alt="..."> </a>
                    <div class="card-body">
                    <h5 class="card-title">Start Changing Lives</h5>
                    </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="card" id="img-card3"><a href="registration">
                    <img src="{{URL('images/volunteer.png')}}" class="card-img-top" id="img-do-in-teer3" alt="..."></a>
                    <div class="card-body">
                    <h5 class="card-title" id="card-title1" >Volunteer</h5>
                    </div>
                    </div>
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="about">About CrowdFundingBox</p>
                <p id="were-about">We’re here to help people, help each other<p>

                <p id="were-sub-about">CrowdFundingBox is a community-powered fundraising platform. We believe that help is powerful, which is why we’re committed to making it safe and easy for anyone to give and get help.</p>

            </div>
        </div>
    </div>


</body>
</html>

@endsection
