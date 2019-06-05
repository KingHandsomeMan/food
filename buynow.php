<?php
session_start();

$a=$_SESSION["un"];
?>
<!--获取上一个页面数据的值-->
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(isset($_GET['name'])){
    $mname = $_GET['name'];
}

?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title><?=$mname?>购买</title>

    <style type="text/css">
        .fa-star{
            font-size:35px;
            color: #ddd;
            transition: transform 0.5s;
        }
        .fa-comment-alt{
            font-size:30px;
            color: #ddd;
            transition: transform 0.5s;
        }
        .fa-thumbs-up{
            font-size:30px;
            color: #ddd;
            transition: transform 0.5s;
        }
        .like{
            color: red;
        }
        .fa-thumbs-up:active{
            color: red;
            transform: scale(1,1);
            transition: transform 0.1s;
        }
        .fa-thumbs-down{
            font-size: 30px;
            color: #ddd;
            transition: transform 0.5s;
        }
        .disslike{
            color: rgb(197, 228, 141);
        }
        .fa-thumbs-down:active{
            color: rgb(197, 228, 141);
            transform: scale(1,1);
            transition: transform 0.1s;
        }

        .b1{
            font-family: 楷体;
            font-size: 30px;
        }
        .b2{
            font-family: 宋体;
            font-size: 20px;
        }
        .b3{
            font-family: 宋体;
            font-size: 25px;
        }
        *{
            margin: 0;
            padding: 0;
            overflow-x: hidden; overflow-y: auto;
        }

        #wrap{
            width: 100%;
            height: auto;
            border:1px solid ;
            /* margin: 100px 0; */
            background: #3764a8;
        }
        #content ul{
            width: 980px;
            height: 40px;
            margin: auto;
            position: relative;
        }
        ul li{
            list-style: none;
            float: left;
            position: relative;
            z-index: 5;
            /*width: 60px;*/
            /*text-align: center;*/
        }
        ul li a{
            text-decoration: none;
            color: white;
            font-size: 14px;
            line-height: 40px;
            padding: 0 10px;
            margin-right: 2px;
        }
        ul li a:hover{
            color: rgb(250, 248, 248);
            text-decoration: none;
        }
        #slider{
            width: 50px;
            height: 40px;
            background: rgb(230, 179, 15);
            position: absolute;
            top: 0;
            left: 0;
            /*opacity: 0.8;*/
        }

        .tesejieshao{
            font-family: "宋体";
            font-size: 24px;
        }
    </style>

</head>
<body>

<?php



?>


<?php
$mysqli  = new mysqli("localhost","root","sise","foods")  ;
$char="utf8";
mysqli_set_charset($mysqli,$char);
$result = $mysqli->query("select * from  food where foodid='$id'");
?>

<?php
while ($row=$result->fetch_array()) {

?>
<div class="container" style="height: 310px">
    <div class="col-md-3 offset-9 col-4 offset-8 mt-3 ">
        <a href="index.php">返回首页</a>
    </div>
    <?php
    }
    ?>

    <div class="row form-group " style="height: 250px">
        <!-- <div class="col-md-12 col-12 "> -->
        <div class="col-md-4  col-7">
            <img src="image/<?php echo $id ?>.jpg" alt="<?=$mname?>" >
        </div>

        <?php
        $mysqli  = new mysqli("localhost","root","sise","foods")  ;
        $char="utf8";
        mysqli_set_charset($mysqli,$char);
        $result = $mysqli->query("select * from  food where foodid='$id'");


        while ($row=$result->fetch_array()) {

            $price=$row["price"];

            ?>
            <div class="input-group input-group-sm col-md-8 col-5  ">
                <b class="tesejieshao">美食特色</b>
                &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row["more"] ?><br>
                &nbsp; &nbsp; <h6 style="color: rosybrown">价格：<?php echo $row["price"] ?>元/份</h6>
                &nbsp; &nbsp; <h5 style="color:lightseagreen"><?php echo $row["faddress"] ?></h5>
                &nbsp; &nbsp; <h5><?php echo $row["foodstore"] ?></h5>
                <!--     <input type="text" style="" name="" id=""  class=" form-control">
                     <div class="input-group-append">
                       <button type="submit" class="btn btn-warning">搜索</button>
                     </div> -->
            </div>
        <?php
        }
        ?>
        <!-- </div> -->
    </div>
