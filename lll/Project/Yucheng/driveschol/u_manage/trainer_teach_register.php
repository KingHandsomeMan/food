<?php
/**
 * Created by PhpStorm.
 * User: 铖
 * Date: 2018/7/10
 * Time: 9:23
 */
header("Content-type:text/html;charset=utf-8;");

/*数据库连接，数据库名:test*/
$mysqli = new mysqli('localhost', 'root', '', 'test');
$program_char = "utf8";    //字符编码
mysqli_set_charset($mysqli, $program_char);


?>

    <html>
    <head>
        <meta charset="utf-8">
        <title>教学情况登记</title>
        <style>
            body {
                text-align: center;
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
                height: 400px;
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
    <h3>上课情况登记</h3>

    <form method="post">

        <div id="mycontent" style="margin-top: 10px;">
            <label class="clabel">学员编号</label>
            <input type="text" class="title" name="sid" title="学员编号" placeholder="请输入学员编号">
        </div>
        <br><br>

        <div id="mycontent" style="margin-top: 10px;">
            <label class="clabel">上课时长</label>
            <input type="text" class="title" name="ttime" title="上课时长" placeholder="请输入上课时长">
        </div>
        <br><br>

        <div id="mycontent" style="margin-top: 10px;">
            <label class="clabel">教学情况</label>
            <textarea class="content" name="content" title="教学情况" placeholder="请输入教学情况"></textarea>
        </div>
        <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <input type="submit" class="sbtn" name="share" value="登记">
        </div>
    </form>
    </body>
    </html>

<?php
if (isset($_POST['share'])) {
    $sid = $_POST['sid'];
    $ttime = $_POST['ttime'];
    $content = $_POST['content'];

    $sql1 = "insert into teach_regist(uid,content,t_time) VALUES('$sid','$content','$ttime')" or die("执行出错!");
    if ($mysqli->query($sql1) == true) {
        echo "<script>alert('登记成功!');location.href='../mymain.html';</script>";
    }

}
?>