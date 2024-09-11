<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>{{ $title }}</title>
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
					<div class="brand">
                        <a href="/">
						    <img src="/assets/user/img/LogoTravel.png" alt="logo">
                        </a>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title" style="font-weight: bolder">Đăng Nhập</h4>
                            <div class="card-title">
                                @include('admin.alert')
                            </div>
                            
							<form action="/dang-nhap/xu-ly-dang-nhap" method="POST" class="my-login-validation form-text">
								<div class="form-group">
									<label for="email">E-Mail: </label>
									<input id="email" type="email" class="form-control" name="email" autofocus placeholder="Nhập email">
								</div>

								<div class="form-group">
									<label for="password">Mật khẩu: </label>
									<input id="password" type="password" class="form-control" name="password" data-eye 
										placeholder="Nhập mật khẩu">
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Đăng nhập
									</button>
									<a href="{{ url('auth/google') }}" class="btn login-with-google-btn" >
										Đăng nhập với Google
									</a>
								</div>
								<div class="mt-4 text-center">
									Bạn chưa có tài khoản? <a href="/dang-ky">Tạo tài khoản</a>
								</div>
                                <div class="mt-4 text-center">
									<a href="/">Trang chủ</a>
								</div>

								{{-- Tạo token --}}
                                @csrf
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2023 &mdash; Bich & Diem
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="/assets/user/js/showPass.js"></script>
</body>

</html>