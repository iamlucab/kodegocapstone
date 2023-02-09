@extends('layout') 

  
<!-- @section('content') -->
<!-- <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                  
                </div>
            </div>
        </div>
    </div>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/128/1807/1807455.png" />
    <title>CrowdFund Box</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/cap-user.css') }}">
        
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <style>
    .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
    .MultiCarousel .MultiCarousel-inner .item { float: left;}
    .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }

    .img-foundation {
        display:flex;
        width: 100%;
        height: auto;
        border-radius: 20px;
        align:center;
        margin:auto;
    }

    .footer-text {
        font-size:11px;
        color:#878787;
    }

    .paymentWrap {
	padding: 50px;
}

.paymentWrap .paymentBtnGroup {
	max-width: 400px;
	margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
	padding: 40px;
	box-shadow: none;
	position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
	outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
	border-color:#149eb3;
	outline: none !important;
	box-shadow: 0px 3px 15px 0px #a2d3e1;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
	position: absolute;
	right: 1px;
	top: 1px;
	bottom: 1px;
	left: 1px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	border: 2px solid transparent;
	transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.gcash {
	background-image: url("img/gcash.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.paymaya {
	background-image: url("https://www.bworldonline.com/wp-content/uploads/2021/09/Paymaya-logo.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.bdo {
	background-image: url("https://asianbankingandfinance.net/sites/default/files/styles/opengraph/public/2022-10/untitled-design-2.png?h=131e0991&itok=TwpfW4Yt");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.palawan{
	background-image: url("https://www.7-eleven.com.ph/wp-content/uploads/2020/08/palawan-express.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.palawan {
	background-image: url("https://www.7-eleven.com.ph/wp-content/uploads/2020/08/palawan-express.png");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
	border-color: #63bdf0;
	outline: none !important;
}

    
        </style>
</head> 



<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

    <?PHP 


?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> <br> CROWDFUND BOX</div>
            </a>

       
            <hr class="sidebar-divider my-0">


            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                
            </li>
    
 <!-- Divider -->
 <hr class="sidebar-divider">

<!-- Heading -->

    
   <div class="sidebar-heading">
    ADMIN MENU
    </div>
                <li class="nav-item">
                <a class="nav-link" href="/organization">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Organization List</span></a>
            </li> 
           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                FEATURED MENU
            </div>
        

                    
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Other Payment</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories</h6>
                        <a class="collapse-item" href="#">How it Works</a>
                        <a class="collapse-item" href="#">See all Campaigns</a>
              
                    </div>
                </div>
                </li>
                 <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Start a Campaign</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Main</h6>
                        <a class="collapse-item" href="">Register</a>
                        <a class="collapse-item" href="">Login</a>
                        <a class="collapse-item" href="">Forget Password</a>
                        <a class="collapse-item" href="">Other</a>
                        <a class="collapse-item" href="">Chart</a>
                    </div>
                </div>
            </li>


           
       
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hey, @auth {{auth()->user()->name}}  {{auth()->user()->lastname}}  @endauth

                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/edit-user/{{auth()->user()->id}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Donations you've Made
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                 
                    <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">My Wallet </h6> &nbsp; 
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Generate QR Code</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Send</a>
                                            <a class="dropdown-item" href="#">Request</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                               <span class="h5 mb-0 font-weight-bold text-gray-800"> &#8369; 100,000</span><sup>.00</sup>
                                </div>
                            
                        <a href="/profile" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Donation History</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- CASH IN -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              CASH IN </div>
                                              <a  href="#" data-toggle="modal" data-target="#cash-in" class="stretched-link"></a>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800"><!--Out fo School-Youth -->
                                            </div>
                                          
                                        </div>
                                        <div class="col-auto">
                                        <img src="img/cashin.png" width="50px" height="50">  <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CASH OUT MODAL -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                SEND TO</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><!--Cancer Society--></div>
                                      
                                        </div>
                                        <div class="col-auto">
                                            <img src="img/wallet.png" width="50px" height="50"> <!-- <i class="fa fa-notes-medical fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donate Modal -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <a  href="#" data-toggle="modal" data-target="#cash-in" class="stretched-link"></a>
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Donate
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><!--Indigenous People--></div>
                                                </div>
                                          
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img src="img/box.png" width="50px" height="50">     <!-- <i class="fas fa-grin-hearts fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                               <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                FUND a Project for-a Cause</div>
                                                <a  href="#" data-toggle="modal" data-target="#cash-in" class="stretched-link"></a><div class="h5 mb-0 font-weight-bold text-gray-800"><!--Disaster Response--></div>

                                        </div><div>
                                        </div>
                                        <div class="col-auto">
                                        <img src="img/funding.png" width="50px" height="50">    <!-- <i class="fas fa-moon fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <!-- <div class="col-lg-6 mb-4 bg-primary"> Hello</div> <div class="col-lg-6 mb-4 bg-primary"> Hi There </div> -->

<div class="container-fluid">
    
    <hr>
<p class="text-xs font-weight-bold text-info text-uppercase mb-6" >Top Featured Foundations</p>
 
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-info text-uppercase mb-2"> Save the Children Foundation</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in"><img class="img-foundation" src="img/children.jpg"></a>
                       
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-info text-uppercase mb-2" >Cancer Treatment and Support </p>
                    <a href="#" data-toggle="modal" data-target="#cash-in"><img class="img-foundation" src="img/cancer.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-success text-uppercase mb-2" >Plant a Million Trees In your pLace</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in"><img class="img-foundation" src="img/plant.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-warning text-uppercase mb-2" >Shelter for Street Children </p>
                    <a href="#" data-toggle="modal" data-target="#cash-in"> <img class="img-foundation" src="img/shelter.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-primary text-uppercase mb-2" >Haribon (Protect the Wildlife) </p>
                    <a href="#" data-toggle="modal" data-target="#cash-in">   <img class="img-foundation" src="img/wildlife.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-danger text-uppercase mb-2" >Save Seas in the Philippines</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in">  <img class="img-foundation" src="img/saveseas.jpg"></a>
                   
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-info text-uppercase mb-2" >Earth Foundation of Davao</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in">   <img class="img-foundation" src="img/savedavao.jpg"></a>
                        </div>
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-danger text-uppercase mb-2" >Tapang at Malasakit Foundation</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in">  <img class="img-foundation" src="img/malasakit.jpg"></a>
                        </div>
                 
                </div>
                <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-info text-uppercase mb-2" >Angat buhay, Angat Pinas</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in">   <img class="img-foundation" src="img/angat.jpg"></a>  
                      
                    </div></div>

                    <div class="item">
                    <div class="pad15">
                    <p class="text-xs font-weight-bold text-warning text-uppercase mb-2" >Disaster & Calamities</p>
                    <a href="#" data-toggle="modal" data-target="#cash-in"> <img class="img-foundation" src="img/disaster.jpg"></a>  
                      
                    </div></div>
                </div>

                
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div></div>
	
      <div class="container-fluid"><hr></div></div>
                <!-- /.container-fluid -->
            <!-- End of Main Content -->
<?php // include ("footer.php"); ?>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><font class="footer-text">Copyright &copy; CrowdFunding Box Capstone Project by Virgel  &bull; Ernan  &bull; Lu Cab</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php // include ("modals.php") ?>
     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal Cash In -->
   <div class="modal fade" id="cash-in" tabindex="-1" role="dialog" aria-labelledby="cash-in"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">YOU ARE ABOUT TO CASH IN </div>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                 <div class="modal-body">
                 <form class="image-upload" method="post" action="" enctype="multipart/form-data">
                        @csrf
            			<div class="paymentWrap">
							<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
					            <label class="btn paymentMethod active">
					            	<div class="method gcash"></div>
                                    <input type="hidden" name="uid" value="1">
					                <input type="radio" id="gcash" name="method " checked> 
					            </label>
					            <label class="btn paymentMethod">
					            	<div class="method paymaya"></div>
					                <input type="radio" id="paymaya" name="method"> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method bdo"></div>
					                <input type="radio" id="bdo" name="method">
					            </label>
					             <label class="btn paymentMethod">
				             		<div class="method palawan"></div>
					                <input type="radio" id="palawan" name="method"> 
					            </label>
					       
						</div>
						
					<div><div>
                    <div class="modal-footer">
                    <div class="input-group mb-3">
  <span class="input-group-text">Enter Amount &#8369;</span>
  <input type="text" maxlength="6" name="amount" class="form-control" aria-label="Amount (to the nearest Peso)">
  <span class="input-group-text"><sup>.00</sup></span>
</div>
Transaction ID
<input type="text" class="form-control form-control-user" id="transaction"
                                            placeholder="">

Upload Reference
<div class="input-group mb-3">

<input type="text" class="form-control form-control-user" id="transaction"
                                            placeholder="">


</div></div>

<div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Cash In</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<script>

$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
    </script>


</body>

</html>


@endsection