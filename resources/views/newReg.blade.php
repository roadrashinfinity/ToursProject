<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('register') }}">
				@csrf

                <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" placeholder="name" id="name" type="text" name="name" :value="old('email')" required autofocus >
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" placeholder="email" id="email" type="email" name="email" :value="old('email')" required autofocus >
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password" class="block mt-1 w-full" name="password"
                                required autocomplete="current-password" type="password" placeholder="password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password_confirmation" class="block mt-1 w-full" name="password_confirmation"
                                required autocomplete="current-password" type="password" placeholder="Confirm password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <label for ="role_id" value"{{ __('Register as:') }}"/>
                        <select name="role_id">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        </select>
						
					</div>
					<div class="form-group">
					<div class="flex items-center justify-end mt-4">
               			 <a class="underline text-sm text-gray-600 hover:text-gray-900" href="newlog">
                        {{ __('Already registered??') }}
                    	</a>
           				<button type="submit" value="register" class="btn float-right login_btn">  {{ __('Register') }} </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>