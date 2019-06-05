<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 15:33
 * 作用：连接数据库
 */
//header("Content-type:text/html;charset=utf-8");
$conn=new mysqli();
$conn->connect('localhost','root','');
$conn->select_db('test');
$conn->set_charset("utf8");  //链接数据库
?>