<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Tour</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset ('css/style2.css')}}" />

  </head>
 
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Travels</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="hoome">Home</a></li>
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
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
			@if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session::get('message')}}
                    </div>
                    @endif
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						
						<form action="/bookform/{{$packages->id}}" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						{{method_field('PUT')}}
						
							<div class="form-header">
								<h2>Package Name:{{$packages->package_name}}</h2>
								
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									
									<input type="hidden"  class="form-control" name="packages_id"value= "{{$packages->id}}">
									<input type="hidden"  class="form-control" name="id">
									<input type="hidden"  class="form-control" name="user_id">
									<input type="hidden"  class="form-control" name="package_name"value= "{{$packages->package_name}}">
									<!--<input type="hidden"  class="form-control" name="package_price"value= "{{$packages->package_price}}">-->
										<span class="form-label">From</span>
										<input class="form-control" type="date" name="from" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">To</span>
										<input class="form-control" type="date" name="to" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label"for="adults">Adults</span>
										<select class="form-control" name="adults"id="adults">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
										<span class="select-arrow" name="adults"id="adults" ></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label"for="children">Children</span>
										<select class="form-control" name="children"id="children">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow" id="children"name="children"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" name="email"placeholder="Enter your email">
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
								
								
							</div>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>