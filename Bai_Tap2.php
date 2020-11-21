<?php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2066070c74.js" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<style>
    li {
        list-style-type: none;
        color: #F08080;
    }

    ul li a {
        color: #191970;
    }

    * {
        margin: 0;
        padding: 0;

    }

    body {
        height: 100%;
        overflow: auto;


    }

    .baitap {
        margin-top: 10px;
        width: 280px;
        float: left;
        background-color: #E0FFFF;
        position: relative;
        border-radius: 15px;
        box-shadow: 5px 5px 15px 5px #66CDAA;
        transition: 3s;
        transition: transform 200ms ease-out;
    }

    .info {
        height: 600px;
        margin-left: 50px;
        padding-top: 50px;


    }

    label #slidebar_btn {
        z-index: 1;
        color: black;
        margin-top: 15px;
        font-size: 20px;
        transition: 0.5s;
    }

    label #slidebar_btn:hover {
        color: #ADD8E6;
    }

    #check:checked~.baitap {
        transform: translateX(-490px);
    }

    .content_bt {
        background-color: black;
        background-image: url(web_images/bg2.jpg);
        background-size: cover;

    }
</style>

<body>
    <div class="content_bt">
        <input type="checkbox" id="check">
        <label for="check">


            <i class="fas fa-toggle-on" id="slidebar_btn">Trạng Thái</i>
        </label>
        <div class="baitap row text-center">
            <div ">
        <li>
            <h2>Bài OOP</h2>
            <ul>
                <li><a href=" Bai_Tap2.php?page=Bai1">Bài Tập Thực Hành 1</a></li>
                <li><a href="Bai_Tap2.php?page=Bai2">Bài Tập Thực Hành 2</a></li>
                </ul>
                </li>
                <li>
                    <h2 style="padding-left: 20px;">Bài Tập Mysql</h2>
                    <ul>
                        <li><a href="Bai_Tap2.php?page=bai2_1">Bài Tập 2.1</a></li>
                        <li><a href="Bai_Tap2.php?page=bai2_2">Bài Tập 2.2</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_3">Bài Tập 2.3</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_4">Bài Tập 2.4</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_5">Bài Tập 2.5</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_6">Bài Tập 2.6</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_7">Bài Tập 2.7</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_8">Bài Tập 2.8</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_9">Bài Tập 2.9</a></li>
                        <li><a href="Bai_Tap2.php?page=Bai2_10">Bài Tập 2.10</a></li>
                    </ul>
                </li>
            </div>


        </div>

        <div class="info">
            <?php
            if (isset($_GET['page']) && $_GET['page'] == "$_REQUEST[page]") {
                include "Baitap_mysql_oop/$_REQUEST[page].php";
            }
            ?>
        </div>
</body>

</html>
<?php
include('includes/footer.html');
?>