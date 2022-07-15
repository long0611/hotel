<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Ký</title>
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
<body style="background-color: #666666;">
	
	<div class="limiter" style="background-image:url({{url('source/image/Background/danang.jpg')}});">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="{{route('signin')}}">
					@csrf
					<span class="login100-form-title p-b-43">
						Đăng Ký
					</span>
					
					<div >
						@if(count($errors) > 0)
							<div class="alert alert-danger">
								@foreach ($errors->all() as $err)
									{{$err}}
								@endforeach
							</div>
						@endif
						@if(Session::has('thanhcong'))
							<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
						@endif
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Họ tên không được để trống">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Họ Và Tên</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="text" name="gender">
						<span class="focus-input100"></span>
						<span class="label-input100">Giới Tính</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="text" name="sdt">
						<span class="focus-input100"></span>
						<span class="label-input100">Số Điện Thoại</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Email không hợp lệ">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email </span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="text" name="address">
						<span class="focus-input100"></span>
						<span class="label-input100">Địa Chỉ</span>
                    </div>
                    
                   
					
					
					<div class="wrap-input100 validate-input" data-validate="Mật khẩu không được để trống">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật Khẩu</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Mật khẩu không được để trống">
						<input class="input100" type="password" name="passconfirm">
						<span class="focus-input100"></span>
						<span class="label-input100">Nhập Lại Mật Khẩu</span>
					</div>

					
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" >
							Đăng Ký
						</button>
					</div>
					<script>
						function myFunction() {
  alert("Đăng Ký Thành Công Chuyển Đến Trang Đăng Nhập");
}
					</script>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2" style="font-size: 18px;">
							<a href="{{route('login1')}}"> Đăng nhập</a>
						</span>
					</div>

					
				</form>
                <div class="login100-more" style="background-image:url({{url('source/image/images/bg-01.jpg')}});">
				</div>
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