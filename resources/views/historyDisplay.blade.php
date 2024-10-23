<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ticket Display</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
      <li><a href="#">Contact Us</a></li>
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

  
</h2>

<body>
        <div class="container">
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
                    <th scope="col">Package Name</th>  
                    <th scope="col">From Date</th>  
                    <th scope="col">To Date</th>  
                    <th scope="col">Adults</th>  
                    <th scope="col">Children</th>  
                    <th scope="col">Email</th>  
                    <th scope="col">Phone</th> 
                    <th scope="col">Status</th>
                    <th>Cancel Booking</th>
                    <th>Pay</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                    <th >{{$booking->package_name}}</th> 
                    <th >{{$booking->from }}</th>
                    <th >{{$booking->to}}</th>  
                    <th >{{$booking->adults }}</th>  
                    <th >{{$booking->children}} </th>  
                    <th >{{$booking->email}}</th>  
                    <th >{{$booking->phone}}</th> 
                    <th >{{$booking->status}}</th>
                    
                  
                    <th><a href="/cancelBooking/{{$booking->id}}" class="btn btn-success">CANCEL</a></th>
                    <th><a href="payment/{{$booking->id}}" class="btn btn-success">PAY</a></th>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
        </div>
    </body>

</html>