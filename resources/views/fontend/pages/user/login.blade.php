<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<title>Đăng nhập tài khoản</title>
	<style type="text/css">
		body{
			background: url('public/fontend/img/bg-img/bg02.jpg') no-repeat;
			background-size: cover;
		}
		.main-section{
			margin: 0 auto;
			margin-top: 120px;
			padding: 0;
		}
		.modal-content{
			background-color: #434e5a;
			color: white;
		}
		.form-group input{
			height: 41px;
			font-size: 18px;
			border-radius: 5px;
			letter-spacing: 2px;
			padding-left: 54px;
		}
		.form-group::before{
			font-family: 'Font Awesome\ 5 Free';
			content: "\f007";
			position: absolute;
			font-size: 22px;
			left: 28px;
			padding-top:4px;
			color: #555e60;
		}
		.form-group:last-of-type::before{
			content: "\f023";
		}

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="modal-dialog text-center">
			<div class="col-sm-8 main-section">
				<div class="modal-content">
					<form action="{{route('post-login-user')}}" method="post" class="col-12">
							<h2>Đăng nhập</h2>
							@csrf
							<br/>
						<div class="form-group">
							<!-- <label>Nhập vào tên đăng nhập:</label> -->
							
							<input class="form-control" type="text" name="username" placeholder="Tên đăng nhập">
							
						</div>
						<div class="form-group">
							<!-- <label>Nhập vào mật khẩu:</label> -->
							<input class="form-control" type="password" name="password" placeholder="Mật khẩu">
							
						</div>
						
							<button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt">Đăng nhập</i></button>
							
							
						
					</form>
					<br/>
					<div class="col-12 forgot">
						<a href="">Quên mật khẩu?</a>
					</div>

		
				</div>
			</div>	
		</div>
	</div>

</body>
</html>