<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
   
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   
</head>

<body>
  
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                
                    
              
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                   
                    <!-- Right side toggle and nav items -->
                   
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- Search -->
                       
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                      
                       
                        <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </button>
                                </form>
                        </li>
                       
                        
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- End Topbar header -->
       
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
       
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="package"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Create Package</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="updatePackage"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Package</span>
                            </a>
                        </li>
                       
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bookingDisplay"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Booking</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="displayEnquiry"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Enquiries</span>
                            </a>
                        </li>
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       
        
        <!-- Page wrapper  -->
       
        <div class="page-wrapper" style="min-height: 250px;">
           
            <!-- Bread crumb and right sidebar toggle -->
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Booking</h4>
                    </div>
                </div>
               
            </div>
           
            
            <!-- Container fluid  -->
           
            <div class="container-fluid">
            @if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session::get('message')}}
                    </div>
                    @endif
               <div class="jumbotron">
               
               <br>
               <table class="table table-stripped table-bordered">
               <thead class="thead-dark">
               <tr>
                    <th scope="col">Booking ID </th> 
                    <th scope="col">USER ID </th> 
                    <th scope="col">Package Name </th> 
                    <th scope="col">From Date </th>  
                    <th scope="col">To Date</th>  
                    <th scope="col">Adults</th>  
                    <th scope="col">Children</th>  
                    <th scope="col">Email</th>  
                    <th scope="col">Phone</th> 
                    <th scope="col">Status</th>
                    <th>Confirm/Cancel</th>
                   
                </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                    <th >{{$booking->id}}</th>
                    <th >{{$booking->user_id}}</th> 
                    <th >{{$booking->package_name}}</th>  
                    <th >{{$booking->from }}</th>  
                    <th >{{$booking->to}}</th>  
                    <th >{{$booking->adults }}</th>  
                    <th >{{$booking->children}} </th>  
                    <th >{{$booking->email}}</th>  
                    <th >{{$booking->phone}}</th> 
                    <th >{{$booking->status}}</th>
                    
                  
                    <th><a href="/editBooking/{{$booking->id}}" class="btn btn-success">CONFIRM/CANCEL</a></th>
                 
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
               
                <!-- End PAge Content -->
                
                <!-- Right sidebar -->
             
                <!-- .right-sidebar -->
               
                <!-- End Right sidebar -->
              
            </div>
            
            <!-- End Container fluid  -->
           
        </div>
       
        <!-- End Page wrapper  -->
      
    </div>

    <!-- End Wrapper -->
    
    
</body>

</html>