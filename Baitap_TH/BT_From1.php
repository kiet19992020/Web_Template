<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
    <title>tinh dien tich HCN</title>

</head>
<style>

td{
       
        border: solid 1px;
        width: 250px;
        height: 30px;
        background-color: #E0FFFF;
    }
h3 {
    color :red;
   
    font-size: 25px;
    margin-top:10px;
}
table{
  
    margin:50px 10px 0px 500px;
    font-weight: bold;
}
p {
    font-size: 20px;
    font-weight:bold; 
    color :red;
}

</style>
<body>

<?php 

	if(isset($_POST['chieudai']))  

	    $chieudai=trim($_POST['chieudai']); 

	else $chieudai=0;

	if(isset($_POST['chieurong'])) 

	    $chieurong=trim($_POST['chieurong']); 

	else $chieurong=0;

	if(isset($_POST['tinh']))

        if (is_numeric($chieudai) && is_numeric($chieurong))  

	       $dientich=$chieudai * $chieurong;

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $dientich="";

            }

    else $dientich=0;

   
    
    $chuvi = ($chieudai + $chieurong)*2;

?>



<form align='center' action="" method="post">

    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Chiều dài</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="chieudai" id="" size="20"  value="<?php  echo $chieudai;?> "/>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Chiều rộng</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " name="chieurong" id="" size="20" value="<?php  echo $chieurong;?> "/>
       
        </div>
    </div>
  
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Diện tích</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " name="dientich" id="" size="20" value="<?php  echo $dientich;?> "/>
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Chu vi</label>
        <div class="col-sm-9">
        <input class="form-control" name="chuvi" disabled  type="text " value="<?php  echo $chuvi;?> "/>
       
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinh">Tính Toán</button>
        </div>
    </div>

</form>

</body>

</html>