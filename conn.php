<?php
/**
 * Created by PhpStorm.
 * User: 猛
 * Date: 2019/4/20
 * Time: 9:26
 */
$conn=new mysqli();
$conn->connect('localhost','root','sise');
$conn->select_db('foods');
$conn->set_charset("utf8");
?>