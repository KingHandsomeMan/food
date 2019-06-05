<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/7
 * Time: 22:21
 */
header("Content-type:text/html;charset=utf-8;");

/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', '', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);
session_start();
$username = $_SESSION['username'];

//数据库查询语句
$sql1 = "select username from user where username='$username'";
$result1 = $mysqli->query($sql1);

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学员密码修改</title>
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
            <h2 class="text-center">密码修改</h2><br>

            <form action="" method="post" class="form-horizontal">

                <?php
                while ($row1 = $result1->fetch_assoc()) {
                    ?>
                    <!--用户名-->
                    <div class="form-group has-feedback">
                        <label for="stu_num1" class="control-label col-sm-2">用户名</label>

                        <div class="col-sm-10">
                            <input type="text" name="stu_num1" id="stu_num1" class="form-control" disabled="disabled"
                                   value="<?= $row1['username'] ?>">
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <label for="stu_pwd1" class="control-label col-sm-2">新密码</label>

                    <div class="col-sm-10">
                        <input type="password" name="stu_pwd1" id="stu_pwd1" class="form-control">
                        <span class="glyphicon form-control-feedback"></span>
                        <span class="help-block hidden">密码长度为6-16个之间</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="stu_pwd2" class="control-label col-sm-2">确认密码</label>

                    <div class="col-sm-10">
                        <input type="password" name="stu_pwd2" id="stu_pwd2" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input type="submit" name="submit_a" class="btn btn-primary btn-block" value="确认修改">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit_a'])) {
    $upsw = $_POST['stu_pwd1'];
    $ucpsw = $_POST['stu_pwd2'];
    if ($upsw == null) {
        echo "<script language=javascript>alert('错误提示：\\n\\n         请新输入密码！');history.back();</script>";
    }elseif($ucpsw == null) {
        echo "<script language=javascript>alert('错误提示：\\n\\n         请再次输入密码以确认密码！');history.back();</script>";
    }elseif ($upsw == $ucpsw) {
            $mysqli->query("update user set password='$upsw' where username='$username'") or die("更新出错！");
            echo "<script language=javascript>alert('成功提示：\\n\\n         修改成功！');
                    //history.back();
                    location.href='../mymain.html';
                </script>";
        } else {
            echo "<script language=javascript>alert('错误提示：\\n\\n         两次密码不一致！');history.back();</script>";
        }
    }

?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        //判断密码是否为2-10个字符
        $('#stu_pwd1').on('blur', function () {
            var num = $(this).val();
            if (num.match(/^.{6,16}$/)) {
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