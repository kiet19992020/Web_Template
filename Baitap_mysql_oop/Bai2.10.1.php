<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img {
        width: 100px;
        height: 100px;
    }

    table,
    th,
    td {
        border: 1px solid #868585;
        text-align: center;
    }

    table {
        border-collapse: collapse;
    }

    table tr:nth-child(odd) {
        background-color: #FFFACD;
    }

    th {
        background-color: #4682B4;
    }
</style>

<body>
    <?php
    //lấy giá trị từ ô loại sữa
    if (isset($_POST['s_ten_loai'])){
        if($_POST['s_ten_loai'] == "Tất cả")
            $tenLoai = "%%";
        else
            $tenLoai = $_POST['s_ten_loai'];
    }
    else
        $tenLoai = "";
    //lấy giá trị từ ô nhập hãng sữa
    if (isset($_POST['s_ten_hang'])){
        if($_POST['s_ten_hang'] == "Tất cả")
            $tenHang = "%%";
        else
            $tenHang = $_POST['s_ten_hang'];
    }
    else
        $tenHang = "";
    //lấy giá trị từ ô nhập tên sữa
    if (isset($_POST['s_ten_sua']))
        $tenSua = $_POST['s_ten_sua'];
    else
        $tenSua = "";
    ?>
    
    <div align="center">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Loại sữa</td>
                    <td>
                        <select name="s_ten_loai">
                            <option value="Tất cả" <?php if ($tenLoai == "Tất cả") echo "selected"; ?>>Tất cả</option>
                            <option value="Sữa bột" <?php if ($tenLoai == "Sữa bột") echo "selected"; ?>>Sữa bột</option>
                            <option value="Sữa chua" <?php if ($tenLoai == "Sữa chua") echo "selected" ?>>Sữa chua</option>
                            <option value="Sữa đặc" <?php if ($tenLoai == "Sữa đặc") echo "selected" ?>>Sữa đặc</option>
                            <option value="Sữa tươi" <?php if ($tenLoai == "Sữa tươi") echo "selected" ?>>Sữa tươi</option>
                        </select>
                    </td>
                    <td>Hãng sữa</td>
                    <td>
                        <select name="s_ten_hang">
                            <option value="Tất cả" <?php if ($tenHang == "Tất cả") echo "selected"; ?>>Tất cả</option>
                            <option value="Abbott" <?php if ($tenHang == "Abbott") echo "selected" ?>>Abbott</option>
                            <option value="Dutch Lady" <?php if ($tenHang == "Dutch Lady") echo "selected" ?>>Dutch Lady</option>
                            <option value="Dumex" <?php if ($tenHang == "Dumex") echo "selected" ?>>Dumex</option>
                            <option value="Daisy" <?php if ($tenHang == "Daisy") echo "selected" ?>>Daisy</option>
                            <option value="Mead Jonhson" <?php if ($tenHang == "Mead Jonhson") echo "selected" ?>>Mead Jonhson</option>
                            <option value="Nutifood" <?php if ($tenHang == "Nutifood") echo "selected" ?>>Nutifood</option>
                            <option value="Vinamilk" <?php if ($tenHang == "Vinamilk") echo "selected" ?>>Vinamilk</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tên sữa</td>
                    <td colspan="2"><input type="text" name="s_ten_sua" value="<?php if (isset($_POST['s_ten_sua'])) echo $_POST['s_ten_sua']; ?>" /></td>
                    <td><input type="submit" value="Tìm kiếm" /></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "qlbansua");
    mysqli_set_charset($conn, 'UTF8');

    $result = mysqli_query($conn, "SELECT Hinh, Loi_ich, TP_Dinh_Duong, Ten_sua, Trong_luong, Don_gia, Ten_loai, Ten_hang_sua
                            FROM sua s, loai_sua ls, hang_sua hs
                            WHERE s.ma_loai_sua = ls.ma_loai_sua
                                AND s.ma_hang_sua = hs.ma_hang_sua 
                                AND ls.ten_loai LIKE N'$tenLoai' 
                                AND hs.ten_hang_sua LIKE N'$tenHang' 
                                AND s.ten_sua LIKE N'%$tenSua%'");

    echo "<table align='center' width='500px'cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr></tr>';
    $stt = 0;
    $ketQua = NULL;
    if (mysqli_num_rows($result) <> 0) {
        while ($rows = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo "<th colspan ='2' align='center'>$rows[Ten_sua] - $rows[Ten_hang_sua]</th>";
            echo '</tr>';
            echo "<tr>";
            echo "<td align='center'><img src='Hinh_sua/$rows[Hinh]'></td>";

            echo "<td style ='text-align: justify;'>";

            echo "<p><b>Thành Phần Dinh Dưởng:<br></b> $rows[TP_Dinh_Duong]<br></p>";
            echo "<p><b>Lợi ích:<br></b> $rows[Loi_ich]<br></p>";

            echo "<b>Trọng Lượng:</b>$rows[Trong_luong] gr - ";
            echo "<b>Đơn Giá:</b>$rows[Don_gia] VNĐ";
            echo "</td>";
            echo "</tr>";
            $stt += 1;
        }
    }
    if ($stt != 0)
        $ketQua = "Có $stt sản phẩm được tìm thấy";
    else
        $ketQua = "Không tìm thấy sản phẩm này";
    echo "<p style='color:red; text-align:center;'>$ketQua</p>";
    echo "</table>";

    ?>

</body>

</html>