<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
   
    <!-- Custom CSS -->
  
   <link href="{{ asset('css/style.min.css')}}" rel="stylesheet">
</head>

<body>
   
   
    <!-- Main wrapper - style you can find in pages.scss -->
   
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <!-- Topbar header - style you can find in pages.scss -->
        
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
                        <h4 class="page-title">Reply Enquiry</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
          
            <!-- End Bread crumb and right sidebar toggle -->
           
            <!-- Container fluid  -->
           
            <div class="container-fluid">
            
               
                <!-- Start Page Content -->
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        <form action="/updateEnquiry/{{$contacts->id}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <input type="hidden"class="form-control" name="id" id="id" value="{{$contacts->id}}">

                           

                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$contacts->email}}"  required>
                            </div>

                            <div class="form-group">
                            <label for="name">Message</label>
                            <input type="text" class="form-control" name="name" value="{{$contacts->message}}"required>
                            </div>

                            <div class="form-group">
                            <label for="reply">Reply</label>
                            <textarea type="text" class="form-control" rows="4" name="reply" placeholder="reply" required> {{$contacts->reply}}</textarea>
                            </div>

                            

                           

                            <button type="submit" class="btn btn-primary"style="padding: 5px 50px;font-size:18px;">Send</button>
                            

                            </form>
                        </div>
                    </div>
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