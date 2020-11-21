<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

       
</style>
<body>
    <?php
          if (isset($_POST["N"])){
            $N =$_POST["N"];
             }
     
         else $N = 0;
       
         
         $arr = [];
         for ( $i = 0 ; $i < $N; $i++ )
         {
           $arr[$i] = rand (0,20);
         }
     
         function xuatMang($N, $arr){
             for ( $i = 0 ; $i < $N; $i++ )
             {
               echo $arr[$i]. "\t";
             } 
         }

        //  function GTLN($arr,$N)
        //  {
           
        //     $N = count($arr);
        //     $max = $arr[0];
        //     for ($i= 0; $i < $N ; $i ++)
        //     {
        //         if ($arr[$i] > $max)
        //         {
        //             $max = $arr[$i];
        //         }
        //     }
        //     echo $max;
        //  }

         function GTNN($arr){

            if(isset($arr[0])){
        
                $min = $arr[0];
        
                $N = count($arr);
        
                for($i = 1; $i < $N; $i++){
        
                    if($arr[$i] < $min)
        
                        $min = $arr[$i];
        
                }
        
                echo $min;
        
            }
        
        }

        function GTLN($arr){

            if(isset($arr[0])){
        
                $max = $arr[0];
        
                $N = count($arr);
        
                for($i = 1; $i < $N; $i++){
        
                    if($arr[$i] > $max){
        
                        $max = $arr[$i];
        
                    }
        
                }
        
                echo $max;
        
            }
        
        }

         function tongphantu($N, $arr){
            $tong =0;
            for ( $i = 0 ; $i < $N; $i++ )
            {
                if( $arr[$i] )
                {
                    $tong = $tong + $arr[$i];
                }
                
            } 
            echo $tong;
            return -1;
           
        }
    ?>

    <form action="" method ="post">
        <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Nhập Số Phần Tử</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20"  name="N" value="<?php echo $N; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="submit">Phát sinh và tính toán</button>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Mảng</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php xuatMang($N, $arr);?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">GTLN(Max) Trong Mảng</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php GTLN($arr) ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">GTNN(Min) Trong Mảng</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php GTNN($arr) ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tổng Mảng</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php tongphantu($N, $arr); ?>">
       
        </div>
    </div>
    
    <p style="background-color: bisque; text-align: center;">(*) CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p>
    </form>
</body>
</html>