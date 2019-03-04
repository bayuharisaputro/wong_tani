<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login-register/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-register/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<form class="login100-form validate-form" method="post" action="{{url('login')}}" enctype="multipart/form-data">
        		@csrf
					<span class="login100-form-title p-b-43">
						Masuk
					</span>
						@if (\Session::has('success'))
      						<div class="alert alert-success">
       		 					<p>{{ \Session::get('success') }}</p>
      					</div><br />
    	 				@endif
						 @if (\Session::has('failed'))
      						<div class="alert alert-danger">
       		 					<p>{{ \Session::get('failed') }}</p>
      					</div><br />
    	 				@endif
					<div class="wrap-input100 validate-input" id="nomortelp">
						<input class="input100" type="text" name="no_telp">
						<span class="focus-input100"></span>
						<span class="label-input100">No. Telp</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required" id="password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingatkan saya
							</label>
						</div>

						<div id="lupa-password">
							<a href="#" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn" id="masuk-btn">
						<button type="submit" class="login100-form-btn">
							Masuk
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20" id="link-register">
						<a class="txt2" href="register">
							Belum punya akun ?
							<a href="register"></a>
						</a>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							atau daftar menggunakan
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('login-register/images/bg2.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="login-register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/bootstrap/js/popper.js"></script>
	<script src="login-register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login-register/js/main.js"></script>

</body>
</html>
