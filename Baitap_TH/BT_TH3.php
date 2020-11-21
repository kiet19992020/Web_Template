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
        function tinh_nam($nam)
        {
            if ($nam %400 ==0 || ($nam %4==0 && $nam %100 <> 0))
            return 1;
            else 
            return 0;
        }

        if (isset($_POST["tinh"]))
        {
            $nam =$_POST["nam"];
            $kq = "";
            
            foreach (range(2000,$nam)as $year)
            {
                if(tinh_nam($year))
                {
                    $kq = $kq . $year . " ";
                }
               
               
            }
            if ($kq !="")
            {
                $kq = $kq. " Đây Là Năm Nhuận";
            }
            else
                $kq = "Không có năm nhuận";
        }
        else
        {
            $nam = 0;
            $kq = "";
           
        } 
      
        
    ?>

    <form action="" method ="post">
    
<div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Năm </label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20" name="nam" value="<?php echo $nam; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
            <input class="form-control" type="text" disabled value="<?php echo $kq ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinh">Tìm Năm Nhuận</button>
        </div>
    </div>
   
</form>
</body>
</html>