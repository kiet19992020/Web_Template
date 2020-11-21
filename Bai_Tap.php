<?php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>
<style>
    li {
        list-style-type: none;
        color: #F08080;
    }

    ul li a {
        color: #191970;
    }

    .baitap {

        background-color: #E0FFFF;
        position: absolute;
        border-radius: 15px;
        box-shadow: 5px 5px 15px 5px #66CDAA;
        z-index: 10;
    }

    .info {
        background-color: #E0FFFF;
        border-radius: 15px;
        box-shadow: 8px 5px 15px 3px #66CDAA;
        margin-left: 90px;
        transition: transform 200ms ease-out;


    }

    label #slidebar_btn {
        z-index: 11;
        color: black;
        position: absolute;
        cursor: pointer;
        margin-top: 10px;
        transition: 0.5s;
        font-size: 20px;
    }

    label #slidebar_btn:hover {
        color: #ADD8E6;
    }

    #check:checked~.info {
        transform: translateX(-830px);
    }


    .content_bt {
        background-color: black;
        background-image: url(web_images/bg2.jpg);
        background-size: cover;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        background-color: #f9f9f9;
        min-width: 160px;
        border-radius: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        list-style-type: none;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>

    <div class="content_bt  my-12">
        <div class=" row">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-toggle-on" id="slidebar_btn"></i>
            </label>
            <div class="baitap col-3 text-center">
                <li>
                    <h2 style='margin-left:10px'>Bài tập mảng</h2>
                    <ul>
                        <li><a href="Bai_Tap.php?page=BT_TH1">Bài Tập Thực Hành 1</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH2">Bài Tập Thực Hành 2</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH3">Bài Tập Thực Hành 3</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH4">Bài Tập Thực Hành 4</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH5">Bài Tập Thực Hành 5</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH6">Bài Tập Thực Hành 6</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH7">Bài Tập Thực Hành 7</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH8">Bài Tập Thực Hành 8</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH9">Bài Tập Thực Hành 9</a></li>
                        <li><a href="Bai_Tap.php?page=BT_TH10">Bài Tập Thực Hành 10</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <h2>Bài Tập Form</h2>
                    <ul class="dropdown-content" style='margin-left:10px'>
                        <li><a href="Bai_Tap.php?page=BT_From1">Bài Tập Diện Tích HCN</a></li>
                        <li><a href="Bai_Tap.php?page=BT_From2">Bài Tập Diện Tích Chu Vi HT</a></li>
                        <li><a href="Bai_Tap.php?page=BT_From3">Bài Tập Tính Tiền Điện</a></li>
                        <li><a href="Bai_Tap.php?page=BT_From4">Bài Tập Kết Quả Thi Đại Học</a></li>
                        <li><a href="Bai_Tap.php?page=BT_From5">Bài Tập Tính Tiền Karaoke</a></li>
                        <li><a href="Bai_Tap.php?page=BT_From6">Bài Tập Thực Hiện Các Phép Tính</a></li>
                        <li><a href="Bai_Tap.php?page=BT_From7">Bài Tập Enter your information</a></li>

                    </ul>
                </li>
            </div>

            <div id="ct" style="padding-top: 30px;" class="info col-7">

                <?php
                if (isset($_GET['page']) && $_GET['page'] == "$_REQUEST[page]") {
                    include "Baitap_TH/$_REQUEST[page].php";
                }
                ?>

            </div>
        </div>

</body>

</html>

<?php
include('includes/footer.html');
?>
<script>
    $(function() {
        $('#form1').submit(function(e) {
            e.preventDefault()
            const f = $(this);
            $.ajax({
                url: f.attr('action'),
                method: 'post',
                data: f.serialize(),
                success: function(res) {
                    $('#ct').html(res)
                }
            })
        })
    })
</script>