<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/7
 * Time: 15:28
 */
header("Content-type:text/html;charset=utf-8;");

/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', 'sise', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);
session_start();
$username = $_SESSION['username'];

//数据库查询语句
$sql1 = "select * from trainer where tname='$username'";
$result1 = $mysqli->query($sql1);


?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户个人信息</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div.container > div.row > div {
            /*border: 2px solid #ddd;*/
            border-radius: 5px;
        }

        .exambtn {
            background-color: #337ab7;
            border-radius: 3px;
            border: none;
            color: #ffffff;
            width: 120px;
            height: 30px;
            /*margin-bottom: 100px;*/
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h2 class="text-center">个人信息</h2>

            <form action="user_info_manage.php" method="post" class="form-horizontal">
                <?php
                /*循环遍历查询结果*/
                while ($row1 = $result1->fetch_assoc()) {
                    ?>

                    <!--教练工号-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">工号</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control"
                                   value="<?= $row1['tid'] ?>" disabled="disabled" >
                        </div>
                    </div>

                    <!--教练姓名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num2" class="control-label col-sm-2">姓名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num2" id="stu_num2" class="form-control" disabled="disabled"
                                   value="<?= $row1['tname'] ?>">
                        </div>
                    </div>


                    <!--入职时间-->
                    <div class="form-group has-feedback">
                        <label for="stu_num10" class="control-label col-sm-2">入职时间</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num10" id="stu_num10" class="form-control" disabled="disabled"
                                   value="<?= $row1['hiredate'] ?>">
                        </div>
                    </div>
                <?php
                }
                ?>

        </div>
        </form>
    </div>
</div>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
