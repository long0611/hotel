<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('source/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('source/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('source/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/vendor/animate/animate.css")}}">	
	<link rel="stylesheet" type="text/css" href="{{asset("source/vendor/css-hamburgers/hamburgers.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/vendor/animsition/css/animsition.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/vendor/select2/select2.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/vendor/daterangepicker/daterangepicker.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("source/css/main.css")}}">
	
</head>
<body  >
	<div   class="panel-body">
	<div  class="limiter" >
		<div style="background-image:url({{url('source/image/Background/danang.jpg')}});" class="container-login100">
			<div class="wrap-login100">
		
				<form class="login100-form validate-form" role="form" data-smk-icon="glyphicon-remove-sign" method="post" action="{{route('login1')}}">
					@csrf
					<span class="login100-form-title p-b-43">
						Đăng nhập
					</span>
				
					<div >
						@if (session('loia'))
						<div class="alert alert-danger" role="alert">
							{{session('loia')}}
						</div>
					@endif
						@if(count($errors) > 0)
							<div class="alert alert-danger">
								@foreach ($errors->all() as $err)
									{{$err}}
								@endforeach
							</div>
						@endif
						@if(Session::has('thatbai'))
							<div class="alert alert-success">{{Session::get('thatbai')}}</div>
						@endif
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email không hợp lệ" data-smk-pattern="^[a-zA-Z\s]{3,}$">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email </span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật Khẩu</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">

						<div>
							<a href="#" class="txt1">
								Quên Mật Khẩu?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Đăng Nhập
						</button>
					</div>
					
					<div class="text-center p-t-46 ">
						<span class="txt3">
							Nếu bạn chưa có tài khoản hãy <span><a href="{{route('signin')}}">Đăng ký</a></span> tại đây
						</span>
					</div>

					<div class="text-center p-t-30 p-b-20">
						<span class="txt2">
							Hoặc Đăng Nhập Bằng
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

			</div>
		</div>
	</div>
	
	<script>
		var $form = $("form"),
  $successMsg = $(".alert");
$form.find("button[type='submit']").on("click", function(e){
  e.preventDefault();
  if($form.smkValidate()){
    $successMsg.show();
  }
});
	</script>

	
	

	<script src="{{asset('source/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('source/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('source/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('source/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('source/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('source/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('source/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('source/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('source/js/main.js')}}"></script>

</body>
</html>