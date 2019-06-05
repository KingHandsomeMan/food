<?php
header("Content-type:text/html;charset=utf-8");



if(isset($_POST["submit"])) {
    $name = $_POST["zhanghao"];
    $psw = $_POST["mima"];

    if ($name == "" && $paw == "") {
        echo "
    <script>
     alert('请输入你的账号和密码！');
        history.go(-1);
    </script>
    ";

    } else
    if ($name == "" ) {
        echo "
    <script>
     alert('请输入你的账号！');
        history.go(-1);
    </script>
    ";

    } else
        if ($psw == "" ) {
            echo "
    <script>
     alert('请输入你的密码！');
        history.go(-1);
    </script>
    ";

        }



    else {
        $mysqli  = new mysqli("localhost","root","sise","foods")  ;
        $char="utf8";
        mysqli_set_charset($mysqli,$char);
                 $sql="select name,password from user where name = '$_POST[zhanghao]' and password = '$_POST[mima]'";
                 $result = $mysqli->query($sql);
                 $num = mysqli_num_rows($result);
                 session_start();
                 $_SESSION["un"]=$name;
                 $a= $_SESSION["un"];



                  if($num)
                 {
                    echo "<script language=javascript>
                    alert('欢迎你！$a');
                    window.location.href='index.php';
                    </script>";  
                 }
                 else 
                 
                             {  
                 
                                 echo "<script>alert('用户名或密码不正确！');
                                 window.location.href='register.html';
                                 </script>";
                 
                             } 
                            }
                        }else{
    echo "<script>alert('系统出错！');history.go(-1);</script>";
}
                 

?>