<?php
    session_start();
?>
<!DOCTYPE html>
<head>
<title>Quan Ly Admin Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="back-end/css/style.css" rel='stylesheet' type='text/css' />
<link href="back-end/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/back-end/css/font.css" type="text/css"/>
<link href="public/back-end/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="public/back-end/js/jquery2.0.3.min.js"></script>
<script src="https://kit.fontawesome.com/2066070c74.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Đăng Ký</h2>
		<form action="#" method="post" enctype="multipart/form-data">
			<input type="text" class="ggg" name="name" placeholder="NAME" required="">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<input type="password" class="ggg" name="repassword" placeholder="REPASSWORD" required="">
			<input type="number" class="ggg"  name="level" placeholder="LEVEL" required="">
            <input type="radio"  name="gioitinh" value="1">Nam
			<input type="radio" name="gioitinh" value="0" checked>Nữ
			<input type="file" name="image">
           
			
				<div class="clearfix"></div>
				<input type="submit" value="Đăng Ký" name="submit">
		</form>
		<p>Đăng Nhập Tại Đây.<a href="login.php">Login</a></p>
</div>
</div>


<?php
		$connect = mysqli_connect("localhost", "root", "", "thi_php");
		mysqli_set_charset($connect, 'UTF8');
		
	?>
		<?php
			$msg = "";
            if(isset($_POST['submit']) && $_POST['name'] !=''&& $_POST['password']
             !=''&& $_POST['repassword'] !=''&& $_POST['email'] !=''&& $_POST['level'] !=''&& $_POST['gioitinh'] !='' ){
				
				$name = $_POST['name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $level = $_POST['level'];
                $gioitinh = $_POST['gioitinh'];
				$repassword = $_POST['repassword'];
				///up ảnh
				$image = $_FILES['image']['name'];
				$target = "web_images/".basename($image);
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
				{
					$msg = "Upload ảnh thành công";
				}else
				{
					$msg = "Lỗi khi upload ảnh";
				}
				///up ảnh
				$sql = "SELECT * FROM user WHERE name='$name'";

				$query = mysqli_query($connect,$sql);

				$password = md5($password);

				if(mysqli_num_rows($query) >0 ){

                    echo "<script>alert('Tên tài khoản đã tồn tại, vui lòng nhập tên khác !');</script>";
				}
				else{
				$sql = "INSERT INTO user(name,password,email,level,gioitinh,image) 
				VALUES('$name','$password','$email','$level','$gioitinh','$image')";
				
                mysqli_query($connect,$sql);
                echo mysqli_error($connect);
				echo "<script language='javascript'>alert('Đăng Ký Thành Công')</script>";;
				}
			}
		?>
<script src="back-end/js/bootstrap.js"></script>
<script src="back-end/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="back-end/js/scripts.js"></script>
<script src="back-end/js/jquery.slimscroll.js"></script>
<script src="back-end/js/jquery.nicescroll.js"></script>
<script src="back-end/js/jquery.scrollTo.js"></script>
</body>
</html>



