
<style>
    td {
        width: 150px;
        height: 30px;
        text-align: justify;
    }
    
    tr {
        width: 300px;
        height: 30px;
    }
    
    table {
        margin-top: 50px;
        margin-left: 500px;
        background-color: #FFFFCC;
        font-size: 15;
        font-weight: bold;
    }
    
    #td1 {
        text-align: right;
    }
</style>


    <form action="Baitap_TH/kq_BT_From7.php" id="form1" name="ThiDH" method="post">
    <h1 style="text-align: center;"> ENTER YOUR INFORMATION</h1>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Họ tên</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="hoten" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Địa chỉ</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="diachi" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Số điện thoại</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="sdt" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Email</label>
        <div class="col-sm-9">
            <input class="form-control"  type="text " name="email" value="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Giới tính</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  id="" name="gioitinh" value="Nam">
                <label label class="form-check-label" for="inlineRadio1">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  id="" name="gioitinh" value="Nữ">
                <label class="form-check-label" for="inlineRadio2">Nữ</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Quốc tịch</label>
        <div class="col-sm-9">
            <select class="custom-select mr-sm-2" name="quoctich" id="inlineFormCustomSelectPref">
                <option selected>--Việt Nam--</option>
                <option value="American">American</option>
                <option value="Thailan">Thailan</option>
                <option value="Korean">Korean</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Môn Học</label>
        <div class="col-sm-9">
        <div class="form-check form-check-inline">
                <input class="form-check-input" name="monhoc[]" type="checkbox" id="inlineCheckbox1" value="PHP">
                <label class="form-check-label" for="inlineCheckbox1">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="monhoc[]" type="checkbox" id="inlineCheckbox2" value="C#">
                <label class="form-check-label" for="inlineCheckbox2">C#</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="monhoc[]" type="checkbox" id="inlineCheckbox3" value="Python" >
                <label class="form-check-label" for="inlineCheckbox3">Python </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="dl">Ghi chú</label>
        <div class="col-sm-9">
        <textarea class="form-control" name="ghichu" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-9 offset-3">
            <button type="submit" class="btn btn-danger px-5" name="tinh">Gửi</button>
            <button type="reset" class="btn btn-danger px-5" name="">Hủy</button>
        </div>
    </div>
    </form>