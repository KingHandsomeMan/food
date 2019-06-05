<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 10:37
 * 作用:检测注册信息的合法性
 */
session_start();
//header("Content-type:text/html;charset=utf8");
//$link = mysqli_connect('localhost','root','123','bookstore');
//require('database.php');
//$conn=new mysqli();
//$conn->connect('localhost','root','123');
//$conn->select_db('test');
//$conn->set_charset("utf8");  //链接数据库
require "conn.php";

//mysqli_set_charset($link,'utf8'); //设定字符集
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$pwdcdonfirm=$_POST['pwdcdonfirm'];
$yzm=$_POST['yzm'];

//判断非空合法性
if($name==''){
    echo"<script>alert('你的用户名不能为空，请重新输入');</script>";
    exit;
}
if($pwd==''){
    echo"<script>alert('你的密码不能为空，请重新输入');</script>";
    exit;
}

//判断密码是否合法
if($pwd != $pwdcdonfirm){
    echo"<script>alert('你输入的两次密码不一致，请重新输入');</script>";
    exit;
}

//判断验证码合法性
if($yzm!=$_SESSION['ver_code']){
    echo"<script>alert('你的验证码不正确，请重新输入');</script>";
    exit;
}
//$insert_sql="insert into user(username,password)values($name,$pwd);";
//$stmt=mysqli_prepare($conn,$insert_sql);
//mysqli_stmt_bind_param($stmt,'ss',$name,$pwd);
//$result_insert=mysqli_stmt_execute($stmt);//执行查询前获得mysqli_stmt_execute($stmt)返回值
//$search="select username from user where username='$name'";
//$res=mysql_query($search);

//查询数据库中是否含有该条记录
$search_sql = "select * from user where username='$name'";
$result_search = mysqli_query($conn,$search_sql);
//$row_search = $result_search->fetch();
$row_search = mysqli_fetch_assoc($result_search);
//判断是否存在相同用户名
if($row_search){
    echo "<script>alert('您输入的用户名已存在,请重新注册！');location='register.html'</script>";
    exit;
}else{
    $sql = "insert into user(username,password)values('$name','$pwd')";

    //注册
    if($result_insert = mysqli_query($conn,$sql)) {
        echo "<script>alert('您已注册成功，返回登录');location='../login1.html'</script>";
        exit;
    }else{
        echo "注册失败";
    }
}





?>