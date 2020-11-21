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
        #kq{
            color:black;
            font-weight:blod;
        }


</style>
<body>
<?php
        $tong_tien = 0;
        if(isset($_POST["tg_bd"]) && isset($_POST["tg_kt"]))
        {
            $tg_bd = $_POST["tg_bd"];
            $tg_kt = $_POST["tg_kt"];

        }
        else
        {
            $tg_bd = 0;
            $tg_kt = 0;
        }

        if(isset($_POST['tinh']))
        {
             //th1 10-24h
             if ($tg_bd >= 10 && $tg_kt > 10 && $tg_bd <24 && $tg_kt <= 24)
             {   
                 //tg_bd < tg kt
                if ($tg_bd < $tg_kt)
                {
                     //gio ketthuc nho hon hoac bầng 17
                    if ($tg_kt <= 17) {
                        $tong_tien = ($tg_kt - $tg_bd)*20000;
                    }
                     //giời bắt đầu nhỏ hơn 17
                    else if ($tg_bd < 17) {
                        $tong_tien = ($tg_kt - $tg_bd)*30000;
                    }     
                     // giờ bắt đầu lớn hơn 17 và giờ kết thúc lơn hơn 17
                    else {
                        $t1 = (17-$tg_bd)*20000;
                        $t2 = ($tg_kt -17)*30000;
                        $tong_tien = $t1 + $t2;
                    }
                }
                else $tong_tien = 0;
            }
            else $tong_tien = 10;
        }
        else {
            $tong_tien=0;
        }

        if(isset($_POST['tinh'])) {
            if ($tg_bd >= $tg_kt) {
                $ket_qua = "Giờ Bắt Đầu Phảu nhỏ hơn thời gian kết thúc";
            }
            else {
                $ket_qua = " chúng tôi đang trong thời gian nghỉ";
            }
                         //th1 10-24h
        } else {
            $ket_qua="";
        }

             
    ?>
    
    <form action="" id="form1" name= "form1" method ="post">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giờ bắt đầu</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20" name="tg_bd" value="<?php echo $tg_bd;?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giờ kết thúc</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id="" size="20" name="tg_kt" value="<?php echo $tg_kt;?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tổng tiền</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text "name="tong_tien" value="<?php echo $tong_tien ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinh">Tính toán</button>
        </div>
    </div>
        </form>
</body>
</html>