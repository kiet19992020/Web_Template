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
                width: 150px;
                height: 30px;
                
            }
        h3 {
            font-size: 25px;
        }
        table{
           
        
            background-color:#E0FFFF;
            font-weight: bold;
        }
        .content {
            margin-left: 500px;
        }
        
</style>
<body>
    <?php

    function tim_Hoa($ten_hoa,$mang_hoa){
        $n = count($mang_hoa);
        $kq = 0;
        for ($i =0 ; $i<$n ; $i++)
        {
            if(strcasecmp($ten_hoa,$mang_hoa[$i])==0)
            {
                $kq =1;
         }
        }
        return $kq;
    }
   
    if (isset($_POST["ten_hoa"]))
    {
        $ten_hoa = $_POST["ten_hoa"];
        $mang_hoa = array();
         
        $mang_hoa = explode("---",trim($_POST["gio_hoa"]));
        
        $n = count($mang_hoa);

        if (tim_Hoa($ten_hoa,$mang_hoa)==1)
        
            $kq = "Đã có hoa <b>$ten_hoa</b> trong giỏ";
        else{
            $mang_hoa[$n] = $ten_hoa;
            $kq = "";
        }
        $gio_hoa = implode("---",$mang_hoa);  
    }
    else{
        $ten_hoa ="";
        $mang_hoa ="";
        $gio_hoa ="";
        $kq ="";
        
    }
     ?>
   
     <form action="" method ="post">
        <table >     
        <tr bgcolor="grey">
        
            <td colspan="4" align="center"><h3><font color="white">Mua Hoa</font></h3></td>
        </tr>
        <tr>
            <td colspan="2" style="color: red;font-weight: bold" >Loại Hoa Bạn Chọn</td>
            <td >
                <input type="text "  size="30" name="ten_hoa" value="<?php echo $ten_hoa?>">
            </td>
        </tr>
        <th >
        <input type="submit"value="Thêm Vào Giỏ" name="submit" />
        </th>
        <tr>
            <td colspan="3" style="color: red;font-weight: bold" >Giỏ Hoa Bạn Đang Có</td>
            <td><?php echo $kq ?></td>
        </tr>   
       
        
        <tr>
            <td colspan="2"></td>
            <td >
            <textarea name="gio_hoa"  rows="5" cols="40"><?php echo $gio_hoa; ?></textarea>
            </td>
        </tr>
        </table>
        </form>


    <!-- <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Loại Hoa Chọn</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20"name="ten_hoa" value="<?php echo $ten_hoa?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="submit">Thêm Vào Giỏ</button>
        </div>
    </div>
    <p colspan="3" style="color: red;font-weight: bold" >Giỏ Hoa Bạn Đang Có</p>
    <p><?php echo $kq ?></p>
    <div class="form-group ">
    <label class="col-sm-3" for="exampleFormControlTextarea1"></label>
    <textarea class="form-control col-sm-3" id="exampleFormControlTextarea1" rows="3" cols="40"><?php echo $gio_hoa; ?></textarea>
    </div>
    
    <p style="background-color: bisque; text-align: center;">(*) CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p> -->
     

     

</body>
</html>