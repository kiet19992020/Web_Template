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
                  width: 130px;
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
       
        if (isset($_POST["tinhtong"]))
        {
            $tong = 0;
            $ds = $_POST["ds"];

            $arr = explode(",", $ds);

            $n = count($arr);

          
            for ($i = 0; $i < $n; $i++)
            {
                $tong = $tong + $arr[$i];   
            }
        } 
        else
        {
            $ds = "";
            $tong = "";
        }



        
    ?>
    <form action="" method ="post">

    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Nhập Dãy Số</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20" name="ds" value="<?php echo $ds; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinhtong">Tổng dãy số</button>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tổng Dãy Số</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="tong" value="<?php echo $tong;?>">
       
        </div>
    </div>
    
    <p style="background-color: bisque; text-align: center;">(*) CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p>
    </form>
</body>
</html>