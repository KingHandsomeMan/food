<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/8
 * Time: 11:11
 * 考试进度查询
 */

header("Content-type:text/html;charset=utf-8;");

/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', '', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);

session_start();
$username1 = $_SESSION['username'];

//数据库查询语句
$sql1 = "select username,studentid,Sname,exam_sch from user where username='$username1'";
$result1 = $mysqli->query($sql1);

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学员考试进度</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div.container > div.row > div {
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h2 class="text-center">考试进度</h2><br>

            <form action="" method="post" class="form-horizontal">

                <?php
                while ($row1 = $result1->fetch_assoc()) {
                    ?>
                    <!--学员编号-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">学员编号</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control" disabled="disabled"
                                   value="<?= $row1['studentid'] ?>">
                        </div>
                    </div>

                    <!--用户名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">用户名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control" disabled="disabled"
                                   value="<?= $row1['username'] ?>">
                        </div>
                    </div>

                    <!--真实姓名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">真实姓名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control" disabled="disabled"
                                   value="<?= $row1['Sname'] ?>">
                        </div>
                    </div>

                    <!--考试进度-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">考试进度(待考)</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control" disabled="disabled"
                                   value="<?= $row1['exam_sch'] ?>">
                        </div>
                    </div>
                <?php
                }
                ?>


            </form>
        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>