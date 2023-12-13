<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Register</title>
	<link rel="shortcut icon" type="image/x-icon" href="/assets/user/img/logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/assets/user/css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand" style="margin: 10px auto; height: 90px;">
                        <a href="/">
						    <img src="/assets/user/img/LogoTravel.png" alt="logo">
                        </a>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title" style="font-weight: bolder">Đăng Ký</h4>
							<div class="card-title">
                                @include('admin.alert')
                            </div>

							<form action="/dang-ky/xu-ly-dang-ky" method="POST" class="my-login-validation form-text">
								<div class="form-group">
									<label for="fullname">Họ và tên</label>
									<input type="text" class="form-control" id="fullname" name="fname" autofocus
										value="{{ old('fname') }}" placeholder="Nhập họ tên">
								</div>

								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="name" autofocus
										value="{{ old('name') }}" placeholder="Nhập username">
								</div>

								<div class="form-group">
									<label for="mail">E-Mail</label>
									<input type="email" class="form-control" id="mail" name="email"
										value="{{ old('email') }}" placeholder="Nhập email">
								</div>

								<div class="form-group">
									<label for="phone-nb">Số điện thoại</label>
									<input type="tel" class="form-control" id="phone-nb" name="phone"
										value="{{ old('phone') }}" placeholder="Nhập số điện thoại">
								</div>

								<div class="form-group">
									<label for="pass">Mật khẩu</label>
									<input type="password" class="form-control" id="pass" name="password" data-eye
										value="{{ old('password') }}" placeholder="Nhập mật khẩu">
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Đăng ký
									</button>
								</div>
								<div class="mt-4 text-center">
									Đã có tài khoản? <a href="/dang-nhap">Đăng nhập</a>
								</div>
								<div class="mt-4 text-center">
									<a href="/">Trang chủ</a>
								</div>

								{{-- Tạo token --}}
                                @csrf
							</form>
						</div>
					</div>
					<div class="footer" style="margin: 20px 0;">
						Copyright &copy; 2023 &mdash; Bích & Diễm
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="/assets/user/js/showPass.js"></script>
</body>

</html>