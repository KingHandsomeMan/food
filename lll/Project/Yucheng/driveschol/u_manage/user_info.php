<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/7
 * Time: 15:28
 */
header("Content-type:text/html;charset=utf-8;");

/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', '', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);
session_start();
$username = $_SESSION['username'];

//数据库查询语句
$sql1 = "select * from user where username='$username'";
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

                    <!--用户名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">用户名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control"
                                   value="<?= $row1['username'] ?>" disabled="disabled">
                        </div>
                    </div>

                    <!--学员编号-->
                    <div class="form-group has-feedback">
                        <label for="stu_num2" class="control-label col-sm-2">学员编号</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num2" id="stu_num2" class="form-control" disabled="disabled"
                                   value="<?= $row1['studentid'] ?>">
                        </div>
                    </div>

                    <!--真实姓名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num3" class="control-label col-sm-2">真实姓名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num3" id="stu_num3" class="form-control"
                                   value="<?= $row1['Sname'] ?>" disabled="disabled">
                        </div>
                    </div>

                    <!--身份证号码-->
                    <div class="form-group has-feedback">
                        <label for="stu_num4" class="control-label col-sm-2">身份证ID</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num4" id="stu_num4" class="form-control"
                                   value="<?= $row1['Pid'] ?>" disabled="disabled">
                        </div>
                    </div>

                    <!--电话号码-->
                    <div class="form-group has-feedback">
                        <label for="stu_num5" class="control-label col-sm-2">电话号码</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num5" id="stu_num5" class="form-control"
                                   value="<?= $row1['tel'] ?>" disabled="disabled">
                        </div>
                    </div>

                    <!--籍贯-->
                    <div class="form-group has-feedback">
                        <label for="stu_num6" class="control-label col-sm-2">籍贯</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num6" id="stu_num6" class="form-control"
                                   value="<?= $row1['Origo'] ?>" disabled="disabled">
                        </div>
                    </div>

                    <!--居住证-->
                    <div class="form-group has-feedback">
                        <label for="stu_num7" class="control-label col-sm-2">地址</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num7" id="stu_num7" class="form-control"
                                   value="<?= $row1['address'] ?>" disabled="disabled">
                        </div>
                    </div>

                    <!--注册时间-->
                    <div class="form-group has-feedback">
                        <label for="stu_num8" class="control-label col-sm-2">注册时间</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num8" id="stu_num8" class="form-control" disabled="disabled"
                                   value="<?= $row1['time'] ?>">
                        </div>
                    </div>

                    <!--档案编号-->
                    <div class="form-group has-feedback">
                        <label for="stu_num9" class="control-label col-sm-2">档案编号</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num9" id="stu_num9" class="form-control" disabled="disabled"
                                   value="<?= $row1['file_number'] ?>">
                        </div>
                    </div>

                    <!--科目类别-->
                    <div class="form-group has-feedback">
                        <label for="stu_num10" class="control-label col-sm-2">科目类别</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num10" id="stu_num10" class="form-control" disabled="disabled"
                                   value="<?= $row1['sid'] ?>">
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
