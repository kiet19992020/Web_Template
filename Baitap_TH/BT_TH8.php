<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
                  
                font-weight:blod;
                width: 80px;
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
        function hoan_Vi(&$a, &$b)
        {
            $tam = $a;
            $a = $b;
            $b = $tam;
        }   

        function sap_Tang($mang)
        {
            $n = count($mang);
            for ($i = 0 ; $i <$n-1; $i ++)
            {
                for ($j =$i; $j<$n; $j++)
                {
                    if ($mang[$i]> $mang[$j])
                    {
                        hoan_vi($mang[$i],$mang[$j]);
                    }
                }
            }
            return $mang;
        }


        function sap_Giam($mang)
        {
            $n = count($mang);
            for ($i = 0 ; $i <$n-1; $i++)
            {
                for ($j =$i; $j<$n; $j++)
                {
                    if ($mang[$i]< $mang[$j])
                    {
                        hoan_Vi($mang[$i],$mang[$j]);
                    }
                }
            
            }
            return $mang;
            
        }
        if (isset($_POST["day_so"]))
        {
            $day_so = trim($_POST["day_so"]);
            $mang = explode(",", $day_so);
            $mang1 = sap_Tang($mang);
            $chuoi_tang = implode(",", $mang1);

            $mang2 = sap_Giam($mang);
            $chuoi_giam = implode(",",$mang2);

        }
        else
        {
           
            $day_so ="";
            $mang ="";

            $mang1 = "";
            $chuoi_tang ="";

            $mang2 = "";
            $chuoi_giam="";
              
        }
     ?>
<form action="" method ="post">
      
        
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Nhập Mảng</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20" name="day_so" value="<?php echo $day_so; ?>">
        </div>
    </div>
    <p colspan="4" style="color: red;font-weight: bold">Mảng sau khi được sắp xếp</p>
    
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="submit">Sắp Xếp</button>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tăng Dần</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php echo $chuoi_tang; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giảm Dần</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " name="" value="<?php echo $chuoi_giam; ?>">
       
        </div>
    </div>
    

    <p style="background-color: bisque; text-align: center;">(*) CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p>
        </form>
</body>
</html>