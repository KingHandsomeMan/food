<?php
header("Content-type:text/html;charset=utf-8;");
session_start();
$a=$_SESSION["un"];
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>首页</title>
</head>

<body>


<style>
    ul { list-style: none; margin: 0; padding: 0; }
    #nav_container4 { width:auto;  }
    #nav_container4 li { padding:0px; margin-bottom:1px; float:left;  }
    #nav_container4 a:link, #nav_container4 a:visited, #nav_container4 a:active { width:145px; background: url(image/bg5.gif) 0px -70px repeat-x; font-weight:bold; height:30px; padding-top:5px; display:block; text-align:center; border-bottom:1px solid rgb(177, 119, 119); text-decoration:none; color:#333; }
    #nav_container4 a:hover { color:#000; background: url(image/bg5.gif) 0px 0px repeat-x; }

    .bigger{
        transform: scale(2,2);
        transition: transform 0.1s;
    }
    .card img:hover{

        transform: scale(1.02,1.02);
        transition: transform 0.1s;
    }

    .borderlook{
        border-color: rgb(135, 183, 236);
        border-width: 1px;
        border-style: solid;
        width: 100%;
        height: auto;
    }
    .a{
        color: rgb(250, 245, 245);

    }
    a:hover{
        color: white;
        text-decoration-line: none;
    }

</style>





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

            <form action="serch.php" method="post" class="ml-md-2">
                <div class="input-group input-group-sm">
                    <input type="text" style="width:300px" name="" id=""  class=" form-control" placeholder="输入美食名称、店家名称或者菜品类型">
                    <select class="input-group-append">
                        <option value="0">美食</option>
                        <option value="1">商家</option>
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-warning">搜索</button>

                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="home.html" class="nav-link"style="color:black">注销&nbsp;<b style="color: #28a4c9">[<?=$a?>]</b></a>
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
<br/><br/><br/><br/><br/><br/>

<!-- <img src=" image/background.png" class="img-responsive center-block container-fluid" > 11-->

<!-- <div class="container">  -->





<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/roller.js" ></script>

<script>
    $('.carousel').carousel({
        interval: 3000
    })

    roller.init('nav_container4','v',-66,0,250,20);
</script>

</body>
</html>
<footer>
    <div class="">
        <img src="image/yejiao.jpg" alt="" class=" d-block" width="100%">
    </div>
</footer>