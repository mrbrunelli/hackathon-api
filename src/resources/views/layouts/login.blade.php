<!DOCTYPE html>
<html lang="en">
<head>
	<title>Painel Administrativo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  width: 100%;
  margin: 2em;
  
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="{{ route('auth')}}">

					@csrf
					<span class="login100-form-title p-b-43">
						Painel Administrativo
					</span>

					<div class="wrap-input100 rs1 validate-input" data-validate = "E-mail obrigatório">
						<input class="input100" type="text" name="login" value="{{ old('login')}}">
						<span class="label-input100">Login</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="A senha é obrigatória">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Senha</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>
					@if(Session::get('fail'))
					<span class="alert">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
					{{ Session::get('fail') }}
					</span>
					@endif
				</form>
			</div>
		</div>
	</div>	


<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/js/main.js')}}"></script>
    	
</body>
</html>