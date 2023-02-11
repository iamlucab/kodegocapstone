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
        <link rel="stylesheet" type="text/css" href="{{asset('./css/cap-user.css') }}">
        
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

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
   USER MENU
    </div>
                <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>My Profile</span></a>
                 </li> 
                 <li class="nav-item">
                <a class="nav-link" href="/edit-user/{{auth()->user()->id}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Edit Profile</span></a>
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
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li><a  class="dropdown-item" href="/logout"> Log out </a>
                   

                    </ul>

                </nav>
                <!-- End of Topbar -->
                

            
                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <!-- <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{auth()->user()->name}}  {{auth()->user()->lastname}} </span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div> -->
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{route('edit-save-user')}}" method="POST">
                <input type="hidden" name="id" value="{{$u->id}}">
                <input type="hidden" name="username" value="{{$u->email}}">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"  autocomplete="off"  name="name" value="{{$u->name}}"></div>
                 <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="lastname" value="{{$u->lastname}}"></div> 
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" autocomplete="off"  name="mobile" value="{{$u->mobile}}"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" autocomplete="off"  name="email" value="{{$u->email}}"></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" autocomplete="off" name="address" value="{{$u->address}}"></div>
                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" name="bday" value="{{$u->bday}}" /></div>

                </div>
                <div class="row mt-3">
                 </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" onclick="window.location.href='/edit-user/{{auth()->user()->id}}';">Save Data</button></div>
                {{ csrf_field() }}
</form>

               </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Donations you've made</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Donate More</span></div><br>

                <div class="col-md-12"><label class="labels">Transaction</label><br>
    <small>         1/23/23/ - Donate to Kidney Center <br>
                    1/25/23/ - Donate to Phil Eagle <br>
                    1/25/23/ - Donate to Gulf Saver <br>
                    1/25/23/ - Donate to Childrens Foundation <br>
                    1/25/23/ - Bantay Bata<br>
</small>
            </div>
            </div>
        </div>


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
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/js/sb-admin-2.min.js')}}"></script>
    
    

<script>



</body>

</html>


@endsection