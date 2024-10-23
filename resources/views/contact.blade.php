<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
  
</h2>
<style>
.form-input{
    margin-bottom:30px;
     height:50px;
}

</style>
<body>
<div class="container">
        <div class="row">
        @if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session::get('message')}}
                    </div>
                    @endif
            <div class="col-lg-6 m-auto" style='margin-left: 24%;'>
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                      
                    </div>
                    <div class="card-body">
                        <form action="submit" method="post" >
                        {{csrf_field()}}
                        {{method_field('POST')}}
                        <input type="hidden"  class="form-control" name="id">

									      <input type="hidden"  class="form-control" name="user_id">
                            
                            <input type="text" name="name" placeholder="Name" class="form-control mb-2 form-input" required>
                           
                        
                          <input type="email" name="email" placeholder="Email" class="form-control mb-2 form-input" required>
                        
                           
                            <input type="text" name="subject" placeholder="Subject" class="form-control mb-2 form-input" required >
                           
                        
                         <textarea name="message" class="form-control mb-3 form-input" placeholder="Write The Message" required  style="height: 100px;"></textarea>
                       
                           
                            <button class="btn btn-success" name="submit" style="margin-left:41%; height:40px;"> Submit </button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</body>

</html>

                   


           
            
    
    
        


</html>
