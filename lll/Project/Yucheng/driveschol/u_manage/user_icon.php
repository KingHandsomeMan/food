<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/9
 * Time: 16:22
 */
/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', '', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>头像修改</title>
    <style>
        .c_sure {
            text-align: center;
            width: 80px;
            height: 35px;
            font-size: 20px;
            border-radius: 5px;
            border: none;
        }

        .c_sure:hover {
            background-color: rgba(182, 185, 198, 1);
        }

        .c_sure:active {
            background-color: #737383;
        }

        .old {
            margin-top: 30px;;
            width: 250px;
            height: 101px;;
        }

        li {
            list-style-type: none;
            float: left;
        }

        .report-file {
            display: block;
            position: relative;
            width: 120px;
            height: 28px;
            overflow: hidden;
            border: 1px solid #428bca;
            background: none repeat scroll 0 0 #428bca;
            color: #fff;
            cursor: pointer;
            text-align: center;
            margin-right:5px;
            border-radius: 5px;
        }
        .report-file:hover{
            background-color: #0064A6;
        }
        .report-file:active{
            background-color: #003399;
        }

        .report-file span {
            cursor: pointer;
            display: block;
            line-height: 28px;
        }
        .file-prew {
            position: absolute;
            top: 0;
            left:0;
            width: 120px;
            height: 30px;
            font-size: 100px;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer;
        }



    </style>
</head>
<body>
<h2 align="center">头像修改</h2>

<form enctype="multipart/form-data" method="post" action="">
    <center>
        <div class="old">
            <ul>
                <li style="margin-top: 45px;">
                    原头像&nbsp;
                </li>
                <li>
                    <?php
                    $sql1 = "select usericon from user where username='$username' ";
                    $result1 = $mysqli->query($sql1);
                    while($row1 = $result1->fetch_assoc()) {
                        ?>
                        <img src="./user_icon/<?=$row1['usericon']?>" width="100px;" height="100px;">
                    <?php
                    }
                    ?>
                </li>

            </ul>
        </div>
        <br>
        <hr width="12%" style="margin-top: -10px">

        <br>
        <div class="report-file">
            <span>上传文件</span>
            <input tabindex="3" size="3" name="myfile" class="file-prew" type="file" onchange="document.getElementById('textName').value=this.value">
            <input type="hidden" name="MAX_FILE_SIZE" value="5120*1024*1024">
        </div>
        <input type="text" id="textName" style="height: 28px;border:none; background-color: transparent;" disabled="disabled" />

        <br>
        <input class="c_sure" type="submit" value="确认" name="save1">
    </center>
</form>
</body>
</html>


<?php

if (isset($_POST['save1'])) {
    $filename = $_FILES['myfile']['name'];
    $type = $_FILES['myfile']['type'];
    $tmp_name = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $error = $_FILES['myfile']['error'];

    if ($error > 0) {
        switch ($error) {
            case 1:
                $info = "上传得文件超过了 php.ini中upload_max_filesize 选项中的最大值.";
                break;
            case 2:
                $info = "上传文件大小超过了html中MAX_FILE_SIZE 选项中的最大值.";
                break;
            case 3:
                $info = "文件只有部分上被传.";
                break;
            case 4:
                $info = "没有文件被上传.";
                break;
            case 5:
                $info = "找不到临时文件夹.";
                break;
            case 6:
                $info = "文件写入失败！";
                break;
        }
        die("上传文件错误，原因：" . $info);
    }

    $typelist = array("image/jpeg", "image/jpg", "image/png");
    if (!in_array($type, $typelist)) {
        die("上传文件类型非法！" . $type);
        exit;
    }

    if ($size > 5120 * 1024 * 1024) {
        die("上传文件大小超过5M");
        exit;
    }

    $path = "user_icon";

    if (!(file_exists($path))) {
        if (!mkdir($path, 0777)) {
            echo "创建文件夹失败";
        }
    }

    $date = date('Ymdhis');
    $filename = $date . "." . pathinfo($filename)['extension'];

    $path .= "/" . $filename;
    if (is_uploaded_file($tmp_name)) {
        if (move_uploaded_file($tmp_name, $path)) {
            $mysqli->query("update user set usericon='$filename' where username='$username'") or die("执行出错");
            echo "<script>alert('头像修改成功');window.location.href='../mymain.html';</script>";

        } else {
            die("上传文件失败! ");
        }
    } else {
        die("不是一个上传的文件！");
    }
}
?>



