<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/10
 * Time: 9:23
 */
header("Content-type:text/html;charset=utf-8;");


/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', 'sise', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);
session_start();
$username = $_SESSION['username'];

?>

    <html>
    <head>
        <meta charset="utf-8">
        <title>教学经验分享</title>
        <style>
            body {
                text-align: center;
            }

            .tlabel {
                margin-right: 10px;
                font-size: 22px;
            }

            .title {
                width: 300px;
                height: 35px;
                border-radius: 5px;
                border: 1px solid #BBB5B5;
                float: left;
            }

            .clabel {
                margin-right: 15px;
                font-size: 22px;
                /*background-color: #003399;*/
                float: left;
                margin-left: 38.7%;
            }

            .content {
                text-align:;
                width: 300px;
                height: 450px;
                border-radius: 5px;
                border: 1px solid #BBB5B5;
                float: left;
            }

            .sbtn {
                background-color: #337ab7;
                border-radius: 3px;
                border: none;
                color: #ffffff;
                width: 120px;
                height: 30px;
            }

            .sbtn:hover {
                background-color: #0064A6;
            }

            .sbtn:active {
                background-color: #003399;
            }

        </style>
    </head>
    <body>
    <h3>教学经验分享</h3>

    <form method="post">
        <div id="mycontent" style="margin-top: 10px;">
            <label class="clabel">标题</label>
            <input type="text" class="title" name="title" title="标题" placeholder="请输入标题">
        </div>
        <br><br>

        <div id="mycontent" style="margin-top: 10px;">
            <label class="clabel">内容</label>
            <textarea class="content" name="content" title="内容" placeholder="请输入内容"></textarea>
        </div>
        <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <input type="submit" class="sbtn" name="share" value="发布">
        </div>
    </form>
    </body>
    </html>

<?php
if (isset($_POST['share'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d h:i:s');
    $rs = $mysqli->query("select tid from trainer where tname='$username'");
    while($rw = $rs->fetch_assoc()){
        $idid = $rw['tid'];
    }

    $sql1 = "insert into message(title,content,time,tid) VALUES('$title','$content','$date',$idid)" or die("执行出错!");
    if ($mysqli->query($sql1) == true) {
        echo "<script>alert('分享成功!');location.href='../mymain.html';</script>";
    }

}
?>