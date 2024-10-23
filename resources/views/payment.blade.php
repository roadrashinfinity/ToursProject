<!DOCTYPE html>
<html lang="en" >

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Payment card checkout</title>
 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style_pay.css')}}">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

  <div class="tips">
Payment card : VISA, MasterCard, DinersClub, American Express, Discover, dankort
</div>
@if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
@endif
    
<form action="/payform/{{$bookings->id}}"method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="container">

  <div class="col1">  
    <div style="background-color: white;" class="card">
      <div class="front">
        <div class="type">
          <img class="bankid"/>
        </div>
        <span class="chip"></span>
        <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
        <div class="date"><span class="date_value">MM / YYYY</span></div>
        <span class="fullname">Full Name</span>
      </div>
      <div class="back">
        <div class="magnetic"></div>
        <div class="bar"></div>
        <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
        <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
      </div>
    </div>
  </div>
  <div class="col2">
  <input type="hidden"  class="form-control" name="booking_id"value= "{{$bookings->id}}">
									<input type="hidden"  class="form-control" name="id">
									<input type="hidden"  class="form-control" name="user_id">
                  <input type="hidden"  class="form-control" name="package_price"value= "{{$bookings->package_price}}">
                  <h2>Package Price:{{$bookings->package_price}}</h2>
    <label>Card Number</label>
    <input name="card_no" class="number" type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <label>Cardholder name</label>
    <input name="cardholder_name" class="inputname" type="text" placeholder=""/>
    <label>Expiry date</label>
    <input class="expire" name="expiry_date" type="text" placeholder="MM / YYYY"/>
    <label>Security Number</label>
    <input class="ccv" name="cvv" type="text" placeholder="CVV" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <button type="submit" name="pay_btn" style="margin: 40px 0 0 -180px" class="buy">Pay Now</button>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>

  

    <script  src="{{ asset('js/index.js')}}"></script>
   

</form>

</body>

</html>
