<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 16:53
 * 作用：提交选课预约
 */
require "conn.php";
session_start();
$username = $_SESSION['username'];
$lid = $_POST['lid'];

$sql = "insert into selector VALUES ($lid,'$username')";
if($result =$db->exec($sql)){
    echo "<script>alert('提交成功');</script>";
//    header("Location:http://localhost:63342/beike11543/index.php");
    exit;
}else{
    echo "<script>alert('预约失败，人数已满');</script>";
    exit;
}
