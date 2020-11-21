<?php
$page_title = 'Update';
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
    flex-direction:column;
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

 
input#submit  {
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
.content_edit{
    background-color: black;
    background-image: url(web_images/bg2.jpg);
    background-size: cover;
}
</style>
<body>
	<?php
		$connect = mysqli_connect("localhost", "root", "", "thi_php");
        mysqli_set_charset($connect, 'UTF8');
        $msg = "";
        if(isset($_GET['edit_id'])){
            $edit_id = $_GET['edit_id'];
			
			$sql_up = "SELECT * FROM user WHERE id='$edit_id'";
			$query_up = mysqli_query($connect,$sql_up);
			$row_up = mysqli_fetch_assoc($query_up);

            if( isset($_POST['submit']) && $_POST['name'] !=''&& $_POST['password'] 
            !=''&& $_POST['repassword'] !=''&& $_POST['email'] !=''&& $_POST['gioitinh'] !=''  )
            {
                
                $name = $_POST['name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $repassword = $_POST['repassword'];
                $gioitinh = $_POST['gioitinh'];
                //up ảnh
                $image = $_FILES['image']['name'];
				$target = "web_images/".basename($image);
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
				{
					$msg = "Upload ảnh thành công";
				}else
				{
					$msg = "Lỗi khi upload ảnh";
				}
				//up ảnh
				$sql = "SELECT * FROM user WHERE id='$edit_id'";

				$query = mysqli_query($connect,$sql);

				$password = md5($password);

                $sql = "UPDATE user SET name='$name', password='$password', 
                email='$email', image ='$image', gioitinh ='$gioitinh' WHERE id='$edit_id'";
				mysqli_query($connect,$sql);
                echo "<script language='javascript'>alert('Cập nhật thành công')</script>";
                $sql_up = "SELECT * FROM user WHERE id='$edit_id'";
                $query_up = mysqli_query($connect,$sql_up);
                $row_up = mysqli_fetch_assoc($query_up);
			}
        }
	?>
    <div class="content_edit">
    <div class="to">
            <form action="" class="form" method="POST" enctype="multipart/form-data">
			<h2 style="color:#FF0000;">Sửa Thông Tin</h2>
			
			Email<input type="email" name="email" value="<?php echo $row_up['email']?>">
             
			 Tài Khoản <input type="text" name="name" value="<?php echo $row_up['name']?>">    

		      Mật Khẩu <input type="password" name="password" value="<?php echo $row_up['password']?>">
          Nhập Lại <input type="password" name="repassword" value="<?php echo $row_up['password']?>">
              <input type="file" name="image" size="6">
			 
            <input id="submit" type="submit" class="btn btn-info info" name="submit" value="update">
            <input type="radio"  name="gioitinh" value="1">Nam
			<input type="radio" name="gioitinh" value="0">Nữ
			<input style="margin-left:175px" id="submit" type="reset" class="btn btn-dark dark" name="submit" value="Hủy">
			</form> 
			            
        </div>
        <?php include ('includes/footer.html'); ?>
    </div>
	

		
</body>
</html>

