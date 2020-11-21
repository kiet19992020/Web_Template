
    <?php
        if(isset($_POST['stn']))
            $stn = trim($_POST['sth']);
        else 
        $stn=0;
        if(isset($_POST['sth']))  
            $sth=trim($_POST['sth']); 
        else 
        $sth=0;
    ?>
<form action="Baitap_TH/Kq_BT_From6.php" id="form2" method ="POST">


    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Các phép tính</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  id="cong" name="pt" value="Cộng">
                <label label class="form-check-label" for="inlineRadio1">Cộng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  id="tru" name="pt" value="Trừ">
                <label class="form-check-label" for="inlineRadio2">Trừ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  id="nhan" name="pt" value="Nhân">
                <label class="form-check-label" for="inlineRadio3">Nhân</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  id="chia" name="pt" value="Chia">
                <label class="form-check-label" for="inlineRadio3">Chia</label>
            </div>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Số Thứ Nhất</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="stn" value="<?php echo $stn; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Số Thứ Hai</label>
        <div class="col-sm-9">
        <input class="form-control"   type="text " name="sth" value="<?php echo $sth; ?>">
       
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="tinh">Tính toán</button>
        </div>
    </div>

