<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if (isset($_POST["a"]) && isset($_POST["b"]))
        {
            $a = trim($_POST["a"]);
            $manga = explode(",",$a);
            $na = count($manga);

            $b = trim($_POST["b"]);
            $mangb = explode(",",$b);
            $nb = count($mangb);

            $c = array_merge($manga,$mangb);
            $chuoi_c = implode(",",$c);

            sort($c);
            $tang = implode(",", $c);
            rsort($c);
            $giam = implode(",",$c);    
        }

        else {
            $a = 0;
            $b = 0;
            $na =0;
            $nb =0;
            $manga = ""; 
            $mangb ="";
            $chuoi_c ="";
            $tang ="";
            $giam ="";
        }
     ?>
<form action="" method ="post">
         
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Mảng A</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " id="" size="20"  name="a" value="<?php echo $a;?>">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Mảng B</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id=""  name="b" value="<?php echo $b;?>">
       
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="submit">Thực Hiện</button>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Phần Tử Mảng A</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " id="" size="20" name="na" value="<?php echo $na; ?>">
       
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Phần Tử Mảng B</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="nb" value="<?php echo $nb; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Mảng C</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id=""  name="chuoi_c" value="<?php echo $chuoi_c ?>">
    </div>
     
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Tăng</label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php echo $tang; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giảm </label>
        <div class="col-sm-9">
        <input class="form-control" disabled  type="text " id="" size="20" name="" value="<?php echo $giam; ?>">
        </div>
    </div>
   
    
        </form>
</body>
</html>