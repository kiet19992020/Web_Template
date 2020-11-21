<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>tinh dien tich HCN</title>
</head>
<body>
   <style>

        td{
                text-align:center;
                border: solid 1px;
                width: 250px;
                height: 30px;
            }
        h3 {
            color :red;
            text-align:center;
            font-size: 25px;
            margin-top:10px;
        }
        table{
            margin-top: 50px;
            margin-left:500px;
        }
        p {
            font-size: 20px;
            font-weight:bold; 
            color :red;
        }
        
    </style>
<body>
<?php 
	if(isset($_POST['bankinh']))  
	    $bankinh=trim($_POST['bankinh']); 
	else $bankinh=0;
    define("Pi",3.14);
	if(isset($_POST['tinh']))
        if (is_numeric($bankinh))  
	       $dientich=pow($bankinh,2) * Pi;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich="";
            }
    else $dientich=0;

    
    $chu_vi=2*Pi*$bankinh;
?>






<form align='center' action="" method="post">
<table border="0">
    <tr bgcolor="grey">
    	<th colspan="2" align="center"><h3><font color="black">DIỆN TÍCH HÌNH TRÒN</font></h3></th>
    </tr>
    <tr><td>Ban Kinh:</td>
    	<td><input type="text" name="bankinh" value="<?php  echo $bankinh;?> "/></td>
    </tr>
    <tr><td>Diện tích:</td>
    	<td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
    </tr>

    <tr><td>Chu vi:</td>
    	<td><input type="text" name="chuvi" disabled="disabled" value="<?php  echo $chu_vi;?> "/></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit"  value="Tính Toán" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>