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
$username1 = $_SESSION['username'];

//数据库查询语句
$sql1 = "select * from user where username='$username1'";
$result1 = $mysqli->query($sql1);


?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户个人信息管理</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div.container > div.row > div {
            /*border: 2px solid #ddd;*/
            border-radius: 5px;
        }
        .exambtn{
            background-color: #337ab7;
            border-radius: 3px;
            border: none;
            color: #ffffff;
            width: 120px;
            height: 30px;
            margin-left: -20px;
            margin-bottom: 50px;;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h2 class="text-center">个人信息管理</h2>

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
                                   value="<?= $row1['username'] ?>">
                            <span class="glyphicon form-control-feedback"></span>
                            <span class="help-block hidden">用户名的大小必须在2-10个之间</span>
                        </div>
                    </div>

                    <!--学员编号-->
                    <div class="form-group has-feedback">
                        <label for="stu_num2" class="control-label col-sm-2">学员编号</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num2" id="stu_num2" class="form-control" disabled="disabled"
                                   title="学员编号不可修改" value="<?= $row1['studentid'] ?>">
                        </div>
                    </div>

                    <!--真实姓名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num3" class="control-label col-sm-2">真实姓名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num3" id="stu_num3" class="form-control"
                                   value="<?= $row1['Sname'] ?>">
                            <span class="glyphicon form-control-feedback"></span>
                            <span class="help-block hidden">真实姓名不可为空</span>
                        </div>
                    </div>

                    <!--身份证号码-->
                    <div class="form-group has-feedback">
                        <label for="stu_num4" class="control-label col-sm-2">身份证ID</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num4" id="stu_num4" class="form-control"
                                   value="<?= $row1['Pid'] ?>">
                            <span class="glyphicon form-control-feedback"></span>
                            <span class="help-block hidden">身份证号码长度为18位</span>
                        </div>
                    </div>

                    <!--电话号码-->
                    <div class="form-group has-feedback">
                        <label for="stu_num5" class="control-label col-sm-2">电话号码</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num5" id="stu_num5" class="form-control"
                                   value="<?= $row1['tel'] ?>">
                            <span class="glyphicon form-control-feedback"></span>
                            <span class="help-block hidden">选填(注：电话号码为8位或11位)</span>
                        </div>
                    </div>

                    <!--籍贯-->
                    <div class="form-group has-feedback">
                        <label for="stu_num6" class="control-label col-sm-2">籍贯</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num6" id="stu_num6" class="form-control"
                                   value="<?= $row1['Origo'] ?>">
                            <span class="glyphicon form-control-feedback"></span>
                            <span class="help-block hidden">籍贯不可为空</span>
                        </div>
                    </div>

                    <!--居住证-->
                    <div class="form-group has-feedback">
                        <label for="stu_num7" class="control-label col-sm-2">地址</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num7" id="stu_num7" class="form-control"
                                   value="<?= $row1['address'] ?>">
                            <span class="glyphicon form-control-feedback"></span>
                            <span class="help-block hidden">居住证地址不可为空</span>
                        </div>
                    </div>

                    <!--注册时间-->
                    <div class="form-group has-feedback">
                        <label for="stu_num8" class="control-label col-sm-2">注册时间</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num8" id="stu_num8" class="form-control" disabled="disabled"
                                   title="注册时间不可修改" value="<?= $row1['time'] ?>">
                        </div>
                    </div>

                    <!--档案编号-->
                    <div class="form-group has-feedback">
                        <label for="stu_num9" class="control-label col-sm-2">档案编号</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num9" id="stu_num9" class="form-control" disabled="disabled"
                                   title="档案编号不可修改" value="<?= $row1['file_number'] ?>">
                        </div>
                    </div>

                    <!--科目类别-->
                    <div class="form-group has-feedback">
                        <label for="stu_num10" class="control-label col-sm-2">科目类别</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num10" id="stu_num10" class="form-control" disabled="disabled"
                                   title="科目类别不可修改" value="<?= $row1['sid'] ?>">
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2" align="center">
                        <input type="submit" class="exambtn" name="submit_a"
                               value="确认修改">
                    </div>
                </div>

                <!--<div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2" align="right">
                        <input type="button"  value="我的考试进度" class="exambtn"
                               onclick="window.location.href='./stu_exam_sch.php'">

                    </div>
                </div>-->
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit_a'])) {
    $uname = $_POST['stu_num1'];
    $Nname = $_POST['stu_num3'];
    $NPID = $_POST['stu_num4'];
    $Ntel = $_POST['stu_num5'];
    $Norigo = $_POST['stu_num6'];
    $Naddress = $_POST['stu_num7'];
    $rs = $mysqli->query("select uid from user where username='$username1'");
    while($rw = $rs->fetch_assoc()){
        $idid = $rw['uid'];
    }
    $mysqli->query("update user set username='$uname',Sname='$Nname',Pid='$NPID',tel='$Ntel',Origo='$Norigo',address='$Naddress' where uid='$idid'") or die("执行失败！");
    echo "<script language=javascript>alert('修改成功！');history.back();</script>";
    /* } else {
         echo "<script language=javascript>alert('操作失败！');history.back();</script>";
     }*/

}
?>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        //判断用户名是否为2-10个字符
        $('#stu_num1').on('blur', function () {
            var num = $(this).val();
            if (num.match(/^.{2,10}$/)) {
                $(this).parents('.form-group').addClass('has-success');
                $(this).siblings('.glyphicon').addClass('glyphicon-ok');
            } else {
                $(this).parents('.form-group').addClass('has-error');
                $(this).siblings('.glyphicon').addClass('glyphicon-remove');
                $(this).siblings('.help-block').removeClass('hidden');
            }
        }).on('focus', function () {
            $(this).parents('.form-group').removeClass('has-success has-error');
            $(this).siblings('.glyphicon').removeClass('glyphicon-ok glyphicon-remove');
            $(this).siblings('.help-block').addClass('hidden');
        });

        //判断真实姓名是否为空
        $('#stu_num3').on('blur', function () {
            var num = $(this).val();
            if (num.match(/\S/)) {
                //if(num.match(/^\d{10}$/)){
                $(this).parents('.form-group').addClass('has-success');
                $(this).siblings('.glyphicon').addClass('glyphicon-ok');
            } else {
                $(this).parents('.form-group').addClass('has-error');
                $(this).siblings('.glyphicon').addClass('glyphicon-remove');
                $(this).siblings('.help-block').removeClass('hidden');
            }
        }).on('focus', function () {
            $(this).parents('.form-group').removeClass('has-success has-error');
            $(this).siblings('.glyphicon').removeClass('glyphicon-ok glyphicon-remove');
            $(this).siblings('.help-block').addClass('hidden');
        });

        //判断身份证是否为空
        $('#stu_num4').on('blur', function () {
            var num = $(this).val();
            if (num.match(/^\d{18}$/)) {
                //if(num.match(/^\d{10}$/)){
                $(this).parents('.form-group').addClass('has-success');
                $(this).siblings('.glyphicon').addClass('glyphicon-ok');
            } else {
                $(this).parents('.form-group').addClass('has-error');
                $(this).siblings('.glyphicon').addClass('glyphicon-remove');
                $(this).siblings('.help-block').removeClass('hidden');
            }
        }).on('focus', function () {
            $(this).parents('.form-group').removeClass('has-success has-error');
            $(this).siblings('.glyphicon').removeClass('glyphicon-ok glyphicon-remove');
            $(this).siblings('.help-block').addClass('hidden');
        });

        //判断手机号码为几位
        $('#stu_num5').on('blur', function () {
            var num = $(this).val();
            if (num.match(/^\d{11}$/)||num.match(/^\d{8}$/)||!num.match(/\S/)) {
                //if(num.match(/^\d{10}$/)){
                $(this).parents('.form-group').addClass('has-success');
                $(this).siblings('.glyphicon').addClass('glyphicon-ok');
            } else {
                $(this).parents('.form-group').addClass('has-error');
                $(this).siblings('.glyphicon').addClass('glyphicon-remove');
                $(this).siblings('.help-block').removeClass('hidden');
            }
        }).on('focus', function () {
            $(this).parents('.form-group').removeClass('has-success has-error');
            $(this).siblings('.glyphicon').removeClass('glyphicon-ok glyphicon-remove');
            $(this).siblings('.help-block').addClass('hidden');
        });

        //判断籍贯是否为空
        $('#stu_num6').on('blur', function () {
            var num = $(this).val();
            if (num.match(/\S/)) {
                //if(num.match(/^\d{10}$/)){
                $(this).parents('.form-group').addClass('has-success');
                $(this).siblings('.glyphicon').addClass('glyphicon-ok');
            } else {
                $(this).parents('.form-group').addClass('has-error');
                $(this).siblings('.glyphicon').addClass('glyphicon-remove');
                $(this).siblings('.help-block').removeClass('hidden');
            }
        }).on('focus', function () {
            $(this).parents('.form-group').removeClass('has-success has-error');
            $(this).siblings('.glyphicon').removeClass('glyphicon-ok glyphicon-remove');
            $(this).siblings('.help-block').addClass('hidden');
        });

        //判断地址是否为空
        $('#stu_num7').on('blur', function () {
            var num = $(this).val();
            if (num.match(/\S/)) {
                //if(num.match(/^\d{10}$/)){
                $(this).parents('.form-group').addClass('has-success');
                $(this).siblings('.glyphicon').addClass('glyphicon-ok');
            } else {
                $(this).parents('.form-group').addClass('has-error');
                $(this).siblings('.glyphicon').addClass('glyphicon-remove');
                $(this).siblings('.help-block').removeClass('hidden');
            }
        }).on('focus', function () {
            $(this).parents('.form-group').removeClass('has-success has-error');
            $(this).siblings('.glyphicon').removeClass('glyphicon-ok glyphicon-remove');
            $(this).siblings('.help-block').addClass('hidden');
        });

    });
</script>
</body>
</html>
