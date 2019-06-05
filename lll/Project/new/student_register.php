

<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>学员报名注册</title>
</head>
<body id="register_student">
<br>
<h1>学员信息</h1>
<br><br>
<form method="post">

<div>
    <div>

        <b class="sutdent_font">姓   名：</b>
        <input type="text" style="height: 50px;width: 1000px" name="name" placeholder="输入身份证的名字"><br>

    </div>

<br><br>
    <div>
        <b class="sutdent_font">籍   贯：</b>
        <input type="text" style="height: 50px;width: 1000px" name="place" placeholder="输入身份证的籍贯"><br>
    </div>
    <br><br>
    <div>
         <b class="sutdent_font">驾驶证档案编号:</b>
             <input type="text" name="file" style="height: 50px;width: 150px"  placeholder="输入档案上的编号">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b class="sutdent_font">年   龄:</b>
          <input type="text" name="age" style="height: 50px;width: 150px"placeholder="输入你的真实年龄">
    </div>
    <br><br>
    <div>
        <b class="sutdent_font idcard" >身份证号码：</b>
        <input type="text" style="height: 50px;width: 1000px" name="id_card">
    </div>
    <br><br>
    <div>
        <b class="sutdent_font">电   话：</b>
        <input type="text" style="height: 50px;width: 1000px" name="phone">
    </div>
    <br><br>
    <div>
        <b class="sutdent_font style">报考类别：</b>
        <input type="text" style="height: 50px;width: 1000px" name="style">
    </div>
    <br><br>
   <div>
        <b class="sutdent_font address">居住地：</b>
        <input type="text" style="height: 50px;width: 1000px" name="address" >
    </div>
    <br><br><br>

    <!--<div>-->
        <!--<b class="sutdent_font">备注：</b>-->
        <!--<textarea name="description" cols="30" rows="20"></textarea>-->
    <!--</div>-->
    <!--<br><br><br>-->

    <div>
        <button name="yes" class="student_button" style="background: #E3CEAB">确认注册</button>
    </div>
    <?php

    $mysqli = new mysqli("localhost", "root", "sise", "test");//连接数据库
        //设置字符集
    $char = "utf8";
    mysqli_set_charset($mysqli,$char);
    if(isset($_POST['yes'])) {
        $username = $_POST['name'];
        $place = $_POST['place'];
        $file = $_POST['file'];
        $age = $_POST['age'];
        $id_card = $_POST['id_card'];
        $phone = $_POST['phone'];
        $style = $_POST['style'];
        $address = $_POST['address'];

        $sql = "INSERT INTO user(Sname,Origo,file_number,age,Pid,tel,style,address) VALUES
('".$username."','".$place."','".$file."','".$age."','".$id_card."','".$phone."','".$style."','".$address."')";

        if($mysqli->query($sql)==true){
            echo"<script>alert('学员注册成功')</script>";
        }else{
            echo"<script>alert('学员注册失败，请重试！')</script>";
        }
        $mysqli->close();
    }
    ?>
</div>

</form>
</body>
</html>
