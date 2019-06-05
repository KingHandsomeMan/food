<?php
session_start();
function authnum()
{
// 1.创建画布
    $width = 80;
    $height = 35;
    $img = imagecreatetruecolor($width, $height);//imagecreatetruecolor:新建一个真彩色图像
    $black = imagecolorallocate($img, 0, 0, 0);//imagecolorallocate:为一幅图像分配颜色
    $gray = imagecolorallocate($img, 200, 200, 200);

// 填充背景
// 填充背景,在 image 图像的坐标 x，y（图像左上角为 0, 0）处用 color 颜色执行区域填充
//（即与 x, y 点颜色相同且相邻的点都会被填充）。
    imageFill($img, 0, 0, $gray);

// 2.绘制验证码（在图像中添加文字，即添加验证码这个字符串）
    $numbers = range(0,9);//产生随机数
  //  $bigCharacters = range('A','Z');//产生随机字母
    $smallCharacters= range('a','z');//产生随机字母
    $list = array_merge($numbers, $smallCharacters);
    //$list = array_merge($list, $smallCharacters);
    $n = count($list)-1;
    $authnum = '';
    for($i=0; $i<4; $i++){ //产生一个长度为4的验证码，验证码中的字符来源于数组list
        $randnum = rand(0,$n);//随机产生list数组的下标值
        $authnum .= $list[$randnum];
    }
    /*bool imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
     *imagestring() 用 col 颜色将字符串 s 画到 image 所代表的图像的 x，y 坐标处（这是字符串左上角坐标，整幅图像的左上角为 0，0）。
    如果 font 是 1，2，3，4 或 5，则使用内置字体。 */
    imagestring($img, 100, 20, 9, $authnum, $black);

// 加入干扰像素
    for ($i = 0; $i < 100; $i++) {
        $randcolor = imagecolorallocate($img, rand(0, 250), rand(0, 250), rand(0, 250));
        /*imagesetpixel:画一个单一像素，在 image 图像中用 color 颜色在 x，y 坐标（图像左上角为 0，0）上画一个点。*/
        imagesetpixel($img, rand() % $width, rand() % $height, $randcolor);
    }

// 3.输出图形
    header('Content-type: image/jpeg');
    imagejpeg($img);

// 4.释放内存
    imageDestroy($img);

//$authnum = md5($authnum);  //加密
//选择 cookie
    SetCookie("identifyingCode", $authnum, time() + 7200, "/");
//选择 Session
    $_SESSION["identifyingCode"] = $authnum;
    return $authnum;
}

$authnum = authnum();
?>