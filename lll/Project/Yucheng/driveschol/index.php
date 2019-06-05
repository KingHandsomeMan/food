<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/9
 * Time: 16:22
 */
/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', 'sise', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="./u_manage/images/title_icon.png">
    <title>
        SISE一驾通(学员)
    </title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="./css/x-admin.css" media="all">
</head>
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header header-demo">
        <div class="layui-main">
            <a class="logo" href="./index.html">
                <img src="./u_manage/images/title_icon.png" width="250px" height="90px" style="margin-top: 3px;">
            </a>
            <ul class="layui-nav" lay-filter="">
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                ?>
                <?php
                $rs = $mysqli->query("select usericon from user where username='$username'");
                while ($rw = $rs->fetch_assoc()) {
                    ?>
                    <!--用户头像-->
                    <li class="layui-nav-item"><img src="./u_manage/user_icon/<?= $rw['usericon'] ?>"
                                                    class="layui-circle"
                                                    style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
                <?php
                }
                ?>

                <li class="layui-nav-item">
                    <!--用户名-->

                    <a href="javascript:;"><?= $_SESSION['username'] ?></a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                        <dd><a href="login1.html">切换帐号</a></dd>
                        <dd><a href="login1.html">退出</a></dd>
                    </dl>
                    <?php
                    }else{
                        ?>
                        <a href="./login1.html">请登录</a>
                    <?php
                    }
                    ?>
                </li>

                <?php
                if(isset($_SESSION['username'])){
                }else{
                    ?>
                    <li class="layui-nav-item x-index"><a href="./u_manage2/register.php">去注册</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="layui-side layui-bg-black x-side">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
                <!--个人信息-->
                <li class="layui-nav-item">
                    <a class="javascript:;" href="javascript:;" _href="./u_manage/user_info.php">
                        <i class="layui-icon" style="top: 3px;">&#xe612;</i><cite>我的信息</cite>
                    </a>
                    <dl class="layui-nav-child">
                        <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./u_manage/user_info.php">
                                <cite>我的个人信息</cite>
                            </a>
                        </dd>
                        </dd>

                        <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./u_manage/user_icon.php">
                                <cite>修改头像</cite>
                            </a>
                        </dd>
                        </dd>

                        <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./u_manage/user_info_manage.php">
                                <cite>修改我的信息</cite>
                            </a>
                        </dd>
                        </dd>
                        <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./u_manage/stu_exam_sch.php">
                                <cite>我的考试进度</cite>
                            </a>
                        </dd>
                        </dd>

                        <dd class="">
                        <dd class="">
                            <a href="javascript:;" _href="./u_manage/user_psw_change.php">
                                <cite>修改密码</cite>
                            </a>
                        </dd>
                        </dd>

                    </dl>
                </li>
                <!--课程预约-->
                <li class="layui-nav-item">
                    <a class="javascript:;" href="javascript:;" _href="./lesson.php">
                        <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>预约课程</cite>
                    </a>
                </li>
                <!--查看课程预约情况-->
                <li class="layui-nav-item">
                    <a class="javascript:;" href="javascript:;" _href="./u_manage/stu_exam_sch.php">
                        <i class="layui-icon" style="top: 3px;"><!--&#xe612;-->&#xe62d;</i><cite>课程预约情况</cite>
                    </a>
                </li>


                <!--教学资源区-->
                <li class="layui-nav-item">
                    <a class="javascript:;" href="javascript:;" _href="./message.php">
                        <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>教学资源区</cite>
                    </a>
                </li>



            </ul>
        </div>

    </div>
    <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true">
        <div class="x-slide_left"></div>
        <ul class="layui-tab-title">
            <li class="layui-this">
                首页
                <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
            </li>
        </ul>
        <div class="layui-tab-content site-demo site-demo-body">
            <div class="layui-tab-item layui-show">
                <iframe frameborder="0" src="mymain.html" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
    <div class="site-mobile-shade">
    </div>
</div>
<script src="./lib/layui/layui.js" charset="utf-8"></script>
<script src="./js/x-admin.js"></script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>