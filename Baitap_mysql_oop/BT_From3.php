<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

td{
        text-align:center;
        border: solid 1px;
        width: 250px;
        height: 30px;
        background-color: #E0FFFF;
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
   
    color :red;
}

</style>
<body>


    <?php 
        if(isset($_POST["ten"]) && isset($_POST["so_cu"]) && isset($_POST["so_moi"]))
        {
            
            $ten=trim($_POST["ten"]); 
            $so_cu = $_POST["so_cu"];
            $so_moi = $_POST["so_moi"];
           
           
        }
        else
        {
            $ten ="";
            $so_cu = 0;
            $so_moi =0;
            
        }

        define("don_gia",2000);
    
        if(isset($_POST['tinh']))

        if (is_numeric($so_cu) && is_numeric($so_moi))  

	       $thanh_tien=($so_moi - $so_cu)*don_gia;

        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $thanh_tien="";

            }
        else $thanh_tien=0;

    ?>


    <form action="" id="form1" name= "form1" method ="post">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tên chủ hộ</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20"  name="ten" value="<?php echo $ten;?>">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Chỉ số cử</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id="" size="20" name="so_cu" value="<?php echo $so_cu;?>" >
       
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Chỉ số mới</label>
        <div class="col-sm-9">
        <input class="form-control"  type="text " id="" size="20" name="so_moi" value="<?php echo $so_moi; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Đơn giá</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " "name="don_gia" value="2000">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Thành tiền</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text "name="thanh_tien" value="<?php echo $thanh_tien; ?>"/>
       
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