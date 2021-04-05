@extends('client.layout.master')

@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h1>Đăng nhập</h1>
						<form action="#">
							<input type="text" placeholder="Username" />
							<input type="email" placeholder="Email Address" />
							<input type="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default"> Đăng Nhập </button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h1>Đăng ký</h1>
						
						<form action="signup-form-submit" method="POST">
						@csrf
							<input type="username" name="username" placeholder="Username"/>
							<input type="email" name="email"placeholder="Email Address"/>
							<input type="password" name="password" placeholder="Password"/>
							<input type="phone" name="phone" placeholder="Số điện thoại"/>
							
							<textarea name="address" id="" class="form-control" rows="8" required="required" placeholder="Địa chỉ..."></textarea> <br>
							
							<button type="submit" class="btn btn-default">Đăng Ký </button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@stop