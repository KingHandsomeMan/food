<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8
 * Time: 10:39
 */
//生成验证码的背景
header('Content-type:image/jpeg;');
//背景图的尺寸
$width=60;
$height=15;
$img=imagecreatetruecolor($width,$height);
//分配颜色
$white=imagecolorallocate($img,0xff,0xff,0xff);
//填充颜色到画布
imagefill($img,0,0,$white);
//生成验证码的值
$chars='1234567890';
$chars_len=strlen($chars);
$code_len=5;//验证码长度
$code="";//初始化验证码字符集
for($i=1;$i<$code_len;++$i){
    $rand=mt_rand(0,$chars_len-1);//随机取出0-9的任意一个数字
    $code.=$rand;//将取出的数字连接在一起
}
//存入session中，用验证
session_start();
$_SESSION['ver_code']=$code;
//随机分配字符串颜色
$str_color=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
//计算字符串的居中显示
//字符串的大小
$font=5;
//画布尺寸
$img_w=imagesx($img);
$img_h=imagesy($img);
//字体的尺寸
$font_w=imagefontwidth($font);
$font_h=imagefontheight($font);
//字符串的尺寸
$code_w=$font_w*$code_len;
$code_h=$font_h;
$x=($img_w-$code_w)/2;
$y=($img_h-$code_h)/2;
//把验证码输出在画布上
imagestring($img,$font,$x,$y,$code,$str_color);
//直接输出
imagejpeg($img);
imagedestroy($img);

?>