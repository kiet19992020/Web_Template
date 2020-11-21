<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.pheptinh{
    color: black;
    background-color: #E0FFFF;
    padding: 50px;
    width: 70%;
    margin-left: 300px;
    box-shadow: 5px 5px 15px 5px #66CDAA;   
    border-radius: 10px;
}
</style>    
<body>


<?php 

 class PhanSo{

	        var $tuSo;
            var $mauSo;

            public function setTuSo($tuSo){
                $this->tuSo = $tuSo;
            }
            public function getTuSo(){
                return $this->tuSo;
            }

            public function setMauSo($mauSo){
                $this->mauSo = $mauSo;
            }
            public function getMauSo(){
                return $this->mauSo;
            }

            public function PhanSo($tuSo,$mauSo){
                $this->tuSo = $tuSo;
                $this->mauSo = $mauSo;
            }

            public function rutGon(){
                $uc = UCLN($this->tuSo, $this->mauSo);
                $this->tuSo = $this->tuSo/$uc;
                $this->mauSo = $this->mauSo/$uc;
            }

            public function hienThi(){
                return "$this->tuSo / $this->mauSo";
            }

            public function Cong($ps) {
                $tu = $this->tuSo * $ps->mauSo + $ps->tuSo * $this->mauSo;
                $mau = $this->mauSo * $ps->mauSo;
                return new PhanSo($tu, $mau);
            }
            
            public function Tru($ps) {
                $tu = $this->tuSo * $ps->mauSo - $ps->tuSo * $this->mauSo;
                $mau = $this->mauSo * $ps->mauSo;
                return new PhanSo($tu, $mau);
            } 

            public function Nhan($ps) {
                return new PhanSo($this->tuSo * $ps->tuSo, $this->mauSo * $ps->mauSo);
            }

            public function Chia($ps) {
                return new PhanSo($this->tuSo * $ps->mauSo, $this->mauSo * $ps->tuSo);
            }
        }
        function UCLN($a, $b){
            if($a % $b == 0){
                return $b;
            }
            else {
                return UCLN($b, $a%$b);
            }
        }
        if(isset($_POST['tuso1']))
            $tuSo1 = $_POST['tuso1'];
        else $tuSo1="";

        if(isset($_POST['mauso1']))
            $mauSo1 = $_POST['mauso1'];
        else $mauSo1="";

        if(isset($_POST['tuso2']))
            $tuSo2 = $_POST['tuso2'];
        else $tuSo2="";

        if(isset($_POST['mauso2']))
            $mauSo2 = $_POST['mauso2'];
        else $mauSo2="";

        if(isset($_POST['ptinh']))
            $ptinh = $_POST['ptinh'];
        else $ptinh="";

?>

<div class="pheptinh">
<h1 style="text-align: center;">THỰC HIỆN CÁC PHÉP TÍNH</h1>
<form action="" method ="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" >Tử số PT1</label>
        <div class="col-sm-3">
            <input class="form-control"  type="text " id="" size="20" name="tuso1" value="<?php echo $tuSo1; ?>">
        </div>
        <label class="col-sm-2 col-form-label" >Mẫu số PT1</label>
        <div class="col-sm-3">
            <input class="form-control"  type="text " id="" size="20" name="mauso1" value="<?php echo $mauSo1; ?>">
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" >Tử số PT2</label>
        <div class="col-sm-3">
            <input class="form-control"  type="text " id="" size="20" name="tuso2" value="<?php echo $tuSo2; ?>">
        </div>
        <label class="col-sm-2 col-form-label" >Mẫu số PT2</label>
        <div class="col-sm-3">
            <input class="form-control"  type="text " id="" size="20" name="mauso2" value="<?php echo $mauSo2; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="dl">Chọn Phép Tính</label>
        <div class="col-sm-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ptinh" value="+" <?php if($ptinh == "+") echo "checked='checked'"?>>
                <label label class="form-check-label" for="inlineRadio1">Cộng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ptinh" value="-" <?php if($ptinh == "-") echo "checked='checked'"?>>
                <label class="form-check-label" for="inlineRadio2">Trừ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" value="*" <?php if($ptinh == "*") echo "checked='checked'"?>>
                <label label class="form-check-label" for="inlineRadio1">Nhân</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ptinh" value="/" checked <?php if($ptinh == "/") echo "checked='checked'"?>>
                <label class="form-check-label" for="inlineRadio2">Chia</label>
            </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-7 offset-3">
                <button type="submit" class="btn btn-danger px-5" name="KQ">Kết Quả</button>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="50" > <?php 
            if(isset($_POST['KQ'])){
                $ps1 = new PhanSo($tuSo1, $mauSo1);
                $ps2 = new PhanSo($tuSo2, $mauSo2);

                switch ($ptinh) {
                    case '+':
                        $kq = $ps1->Cong($ps2);
                        break;

                    case '-':
                        $kq = $ps1->Tru($ps2);
                        break;
                    
                    case '*':
                        $kq = $ps1->Nhan($ps2);
                        break;
                    
                    case '/':
                        $kq = $ps1->Chia($ps2);
                        break;
                    
                    default:
                        break;
                }
                $kq->rutGon();
                echo "Phép tính là: " . $ps1->hienThi() . " $ptinh "  . $ps2->hienThi() . " = " . $kq->hienThi();
            }
            ?> </textarea>
        </div>
        <div>
      
    </div>
    </div>
</form> 
</div>

</body>
</html>