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
        if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"]))
        {
            
            $toan=($_POST["toan"]); 
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
           
           
        }
        else
       
           {
            $toan =0;
            $ly = 0;
            $hoa =0; 
           } 

        define("diem_chuan",20);
        if(isset($_POST['tinh']))

             if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa))

	                 $tong_diem=$toan + $ly + $hoa;
             else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $tong_diem="";
                }  
        else $tong_diem=0;

        if(isset($_POST['tinh']))
            if($tong_diem >= 20)
             {
            if(($toan > 0) && ($ly >0) && ($hoa >0))
                {
                    $ket_qua = "ĐẬU";
                }
            else $ket_qua = "RỚT";
            }
        else $ket_qua="RỚT";
        else $ket_qua = "";
       

        

    ?>
    
<form action="" id="form1" name= "ThiDH" method ="post">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Toán</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" name="toan" value="<?php echo $toan;?>">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Lý</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id=""  name="ly" value="<?php echo $ly;?>" >
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Hóa</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id=""name="hoa" value="<?php echo $hoa; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Điểm chuẩn</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text "name="diem_Chuan" value="20" readonly="true"">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tổng điểm</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text "  name="tong_diem" value="<?php echo $tong_diem; ?>"">
    </div>
     
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Kết quả thi</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " name="ket_qua" value="<?php echo $ket_qua?>"">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinh">Xem kết quả</button>
        </div>
    </div>
</form>
</body>
</html>