</div>
<!--
<nav class="navbar navbar-dark navbar-expand-md sticky-top fixed-top col-12 ">


    <div id="wrap">
        <div id = "content">


            <ul >

                <div id = "slider" class="navbar-collapse collapse"></div>

                <button type="button" class=" navbar-toggler" data-toggle="collapse" data-target="#mynav">
                    <span class=" navbar-toggler-icon"></span>
                </button>
                <li style="background: rgb(230, 179, 15);"><a href="###"><?=$mname?></a></li>
                <li ><a href="###">肠粉</a></li>
                <li ><a href="###">粥</a></li>
                <li><a href="###">烧烤</a></li>
                <li ><a href="###">糕点</a></li>
                <li><a href="###">下午茶</a></li>
                <li ><a href="###">蔬果</a></li>
                <li ><a href="###">生鲜</a></li>
                <li><a href="###">粤菜</a></li>
                <li><a href="###">川菜</a></li>
                <li><a href="###">湘菜</a></li>
                <li ><a href="###">日本菜</a></li>
                <li ><a href="###">西餐</a></li>


                <li ><a href="###">人气餐厅</a></li>
                <li><a href="###">更多</a></li>
            </ul>
        </div>
    </div>
</nav>
-->
<hr>
<div class="container">
    <center><b class="b2">请填写<?=$mname?>购买信息</b></center>


        <form method="post" class="mt-5">

            <div>
                <div>

                    <b class="sutdent_font">姓&nbsp;&nbsp;&nbsp;名：</b>
                    <input type="text" style="height: 50px;width: 400px" name="name" placeholder="<?php echo $a?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b class="sutdent_font">电   话：</b>
                    <input type="text" style="height: 50px;width: 400px" name="phone" placeholder="输入你的联系方式">
                </div>


                <br>
                <div>
                    <b class="sutdent_font address">地&nbsp;&nbsp;&nbsp;址：</b>
                    <input type="text" style="height: 50px;width: 1000px" name="address" placeholder="你的居住地">
                </div>
                <br>
<div>


</div>

                <div>
                <b class="sutdent_font">备&nbsp;&nbsp;&nbsp;注：</b>
                    <input type="text" style="height: 50px;width: 1000px" name="other" placeholder="口味、或者要求">
                </div>
                <br>

                <div>
                    <button class="btn btn-primary form-control" role="button" id="submit" name="submit">确定购买</button>
                </div>
                <?php

                function GetfourStr($len)
                {
                    $chars_array = array(
                        "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"
                    );
                    $charsLen = count($chars_array) - 1;

                    $outputstr = "";
                    for ($i=0; $i<$len; $i++)
                    {
                        $outputstr .= $chars_array[mt_rand(0, $charsLen)];
                    }
                    return $outputstr;
                }
                $fnumber =GetfourStr(8) ;

                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $other = $_POST['other'];


                    $mysqli = new mysqli("localhost", "root", "sise", "foods");

                    $char = "utf8";
                    mysqli_set_charset($mysqli,$char);


                    $sql = "INSERT INTO foodorder(id,name,phone,address,other,master,price,fname,fnumber) VALUES('".$id."','".$name."','".$phone."','".$address."','".$other."','".$a."','".$price."','".$mname."','".$fnumber."')";


                    if($mysqli->query($sql)==true){
                        echo"<script>alert('购买成功，请注意我们是货到付款!')</script>";
                    }else{
                        echo"<script>alert('购买失败，请填写所有信息！')</script>";

                    }

                }
                ?>
            </div>


    </form>


</div>









<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $("li").mouseenter(function(){
        $("#slider").animate({
            left:$(this).offset().left-$('li').eq(0).offset().left,
        },50)
        $("#slider").css({
            width:$(this).width(),
        })

    })

    $("ul").mouseleave(function(){
        $("#slider").css({
            width:'50',
        })
        $("#slider").animate({
            left:"0",
        },200)
    })

</script>
<script>
    $(document).ready(function(){
        $('.fa-thumbs-up').on('click',function(){
            $(this).toggleClass('like')
        })
    })
</script>

<script>
    $(document).ready(function(){
        $('.fa-thumbs-down').on('click',function(){
            $(this).toggleClass('disslike')
        })
    })
</script>
</div>
</body>
</html>
<footer>
    <div class="mt-5">
        <img src="image/yejiao.jpg" alt="" class=" d-block" width="100%">
    </div>
</footer>