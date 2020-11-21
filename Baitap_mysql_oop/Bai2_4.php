<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
img{
    width: 50px;
    height: 50px;
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
}
.content2_4{
    margin-left: 300px;
}
</style>
<body>
    <div class="content2_4">
    <?php           
                
                $conn = mysqli_connect("localhost", "root", "", "qlbansua");
                mysqli_set_charset($conn, 'UTF8');


                $rowsPerPage=10; //số mẩu tin trên mỗi trang, giả sử là 10
                if (!isset($_GET['page2_4']))
                { $_GET['page2_4'] = 1;
                }
                //vị trí của mẩu tin đầu tiên trên mỗi trang
                $offset =($_GET['page2_4']-1)*$rowsPerPage;
                //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
                $result = mysqli_query($conn, 'SELECT Ten_sua, Trong_luong ,Don_gia, Ten_hang_sua, Ten_loai 
                            FROM sua,hang_sua,loai_sua 
                            WHERE sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND sua.Ma_hang_sua = hang_sua.Ma_hang_sua
                             LIMIT '. $offset . ', ' .$rowsPerPage);

              


                echo "<p align='center' style='color:white'><font size='5'> THÔNG TIN SỮA</font></P>";
                echo "<table align='center' width='auto'cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
                echo '<tr>
                <th width="50">STT</th>
                <th width="150">Tên Sữa</th>
                <th width="150">Hãng Sửa</th>
                <th width="150">Loại Sữa</th>
                <th width="150">Trọng Lượng</th>
                <th width="150">Đơn Giá</th>
               
                </tr>';

                if(mysqli_num_rows($result)<>0)
                { $stt=1;
                while($rows=mysqli_fetch_array($result))
                { echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$rows[Ten_sua]</td>";
                    echo "<td>$rows[Ten_hang_sua]</td>";
                    echo "<td>$rows[Ten_loai]</td>";
                    echo "<td>$rows[Trong_luong]</td>";
                    echo "<td>$rows[Don_gia]</td>";
                   ;
                   ;
                    
                    echo "</tr>";
                $stt+=1;
                }//while
                }
                echo"</table>";
                  
                echo '<p style="align-items: center;
                text-align: center;">';

                if(mysqli_num_rows($result)<>0)
                {
                //hiển thị dữ liệu
                }
                echo"</table>";
                $re = mysqli_query($conn, 'select * from sua');
                //tổng số mẩu tin cần hiển thị
                $numRows = mysqli_num_rows($re);
                //tổng số trang
                $maxPage = floor($numRows/$rowsPerPage) + 1;
              

                //tổng số trang
                $maxPage = floor($numRows/$rowsPerPage) + 1;
                //tạo link tương ứng tới các trang
                for ($i=1 ; $i<=$maxPage ; $i++)
                { if ($i == $_GET['page2_4'])
                { echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
                }
                else
                echo "<a href=" .$_SERVER['PHP_SELF']. "?page2_4="
                .$i.">".$i."</a> ";
                }
                echo '</p>';

?> 
    </div>
 

</body>
</html>