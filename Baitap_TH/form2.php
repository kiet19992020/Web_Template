<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    td{
            
           
            width: 100px;
            height: 30px;
            text-align:justify;
        }
   
    table{
        margin-top: 30px;
       
        background-color:#FFFFCC;
        font-size:15 ;
        font-weight: bold;
        
    }
    #td1{
       text-align:right;
    }
    #send {
        margin-top:20px;
        width: 180px;
        margin-right:-5px;
    }
    #table2 {
        margin-top:50px;
    }

    #legend{
        text-align:center;
        font-weight: bold;
        font-size:23px;
    }
   


</style>
<body>
    <?php
    
        if (isset($_POST["hoten"]) && isset($_POST["email"])&& isset($_POST["ege"]) &&isset($_POST["gioitinh"]) &&isset($_POST["ghichu"]))
        {
            $hoten = $_POST["hoten"];
            $email = $_POST["email"];
            $gioitinh = $_POST["gioitinh"];
            $ege = $_POST["ege"];
            $ghichu = $_POST["ghichu"];
        }
        else
        {
            $hoten ="";
            $email ="";
            $gioitinh ="";
            $ege ="";
            $ghichu ="";
        }

    
    ?>
<form action="" id="form1" name= "ThiDH" method ="POST">

<table   >
    <tr bgcolor="#99FFFF">

        <th colspan="2" align="center"><h3><font color="black">ENTER YOUR INFORMATION</font></h3></th>
    
    </tr>
<tr>
    <td width="50px" >Name</td>
    <td>
        <input type="text " id="hoten" size="40" name="hoten" value="">
    </td>
    
</tr>

<tr>
    <td width="50px">Email</td>
    <td>
     
        <input type="email " id="email" size="40" name="email" value="">
    </td>
    
</tr> 
<tr>
    <td width="50px" id ="pt"  >Gender</td>
    <td >
        <input type="radio" name="gioitinh" value="Male">Male
        
        <input type="radio"  name="gioitinh" value="Fremales">Fremales
        
    </td>
        

</tr>
<tr>
    <td width="50px"><label for="cars">AGE:</label></td>
    <td>
        
        <select name="ege"  >
            <option value="30">30 and 60</option>
            <option value="35">35</option>
            <option value="50">60</option>
            
        </select>
        
    </td>
</tr>




<tr>
    <td width="50px">Commets:</td>
    <td>
        <textarea name="ghichu"  rows="5" cols="50"></textarea>
    </td>
</tr>


<tr>
    <th>
    <input id ="send" type="submit"  value="SEND MY INFORMATION" name="gui" />
    </th>
</tr>

</table>
<fieldset>
    <legend>Nguyen Tan Kiet</legend>
<div id = "legend" ><?php echo "WELLCOME TO THIS PAGE" ?></div>
</fieldset>
<table id = "table2" width="400" border ="0" align ="left" bgcolor="#CCFFFF">

           
            <tr>
                <td><div id = "hoten"><?php echo "Name:". $hoten; ?></td>

            </tr>
            <tr>
            <td><div id = "email"><?php echo "Email:".$email; ?></td>
            </tr>
            <tr>
            <td><div id = "gioitinh"><?php echo "Gender:". $gioitinh; ?>
            </tr>
            <tr>
            <td><div id = "ege"><?php echo "Age:". $ege; ?></td>
            </tr>

            <tr>
            <td><div id = "ghichu"><?php echo "comment:". $ghichu; ?></td>
            </tr>
        </table>

</form>
</body>
</html>