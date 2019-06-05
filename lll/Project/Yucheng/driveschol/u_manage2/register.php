<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 10:35
 * 作用：注册页面
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册界面</title>
    <script type="text/javascript">
        function checkinput()
        {
            if(myform.name.value=="")
            {
                alert("请输入用户名");
                myform.name.focus();
                return false;
            }
            if (myform.pwd.value=="")
            {
                alert("请输入密码");
                myform.pwd.focus();
                return false;
            }
            if(myform.pwd.value != myform.pwdcdonfirm.value){
                alert("你输入的两次密码不一致，请重新输入！");
                myform.pwd.focus();
                return false;
            }
            if (myform.yzm.value=="")
            {
                alert("请输入验证码");
                myform.yzm.focus();
                return false;
            }
        }
    </script>
    <style type="text/css">

        .container{
    border-radius: 25px;
            box-shadow: 0 0 20px #222;
            width: 380px;
            height: 400px;
            margin: 0 auto;
            margin-top: 200px;
            background-color: #dddddd;
        }
        .right {
    position: relative;
    left: 40px;
            top: 20px;
        }
        input{
    width: 180px;
            height: 25px;
        }
        button{
    background-color: #999999;
            border: none;
            color: #110c0f;
            padding: 10px 70px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            margin-top: 30px;
            margin-left: 50px;
        }
    </style>
</head>
<body background="images/bg.png">
<form action="regcheck.php" method="post"  name="myform" onsubmit=" return checkinput();" >
    <div class="container">
        <div class="right">
            <h2>用户注册</h2>
            <p>用 户 名：<input type="text" name="name" id="name"></p >
            <p>密　　码: <input type="password" name="pwd" id="pwd"></p >
            <p>确认密码: <input type="password" name="pwdcdonfirm" id="pwdconfirm"></p >
            <p>验 证 码：<input type="text" name="yzm" id="yzm">
                <img src="VerificationCode.php" onclick="this.src='img.php?nocache='+Math.random()" style="cursor: pointer">
            <p><button type="submit" value="注册" >立即注册</button></p >
        </div>
    </div>
</form>
</body>
</html>