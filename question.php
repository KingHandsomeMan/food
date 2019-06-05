<?php
session_start();
$a=$_SESSION["un"];
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_GET['name'])){
    $name = $_GET['name'];
}
?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>我的看法</title>
  </head>
  <body>





        <div class="modal "id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">发布提示</h4>
                            <button data-dismiss="modal" class="close">
                                <span>&times;</span>
                            </button>
                        </div>

            
                        <div class="modal-body">
                            <p>是否发布到网页？</p>
                        </div>
                        <div class="modal-footer">
                            <?php
                            $mysqli  = new mysqli("localhost","root","sise","foods")  ;
                            $char="utf8";
                            mysqli_set_charset($mysqli,$char);
                            $result = $mysqli->query("select * from  food where foodid='$id'");
                            ?>

                            <?php
                            while ($row=$result->fetch_array()) {
                            ?>
                            <button type="button"class="btn btn-secondary" data-dismiss="modal" >再想想</button>
                           
                            <button name="submit" type="button"class="btn btn-primary delete"><a  style="color:white">马上发布</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal "id="mymodal2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">取消发布提示</h4>
                                <button data-dismiss="modal" class="close">
                                    <span>&times;</span>
                                </button>
                            </div>
                            
                
                            <div class="modal-body">
                                <p>是否取消发布？所写内容将全部清空！</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button"class="btn btn-secondary" data-dismiss="modal" >再想想</button>

                                <button type="button"class="btn btn-primary" ><a href="#" style="color: #ffffff;">确定</a></button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
        }
        ?>

    <div class="container text-center mt-3">
        <form method="post">

        <?php
        $mysqli  = new mysqli("localhost","root","sise","foods")  ;
        $char="utf8";
        mysqli_set_charset($mysqli,$char);
        $result = $mysqli->query("select * from  food where foodid='$id'");
        ?>

        <?php
        while ($row=$result->fetch_array()) {
            ?>
            <div class="col-md-3 offset-9 col-4 offset-8 mt-3 ">

                <a href="lokinfo.php?id=<?php echo $row["foodid"] ?>& name=<?php echo $row["foodname"] ?>">返回上页</a>
            </div>

        <?php
        }
        ?>
        <h3>我的看法</h3>
        <div class="form-group row mt-5">
                <div  class="col-md-2 col-4"  >
                       <i class="fas fa-user"style="color:white"></i>
               
                        <label class="col-form-label" style="font-size: 20px" > &nbsp;&nbsp;&nbsp;名字 :</label>
                 </div>     
                      <div  class="col-md-10 col-8">
                        <input type="text" name="name" id="" placeholder="<?=$a?>" class="form-control">
                      </div>
                </div><br>


                <div class="form-group row mt-3">
                        <div  class="col-md-2 col-4"  >
                               <i class="fas fa-user"style="color:white"></i>
                       
                                <label class="col-form-label" style="font-size: 20px" > &nbsp;&nbsp;&nbsp;内容:</label>
                         </div>
                    <div  class="col-md-10 col-8">
                        <input type="text" name="comment" placeholder="说说你的看法" id="" class="form-control">
                    </div>
                        </div><br>

                        <div class="col-md-12 ">
                             <button name="submit" class="btn btn-primary " >发布</button>
                            <a class="btn btn-secondary " href="" role="button" data-toggle="modal" data-target="#mymodal2">取消</a>
                            <?php

                            if(isset($_POST['submit'])) {
                                $name = $_POST['name'];
                                $comment = $_POST['comment'];

                                if($name==""||$comment==""){
                                    echo"<script>alert('发布失败，名字和内容不能为空！')</script>";
                                }
                                else{

                                $mysqli = new mysqli("localhost", "root", "sise", "foods");

                                $char = "utf8";
                                mysqli_set_charset($mysqli,$char);

                                $sql = "INSERT INTO comment(id,name,comments) VALUES('".$id."','".$name."','".$comment."')";


                                if($mysqli->query($sql)==true){
                                    echo"<script>alert('发布成功!')</script>";
                                } }

                            }
                            ?>

                                <!-- <a style="c olor:white" href="index.php"><button class="form-control btn-primary" type="submit"  class=" ">登录</button></a> -->
                        </div>


        </form>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
  </body>
</html>
