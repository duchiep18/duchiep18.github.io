<!DOCTYPE html>
<html lang="en">
<head>
	<title>XuêPC Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="/frontend/Login_v4/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form " action="{{route('register.submit')}}" method="POST">
					@csrf
					<span class="login100-form-title p-b-49">
						Đăng Ký
					</span>
					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Email:</span>
						<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Nhập vào email">
						<span class="focus-input100" data-symbol="&#9993"></span>
					</div>
						@error('email')
							<p class="text-danger">{{$message}}</p>	
						@enderror	
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username là trường bắt buộc">
						<span class="label-input100">Tên đăng nhập:</span>
						<input class="input100 " type="text" name="username" value="{{ old('username') }}" placeholder="Nhập vào username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

						@error('username')
							<p class="text-danger">{{$message}}</p>	
						@enderror	
			
					<div class="wrap-input100 validate-input" data-validate="Password là trường bắt buộc">
						<span class="label-input100">Password:</span>
						<input class="input100" type="password" name="password" value="{{ old('password') }}" placeholder="Nhập vào password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
						@error('password')
							<p class="text-danger">{{$message}}</p>	
						@enderror	
					<br>
                    <div class="validate-input" data-validate="">
						<span class="label-input100">Địa chỉ:</span>
                        <textarea class="form-control" name="address" id="diachi" cols="18" rows="9"> {{ old('address') }}</textarea>
					</div>
						@error('address')
							<p class="text-danger">{{$message}}</p>	
						@enderror	
					<br>
                
                    <div class="wrap-input100 validate-input" data-validate="Số điện thoại là trường bắt buộc">
						<span class="label-input100">Số điện thoại:</span>
						<input class="input100" type="number" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Nhập vào số điện thoại">
						<span class="focus-input100" data-symbol="&#xf2be;"></span>
					</div>
						@error('phonenumber')
							<p class="text-danger">{{$message}}</p>	
						@enderror	
					<br>

                    <div class=" validate-input" data-validate="">
						<span class="label-input100">Giới tính:</span>
                        	<div class="form-check" style="padding-left: 40px">
								<input class="form-check-input" type="radio" name="gender" {{ old('gender') == 1? 'checked':'' }} id="exampleRadios1" value="1" checked>
								<label class="form-check-label" for="exampleRadios1">
									Nam
								</label>
                          	</div>
                          	<div class="form-check" style="padding-left: 40px">
								<input class="form-check-input" type="radio" name="gender" {{ old('gender') == 2? 'checked':'' }} id="exampleRadios1" value="2" checked>
								<label class="form-check-label" for="exampleRadios1">
									Nữ
								</label>
							</div>
					</div>
						@error('gender')
							<p class="text-danger">{{$message}}</p>	
						@enderror	
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Đăng Ký
							</button>
						</div>
					</div>

					{{-- <div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Hoặc đăng nhập bằng
						</span>
					</div> --}}

					{{-- <div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div> --}}

				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="/frontend/Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="/frontend/Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/Login_v4/js/main.js"></script>

</body>
</html>