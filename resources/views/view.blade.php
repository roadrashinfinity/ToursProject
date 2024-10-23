<!DOCTYPE HTML>
<html>
<head>
<title>Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/style2.css" />


</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">Travels</a>
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

  <link type="text/css" rel="stylesheet" href="css/style3.css" />
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

</h2>

<body>
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h1>Package List</h1>

					

@foreach($packages as $item)

			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="{{ asset('uploads/package/' . $item['package_image']) }} " class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name:{{$item->package_name}}</h4>
					<h6>Package Type :{{$item->package_type}}</h6>
					<p><b>Package Location :</b> {{$item->package_location}}</p>
					<p><b>Features</b> {{$item->package_features}}</p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Rs. {{$item->package_price}}</h5>
          <a href="{{$item['package_link']}}" class="view"><button class="btn btn-primary"> Take Tour</button></a>
					 <a href="detail/{{$item['id']}}" class="view"><button class="btn btn-primary"> Detail</button></a>
           
				</div>
				<div class="clearfix"></div>
                @endforeach
			</div>


			
		
		
		</div>
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
