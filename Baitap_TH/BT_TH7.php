<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
                text-align: center;     
                font-weight:blod;
                width: 230px;
                height: 30px;
                
            }
        h3 {
           
            
            font-size: 25px;
            margin-top:10px;
            
        }
        table{
            margin-top: 50px;
            margin-left:450px;
            background-color:#E0FFFF;
            font-weight: bold;
        }
</style>
<body>
<?php
    function thayThe($mang,$gt_trc,$gt_sau)
    {
        $n = count($mang);
        for($i= 0;$i < $n;$i++)
        {
            if($mang[$i]== $gt_trc)
            {
                $mang[$i] = $gt_sau;
            }
        }
        return $mang;
    }
    
    if (isset($_POST["day_so"]) && isset($_POST["gt_trc"]) && isset($_POST["gt_sau"]))
    {
        $day_so = $_POST["day_so"];
        $gt_trc = $_POST["gt_trc"];
        $gt_sau = $_POST["gt_sau"];

        $mang = explode(",", $day_so);
        $mang_trc = implode(",", $mang);
        
        $mang = thayThe($mang,$gt_trc,$gt_sau);
        $mang_sau = implode (",",$mang);
    }

    else
    {
        $day_so =0;
        $gt_trc =0;
        $gt_sau =0;
        $mang = "";
        $mang_trc ="";
        $mang_sau ="";

    }
?>
<form action="" method ="post">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Nhập Các Phần Tử</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20" name="day_so" value="<?php echo $day_so; ?>">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giá Trị Cần Thay Thế</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id="" name="gt_trc" value="<?php echo $gt_trc; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giá Trị Thay Thế</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id="" size="20" name="gt_sau" value="<?php echo $gt_sau; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="submit">Thay Thế</button>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl"> Mảng Củ</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php echo $mang_trc; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Mảng sau khi thay thế</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php echo $mang_sau; ?>">
       
        </div>
    </div>
    
    <p style="background-color: bisque; text-align: center;">(*) CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p>
        </form>
</body>
</html>