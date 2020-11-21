<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
img{
    width: 40px;
    height: 40px;
}
table, th, td{
    
    border:1px solid #868585;
    text-align: center;
}
table{
    border-collapse:collapse;
}
table tr:nth-child(odd){
    background-color:#FFFACD;
  
}
table tr:nth-child(even){
    background-color:white;
    
}
table tr:nth-child(1){
    background-color:skyblue;
    color: red;
}
.nd{
    margin: 0px 0px 50px 300px;
}
</style>
<body>
    <div class="nd">
    <?php           
                
                $conn = mysqli_connect("localhost", "root", "", "qlbansua");
                mysqli_set_charset($conn, 'UTF8');
                $sql="select * from khach_hang";
                $result = mysqli_query($conn, $sql);
               

                
                echo "<p align='center'><font size='5', color ='white'> THÔNG TIN KHÁCH HÀNG</font></P>";
                echo "<table align='center' width='auto'cellpadding='2' cellspacing='2'  style='bordercollapse:collapse'>";
                echo '<tr>
                <th width="50">STT</th>
                <th width="50">Mã KH</th>
                <th width="150">Tên KH</th>
                <th width="50">Giới Tính</th>
                <th width="100">Địa Chỉ</th>
                <th width="50">Số Điện Thoại</th>
                <th width="100">Email</th>
                </tr>';

                if(mysqli_num_rows($result)<>0)
                { $stt=1;
                while($rows=mysqli_fetch_array($result))
                { echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$rows[Ma_khach_hang]</td>";
                    echo "<td>$rows[Ten_khach_hang]</td>";
                    
                    if($rows["Phai"]==1)
                    {
                        echo "<td><img src='Baitap_mysql_oop/giotinh/0.jpg'></td>";
                    }
                    elseif($rows["Phai"]==0)
                    {
                        echo "<td><img src='Baitap_mysql_oop/giotinh/1.png'></td>";
                    }
                    
                    echo "<td>$rows[Dia_chi]</td>";
                    echo "<td>$rows[Dien_thoai]</td>";
                    echo "<td>$rows[Email]</td>";
                   
                    
                    // echo "<td><img src='Hinh_sua/$rows[Hinh]'></td>";
                    echo "</tr>";
                $stt+=1;
                }//while
                }
                echo"</table>";
?>
    </div>
           

</body>
</html>