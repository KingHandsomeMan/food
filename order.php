<?php
$mysqli  = new mysqli("localhost","root","sise","foods")  ;
$char="utf8";
mysqli_set_charset($mysqli,$char);
$result = $mysqli->query("select * from  food");
$store = $mysqli->query("select * from store");

session_start();
$a=$_SESSION["un"];

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>我的订单</title>
    <style type="text/css">
        <!--
        .STYLE4 {font-size: 13px}
        .STYLE5 {font-family: "华文琥珀"; font-size: 20px;}
        .STYLE6 {color: #990000}
        -->
    </style>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-md sticky-top fixed-top" style="background:rgb(236, 198, 141)">
    <div class="container">
        <a class="navbar-brand fontsize1" href=""style="color:black"><img src="image/meishi.png" alt="">美食家</a>
        <button type="button" class=" navbar-toggler" data-toggle="collapse" data-target="#mynav">
            <span class=" navbar-toggler-icon"></span>
        </button>
        <!-- 可折叠 -->
        <div class=" navbar-collapse collapse" id="mynav" >
            <ul class="navbar-nav fontsize" >
                <!-- active表示当前选中会突出显示 -->

                <li class="nav-item">
                    <a href="index.php" class="nav-link btn fontsize"style="color:black"  >首页</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" style="color:black">网红店家</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" style="color:black">朋友小聚</a>
                </li>

                <li class="nav-item active dropdown" >
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"style="color:black">其他</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">限时秒杀</a>
                        <a href="" class="dropdown-item">家庭聚餐</a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">关于我们</a>
                    </div>
                </li>


            </ul>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="ml-md-2">
                <div class="input-group input-group-sm">
                    <input type="text" style="width:300px" name="lovefood" id=""  class=" form-control" placeholder="输入美食名称、店家名称或者菜品类型">
                    <select name="code" class="input-group-append" >
                        <option value="0">美食</option>
                        <option value="1">商家</option>
                    </select>
                    <div class="input-group-append">
                        <button type="submit" name="serch" class="btn btn-warning">搜索</button>
                    </div>
                </div>




            </form>



            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="home.html" class="nav-link"style="color:black">注销&nbsp;<b style="color: #28a4c9">[<?=$a?>]</b></a>
                </li>
                <li class="nav-item">
                    <a href="order.php" class="nav-link"style="color:black">我的订单</b></a>
                </li>

                <li class="nav-item  dropdown" >
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"style="color:black">客服</a>
                    <div class="dropdown-menu">

                        <a href="" class="dropdown-item text-center">反馈</a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">联系客服：0759-****</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>

<table width="450" height="28" class="mt-5" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" class="STYLE5 STYLE6 ">订单详细信息</td>
    </tr>
</table>
<table  border="1" align="center" class="mt-3"  cellpadding="0" cellspacing="1" bgcolor="#990000">
    <tr>
        <td width="100" align="center" bgcolor="#FFFFFF" class="STYLE4">订单编号</td>
        <td width="200" align="center" bgcolor="#FFFFFF" class="STYLE4">美食名称</td>
        <td width="202" align="center" bgcolor="#FFFFFF" class="STYLE4">价格</td>
        <td width="159" align="center" bgcolor="#FFFFFF" class="STYLE4">电话</td>
        <td width="282" height="25" align="center" bgcolor="#FFFFFF" class="STYLE4">地址</td>
        <td width="180" height="25" align="center" bgcolor="#FFFFFF" class="STYLE4">操作</td>
    </tr>

    <?php
    $mysqli  = new mysqli("localhost","root","sise","foods")  ;
    $char="utf8";
    mysqli_set_charset($mysqli,$char);
    $result = $mysqli->query("select * from  foodorder where master = '$a' ");


    while ($myrow=$result->fetch_array()) {




                ?>
                <tr>
                    <td height="53" align="center" bgcolor="#FFFFFF" class="STYLE4"><span class="STYLE2"> <?php echo $myrow['fnumber'];?></span></td>
                    <td height="53" align="center" bgcolor="#FFFFFF" class="STYLE4"><span class="STYLE2"><?php echo $myrow['fname'];?></span></td>
                    <td height="53" align="center" bgcolor="#FFFFFF" class="STYLE4"><span class="STYLE2"><?php echo $myrow['price'];?>/元</span></td>
                    <td height="53" align="center" bgcolor="#FFFFFF" class="STYLE4"><span class="STYLE2"><?php echo $myrow['phone'];?></span></td>
                    <td height="53" align="center" bgcolor="#FFFFFF" class="STYLE4"><span class="STYLE2"><?php echo $myrow['address'];?></span></td>
                    <td height="53" align="center" bgcolor="#FFFFFF" class="STYLE4"><span class="STYLE2"><button onclick="del()">取消订单</button></span></td>
                </tr>
            <?php


    }
    ?>




</table>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript"></script>

<script>
    function del(){
        if(confirm("确定要删除吗？")){
            alert('删除成功！');
            return true;
        }else{
            return false;
        }
    }
</script>

</body>
</html>
<footer>
    <div class="mt-5">
        <img src="image/yejiao.jpg" alt="" class=" d-block" width="100%">
    </div>
</footer>