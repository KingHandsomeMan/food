<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 15:27
 * 作用：检测登录信息的合法性
 */
session_start();
require "conn.php";


$username = $_POST['userName'];
$password = $_POST['password'];
$code = $_POST['code'];
$_SESSION['username'] = $username;

//判断登录角色
if($code == 0){
    $sql = "select * from user where username = '$username'and password = '$password'";
}else{
    $sql = "select * from trainer where tname = '$username'and tpassword = '$password'";
}

//判断非空
if($username==''){
    echo "<script>alert('请输入用户名');</script>";
    exit;
}
if($password==''){
    echo "<script>alert('请输入密码');</script>";
    exit;
}



$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
    echo "<script>alert('success');location='index4manage.php'</script>";
}else{
    echo "<script>alert('warning!');location='login 1.html'</script>";
    exit;
}