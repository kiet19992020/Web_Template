<?php
$page_title = 'Đăng Ký';
include ('includes/header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style> 
.to{
    display: flex;
    
    justify-content: center;
    padding-top: 30px;
}
.form {
    border: 1px solid #80808000;
    height: 450px;
    width: 320px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px #66CDAA;
    background-color: white;
	
}
h2 {
    margin-top: 40px;
    margin-bottom: 30px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}
 
label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-bottom: 20px;
    outline-style: none;
}

 
input#submit {
    padding: 7px;
    width: 23%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
	margin-right: 80px;
    
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
.content_rg{
    background-color: black;
    background-image: url(web_images/bg2.jpg);
    background-size: cover;
 
}

</style>
<body>
    <div class="content_rg">
    <?php
		$connect = mysqli_connect("localhost", "root", "", "thi_php");
		mysqli_set_charset($connect, 'UTF8');
	?>


		<div class="to">
            <form action="" class="form" method="POST">
			<h2 style="color:#FF0000;">Đăng ký</h2>
			<div>
			Email<input type="email" name="email">
             
			 Tài Khoản <input type="text" name="name">    

		  Mật Khẩu <input type="password" name="password">
		  Nhập Lại <input type="password" name="repassword">
              <input type="radio"  name="gioitinh" value="1">Nam
			<input type="radio" name="gioitinh" value="0">Nữ
			</div>
			<input id="submit" type="submit" class="btn btn-info info" name="submit" value="Đăng Ký"></br>
			<input style="margin-left:175px" id="submit" type="reset" class="btn btn-dark dark" name="submit" value="Hủy">
			</form> 
			
            </div>          
            <?php include ('includes/footer.html'); ?>      
		</div>

		<?php
            if(isset($_POST['submit']) && $_POST['name'] !=''&& $_POST['password'] !=''&&
             $_POST['repassword'] !=''&& $_POST['email'] !=''&& $_POST['gioitinh'] !='' ){
				$name = $_POST['name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
				$repassword = $_POST['repassword'];
                $gioitinh = $_POST['gioitinh'];

				$sql = "SELECT * FROM user WHERE name='$name'";

				$query = mysqli_query($connect,$sql);

				$password = md5($password);

				if(mysqli_num_rows($query) >0 ){

                    echo "<script>alert('Tên tài khoản đã tồn tại, vui lòng nhập tên khác !');</script>";
				}
                else
                {
                    $sql = "INSERT INTO user(name,password,email,gioitinh) VALUES('$name','$password','$email','$giotinh')";
                mysqli_query($connect,$sql);
                echo mysqli_error($connect);
				echo "<script language='javascript'>alert('Đăng Ký Thành Công')</script>";
                }
				
			}
			
        ?>
        
    
</body>
</html>



