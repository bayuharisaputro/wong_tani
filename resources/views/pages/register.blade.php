<!DOCTYPE>
<html lang="en">
<head>
	<title>Daftar</title>
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
<style>
/* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
@font-face {
font-family: 'Open Sans';
font-style: normal;
font-weight: 400;
src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
}
.setting {
background: #fff;
margin: 0 auto 3px;
padding: 12px;
width: 300px;
}
.setting h2 {
color: #999;
font-size: 14px;
font-weight: 400;
margin: 0 0 6px;
line-height: 24px;
}
.setting a[data-action] {
cursor: pointer;
color: #555;
font-size: 14px;
line-height: 24px;
transition: color 0.2s;
}
.setting a[data-action] i {
width: 1.25em;
text-align: center;
}
.setting a[data-action]:hover {
color: #f80;
}
.setting a[data-action].disabled {
opacity: 0.35;
cursor: default;
}
.setting a[data-action].disabled:hover {
color: #555;
}
.image_picker .settings_wrap {
overflow: hidden;
position: relative;
}
.image_picker .settings_wrap .drop_target,
.image_picker .settings_wrap .settings_actions {
float: left;
}
.image_picker .settings_wrap .drop_target {
margin-right: 18px;
}
.image_picker .settings_wrap .settings_actions {
margin-top: 12px;
}
.settings_actions.vertical a {
display: block;
}
.drop_target {
position: relative;
cursor: pointer;
background: hsl(0, 0%, 90%);
border-top: 1px solid hsl(0, 0%, 80%);
border-radius: 4px;
width: 72px;
height: 72px;
padding: 4px 6px 6px;
transition: all 0.2s;
}
.drop_target input[type="file"] {
visibility: hidden;
}
.drop_target:before {
content: '\f0ee';
font-family: FontAwesome;
position: absolute;
display: block;
width: 60px;
line-height: 60px;
text-align: center;
font-size: 32px;
color: rgba(0, 0, 0, 0.3);
transition: color 0.2s;
}
.drop_target:hover,
.drop_target.dropping {
background: #f80;
border-top-color: #cc6d00;
}
.drop_target:hover:before,
.drop_target.dropping:before {
color: rgba(0, 0, 0, 0.6);
}
.drop_target .image_preview {
width: 100%;
height: 100%;
background: no-repeat center;
background-size: contain;
position: relative;
z-index: 2;
}
.image_details {
width: 192px;
padding: 4px;
background: hsl(0, 0%, 90%);
border-radius: 4px;
position: absolute;
top: 0;
left: 84px;
z-index: 5;
opacity: 0;
pointer-events: none;
transition: opacity 0.4s;
}
.dropped ~ .image_details {
opacity: 1;
pointer-events: all;
}
.image_details:before {
content: '';
display: block;
width: 0;
height: 0;
border: 6px solid transparent;
border-right-color: hsl(0, 0%, 90%);
position: absolute;
left: -12px;
top: 10px;
}
.image_details .input_line {
display: block;
overflow: hidden;
margin-bottom: 4px;
}
.image_details .input_line:last-of-type {
margin-bottom: 0;
}
.image_details .input_line span,
.image_details .input_line input {
float: left;
line-height: 24px;
}
.image_details .input_line span {
font-size: 12px;
color: #666;
width: 20%;
}
.image_details .input_line input[type="text"] {
width: 100%;
color: #444444;
appearance: none;
border: 1px solid hsl(0, 0%, 90%);
border-radius: 3px;
background: #fff;
height: 24px;
line-height: 18px;
padding: 3px 5px;
font-size: 14px;
transition: border 0.2s;
}
.image_details .input_line input[type="text"]:hover,
.image_details .input_line input[type="text"]:focus {
outline: 0;
border: 1px solid #f80;
}
.image_details .input_line input[type="text"]::-webkit-input-placeholder {
font-size: 14px;
color: #999;
}
.image_details a.confirm {
position: absolute;
right: -12px;
top: 50%;
margin-top: -12px;
display: block;
width: 21px;
height: 21px;
border-radius: 100%;
background: #eee;
line-height: 23px;
text-align: center;
font-size: 16px;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="{{url('register')}}" enctype="multipart/form-data">
        @csrf
					<span class="login100-form-title p-b-43">
						Daftar
					</span>
					@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

					<div class="wrap-input100 validate-input" id="nama">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Asli (Lengkap)</span>
					</div>


					<div class="wrap-input100 validate-input" id="alamat">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">Alamat</span>
					</div>

					<div class="wrap-input100 validate-input" id="nomer-telp">
						<input class="input100" type="text" name="no_telp">
						<span class="focus-input100"></span>
						<span class="label-input100">No. Telp</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz" id="amail">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" id="nomor-ktp">
						<input class="input100" type="text" name="no_ktp">
						<span class="focus-input100"></span>
						<span class="label-input100">No. KTP</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required" id="password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required" id="password-conf">
						<input class="input100" type="password" name="password-conf">
						<span class="focus-input100"></span>
						<span class="label-input100">Ketik Ulang Password</span>
					</div>

					<div class="setting"></div>
					<div class="setting image_picker" id="unggah-foto">
					  <h2>Unggah Foto</h2>
					  <div class="settings_wrap">
					    <label class="drop_target">
					      <div class="image_preview"></div>
					      <input id="inputFile" name="filename" type="file"/>
					    </label>
					    <div class="settings_actions vertical"><a data-action="choose_from_uploaded"><i class="fa fa-picture-o"></i> Pilih dari direktori file</a><a class="disabled" data-action="remove_current_image"><i class="fa fa-ban"></i> Hapus foto</a></div>
					    <div class="image_details">
					      <label class="input_line image_title">
					        <input type="text" placeholder="Title"/>
					      </label>
					      <!--label.input_line.image_alt//input(type='text' placeholder='Alternative Text')
					      -->
					      <!--a.confirm(data-action='confirm_image_details')//i.fa.fa-check-circle
					      -->
					    </div>
					  </div>
					</div>
					<div class="setting"></div>
					  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


					<div class="wrap-input100 validate-input" id="nomor-hp">
						<input class="input100" type="text" name="no_hp" id="input-hp" onkeyup="nohp()" value="+62">
						<span class="focus-input100"></span>
						<span class="label-input100" id="label-hp" >No. HP</span>
					</div>

					<div class="container-login100-form-btn" id="btn-kirim" style="display: none">
						<button type="button" class="login100-form-btn" id="btn-kirim2">
							Kirim Kode Verifikasi
						</button>
					</div>
					<div style="height: 10px">

					</div>
					<div class="wrap-input100 validate-input" style="display: none" id="div-input-kode">
						<input class="input100" type="text" name="" id="input-kode" onkeyup="" value="">
						<span class="focus-input100"></span>
						<span class="label-input100" id="label-hp" >Kode Verifikasi</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" id="btn-konfirm" onclick="myFunction()" style="display: none">
							Konfirmasi Kode Verifikasi
						</button>
					</div>
					<div style="height: 10px">

					</div>
					<div class="container-login100-form-btn" >
						<button type="submit" class="login100-form-btn" id="daftar-btn" style="pointer-events: none;">
							Daftar
						</button>
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
		<script>
		var inputhp = document.getElementById('input-hp');
		var btnkirimkode = document.getElementById('btn-kirim');
		var divinputkode = document.getElementById('div-input-kode');
		var inputkode = document.getElementById('input-kode');
		var btnkonfirmasikode = document.getElementById('btn-konfirm');
		var btndaftar = document.getElementById('daftar-btn');

		var nohp = function(){
			if(inputhp.value!=''){
					btnkirimkode.style.display = '';
			}else{
					btnkirimkode.style.display = 'none';
			}
		}
		</script>
		<script src="https://www.gstatic.com/firebasejs/5.8.5/firebase-app.js"></script>
		<!-- Add additional services that you want to use -->
		<script src="https://www.gstatic.com/firebasejs/5.8.5/firebase-auth.js"></script>

		<script src="https://www.gstatic.com/firebasejs/5.8.5/firebase.js"></script>
		<script>
		// Initialize Firebase
		var config = {
			apiKey: "AIzaSyDfMRU_nHwQD5Zy98408-CilxnsWibeYFI",
			authDomain: "wongtani-dddaa.firebaseapp.com",
			databaseURL: "https://wongtani-dddaa.firebaseio.com",
			projectId: "wongtani-dddaa",
			storageBucket: "wongtani-dddaa.appspot.com",
			messagingSenderId: "821988503176"
		};
		firebase.initializeApp(config);

		//invisiblerecaptchastart
		window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('btn-kirim2', {
      'size': 'invisible',
      'callback': function(response) {
				console.log("check 1");
        // reCAPTCHA solved, allow signInWithPhoneNumber.
        onSignInSubmit();
      }
    });
		recaptchaVerifier.render().then(function(widgetId) {
    window.recaptchaWidgetId = widgetId;
    });
		//invisiblerecaptchaendddsss

		function onSignInSubmit() {
			var phoneNumber = inputhp.value;
			var appVerifier = window.recaptchaVerifier;
			firebase
			.auth()
			.signInWithPhoneNumber(phoneNumber, appVerifier)
			.then(function (confirmationResult) {
				// SMS sent. Prompt user to type the code from the message, then sign the
				// user in with confirmationResult.confirm(code).
				window.confirmationResult = confirmationResult;
				btnkirimkode.style.display = 'none';
				divinputkode.style.display = '';
				btnkonfirmasikode.style.display = '';

			}).catch(function (error) {
				// Error; SMS not sent
				console.error('Error during signInWithPhoneNumber', error);
				window.alert('Error during signInWithPhoneNumber:\n\n'
				+ error.code + '\n\n' + error.message);
			});
		}

		var myFunction = function() {
			window.confirmationResult.confirm(document.getElementById("input-kode").value)
			.then(function(result) {
				window.alert('Konfirmasi Kode Berhasil');
				console.log("success");
				// window.location.href = "/profile/"+inputhp.value+"/edit";
				btndaftar.style.pointerEvents = '';
			}, function(error) {
				window.alert('Terjadi Kesalahan :\n\n'
				+ error.code + '\n\n' + error.message);
				console.log(error);
			});
		};
		</script>


</body>
</html>
