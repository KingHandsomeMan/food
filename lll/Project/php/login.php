<?php
$mysqli = new mysqli("localhost","root","sise","test");//连接数据库
   //设置字符集
$char="utf8";
mysqli_set_charset($mysqli,$char);
?>

<html>
<head>
    <title>管理员登录</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/usermanage.css">
</head>
<body bgcolor="#f0f8ff">
<center>
    <script>
        function changing(){
            document.getElementById('checkpic').src="check.php?"+Math.random();//验证码
        }

    </script>
    <br><br><br><br><br><br><br><br>
    <div id="enter" ><br><br><br><br><br><br>
        <div id="id">
            <img src="../image/manage.png" height="300px" width="300px">
        </div>
        <div class="id">
            <form method="post" action="" >
                <b id="font" > 管理员名称：</b>
                <br>
                <input  class="ra"type="text" name="name" size="30" style="height: 40px" placeholder="  用户名"><br>
                <br>
                <b id="font"> 登录密码：</b><br>
                <input class="ra" type="password" name="pwd" size="30"style="height: 40px"  placeholder="  密码"><br>
                <br>
                <b id="font"> 验证码<br>
                    <input class="ra" type="test" name="check" size="30"style="height: 40px" placeholder="  验证码 (区分大小写)" >
                </b><br><br>
                <img id="checkpic" onclick="changing();" src="check.php"/>
                <br><br>
                <input class="enterbutton" type="submit"style="height: 80px;width: 150px" name="log" value="登录" >
        </div>
    </div>
</center>
<?php
header("Content-type:text/html;charset=utf-8;");
$mysqli = new mysqli("localhost","root","sise","test");
$char="utf8";
mysqli_set_charset($mysqli,$char);

$result1 = "";
$name = "";
$pwd = "";
session_start();
function check(){
    $str = $_POST['check'];
    $pwd = $_POST['pwd'];
    $name = $_POST['name'];
    $_SESSION["un"]=$name;
    $a= $_SESSION["un"];
    $mysqli = new mysqli("localhost","root","sise","test");

    $char="utf8";
    mysqli_set_charset($mysqli,$char);

    $sql1 = "SELECT * FROM enter WHERE username = '$name'";
    $sql2 = "SELECT * FROM enter WHERE password='$pwd'AND username='$name'";
    $res1 = $mysqli->query($sql1);
    $res2 = $mysqli->query($sql2);
    $rows1=mysqli_num_rows($res1);
    $rows2=mysqli_num_rows($res2);

    if($name==null) {
        echo "<script language=javascript>alert('请输入管理员名称！');history.back();</script>";

    }else if($pwd==null){
        echo "<script language=javascript>alert('请输入密码！');history.back();</script>";

    }else if($rows1==0) {
        echo "<script language=javascript>alert('该用户不是管理员！请重新输入。');history.back();</script>";

    }else if($rows2==0){
        echo "<script language=javascript>alert('密码错误！请重新输入。');history.back();</script>";

    }else if( $str!==$_SESSION["identifyingCode"] ){
        echo "<script language='JavaScript'>alert(\"验证码错误！\");</script>";

        unset($_POST['register']);
    }else{
        echo "<script language=javascript>alert('欢迎你！$a');window.location.href='../new/index.php';</script>";
    }

}
if(isset($_POST['log'])){
    check();
}
?>
</form>
</body>
</html>
