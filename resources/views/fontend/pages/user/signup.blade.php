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
	<title>Đăng ký tài khoản</title>
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
			/*padding-left: 54px;*/
		}
		/*.form-group::before{
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
		}*/

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="modal-dialog text-center">
			<div class="col-sm-8 main-section">
				<div class="modal-content">
					<form class="col-12" method="post" action="{{route('post-signup-user')}}">
						@csrf
							<h2>Đăng Ký Tài Khoản</h2>
							<br/>
						<div class="form-group">
							<label>Nhập vào email:</label>
							
							<input class="form-control" type="email" name="username" placeholder="Email người dùng" required="required">
							
						</div>
						<label>Nhập vào tên tài khoản:</label>
						<div class="form-group">
							<!-- <label>Nhập vào mật khẩu:</label> -->
							<input class="form-control" type="text" name="name" placeholder="Tên người dùng" required="required">
							
						</div>
						<div class="form-group">
							<label>Nhập vào mật khẩu:</label>
							<input class="form-control" id="pass" type="password" name="password" placeholder="Mật khẩu" required="required">
							
						</div>
						<label>Nhập lại mật khẩu:</label>
						<div class="form-group">
							<!-- <label>Nhập vào mật khẩu:</label> -->
							<input class="form-control" id="repass" type="password" name="repassword" placeholder="Nhập lại mật khẩu" required="required">
							
						</div>
						<div id="chesspass" class="alert alert-danger" role="alert">
							Mật khẩu không khớp, mời nhập lại!
						</div>
						<label>Nhập vào ngày sinh:</label>
						<div class="form-group">
							<!-- <label>Nhập vào mật khẩu:</label> -->
							<input class="form-control" type="date" name="birthday" placeholder="Ngày tháng năm sinh" required="required">
							
						</div>
						
						<label>Chọn nơi sinh sống/công tác:</label>
						<div class="form-group">	
							<select class="custom-select" id="provice" name="address" >

							</select>
							
						</div>
						
						
						
							<button id="post-signup" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt">Đăng Ký</i></button>
							
							
						
					</form>
					
					

		
				</div>
			</div>	
		</div>
	</div>
<script type="text/javascript">
	
	var list = ['Hà Nội', 'Huế','Đà Nẵng', 'Tp.HCM', 'Khánh Hòa', 'Bắc Ninh', 'Cần Thơ', 'Đồng Nai', 'Bình Định','Quảng Nam','Quảng Ngãi', 'Cao Bằng', 'Nam Định', 'Quảng Ninh', 'Long An', 'Phú Yên', 'Quảng Trị', 'Quảng Bình','Nghệ An', 'Hà Tĩnh','Ninh Bình','Thái Bình','Hải Dương','Hưng Yên','Hà Nam','Phú Thọ','Yên Bái','Thái Nguyên','Tuyên Quang','An Giang','Hậu Giang','Kiên Giang','Tiền Giang','Lạng Sơn','Lào Cai','Hà Giang','Hòa Bình','Sơn La','Kom Tum','Gia Lai','Đăk Lăk','Tây Ninh','Vũng Tàu','Ninh Thuận','Bình Thuận','Bạc Liêu','Đồng Tháp','Bến Tre','Sóc Trăng','Lâm Đồng','Đắc Nông','Hải Phòng','Bình Dương','Điện Biên','Thanh Hóa','Vĩnh Long','Trà Vinh','Lai Châu','Bắc Giang','Bình Phước',''];
	
	var listoption = '';
	for(var i = 0; i<list.length;i++){
		listoption += '<option value = "'+list[i]+'">'+list[i]+'</option>';
	} 
	
	
	var c = document.getElementById("provice");
	
	c.innerHTML=listoption;
	$("#chesspass").hide();
	$("#post-signup").on('click',function(){
		var pass = $("#pass").val();
		var repass = $("#repass").val();
		if(repass != pass){
			$("#chesspass").show();
			$("#repass").val("");
		}
		else{
			$("#chesspass").hide();
		}

	});
	
</script>
</body>
</html>