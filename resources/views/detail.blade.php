<!DOCTYPE html>
<html lang="en">
<head>
  <title>Package Details</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/style2.css" />
  
 
  </head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Travels</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li class="active2"><a href="view">Tour Packages</a></li>
      <li class="active3"><a href="historyDisplay">Travel History</a></li>
      <li class="active4"><a href="viewReply">View Reply</a></li>
      <li><a href="contact">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @guest
      <li><a href="newReg"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="newlog"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @else
                  <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
    </ul>
  </div>
</nav>
</body>
<h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link type="text/css" rel="stylesheet" href="{{ asset('css/style3.css')}}" />
  <link href="{{ asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
 
</h2>

<body>

  
<div class="selectroom">
        <div class="container">	
        <h1>Package Details</h1>
    
        
        <div class="selectroom_top">
        
            
                <div class="col-md-4 selectroom_left  ">
                     <img src="{{ asset('uploads/package/' . $packages['package_image']) }}" class="img-responsive" alt="image not found">
                
                   
                </div>
                <div class="col-md-8 selectroom_right ">
                   <h2> {{$packages['package_name']}}</h2><br>
                    
                    <p ><b>Package Type:</b> {{$packages['package_type']}}</p>
                    <p><b> Location:</b> {{$packages['package_location']}}</p>
                    <p ><b>Package Features:</b> {{$packages['package_features']}}</p>	 
                   <p> <b>Package Price:</b> Rs. {{$packages['package_price']}}</p>
					          
                    <div class="clearfix"></div>
                    
               
                
                
                
                <h3 ><b>Package Details:</b></h3>
                <p style="padding-top: 1%">
                    {{$packages['package_details']}}

                    </p>	
                    <div class="clearfix"></div> 
                    
                    </div>
                  
            
                    
                    <a href="/bookTour/{{$packages['id']}}" class="bookTour"><button   class="btn-primary btn" style="margin-left: 45%;margin-top: 4%; font-size: 20px;">Book</button></a>
                   
                    

        </div>

          </div>         
   
    
    <!-- Footer -->
<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Travels.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
 

</body>

</html>
