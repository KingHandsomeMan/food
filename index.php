<?php
$mysqli  = new mysqli("localhost","root","sise","foods")  ;
$char="utf8";
mysqli_set_charset($mysqli,$char);
$result = $mysqli->query("select * from  food");
$store = $mysqli->query("select * from store");

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

text-decoration-line: none;
}

    </style>
      <div class="modal "id="mymodal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">登录提示 </h4>
                      <button data-dismiss="modal" class="close">
                          <span>&times;</span>
                      </button>
                  </div>
                  
      
                  <div class="modal-body">
                      <p>客官尚未登录，是否马上登录？</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button"class="btn btn-secondary" data-dismiss="modal" >残忍拒绝</button>
                      <button type="button"class="btn btn-warning delete"><a href="new.html" style="color:white">注册账号</a></button>
                      <button type="button"class="btn btn-primary delete"><a href="register.html" style="color:white">马上登录</a></button>
                  </div>
              </div>
          </div>
      </div>


 

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
   
       
               </div>
             </div>
           </nav>
     
       <!-- <img src=" image/background.png" class="img-responsive center-block container-fluid" > 11-->

   <!-- <div class="container">  -->
    <div class="row" align="center">
      <div class="col">
        <div id="mycoursel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#mycoursel" data-slide-to="0" class="active"></li>
            <li data-target="#mycoursel" data-slide-to="1"></li>
            <li data-target="#mycoursel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner "data-interval="1000" role="listbox">
              <div class="carousel-item active">
                 <img class="d-block" width="100%" height="510px" src="image/美食lunbo1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                 <img class=" d-block" width="100%"height="510px" src="image/美食lunbo2.jpg" alt="second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block " width="100%" height="510px"src="image/虾子.jpg" alt="tirth slide">
              </div>
            </div>
          <!-- <a class="carousel-control-prev" href="#mycoursel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#mycoursel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
    </div>

    <?php
    $mysqli  = new mysqli("localhost","root","sise","foods")  ;
    $char="utf8";
    mysqli_set_charset($mysqli,$char);

    if(isset($_POST['serch'])){

    $code = $_POST['code'];
    if ($code == 0) {
        $serchf = $mysqli->query("select * from  food WHERE foodname like '%" . $_POST['lovefood'] . "%'");
    }
    if ($serchf){
    while ($frow = $serchf->fetch_array()) {


    ?>

    <div class="container mt-3">
        <center><h3><?= $a ?>，为你找到的美食如下：</h3></center>
        <h6></h6>

        <div class="row mt-5">

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="image/<?php echo $frow["foodid"] ?>.jpg" alt="" class="card-img-top">

                    <div class="card-body">
                        <h5 class=" card-title"><?php echo $frow["foodname"] ?></h5>

                        <p class=" card-text" style="height:7em">
                            <?php echo $frow["intoduce"] ?></p>
                        <button class=" btn btn-danger float-left"><a style="color: #ffffff" href="buynow.php?id=<?php echo $frow["foodid"] ?>& name=<?php echo $frow["foodname"] ?>">立即购买</a></button>
                        <a class="btn btn-secondary float-right" role="button" name="lookinfo"
                           href="lokinfo.php?id=<?php echo $frow["foodid"] ?>& name=<?php echo $frow["foodname"] ?>">查看详情</a>
                        <!--   <button class=" btn btn-secondary float-right" name="lookinfo">查看详情</button>-->
                    </div>
                </div>
            </div>



                <?php
                }
            }
            }
            ?>


            <div class="container mt-3 ">
    <!-- <div style="clear:both;width:100%;"></div>  -->
    <div>
      <hr>
      <h3 class="text-center">推荐餐馆</h3>
      <div id="nav_container4" class="mt-4">
      
         <ul class="col-md-12 col-12">
         <!-- <label for="">选择分类：</label> -->
            <li class="col-md-2 col-4"> <a href="">曾氏餐馆</a> </li>
            <li class="col-md-2 col-4"> <a href="learn.html">陈氏餐馆</a> </li>
            <li class="col-md-2 col-4"> <a href="">欧氏餐馆</a> </li>
            <li class="col-md-2 col-4"> <a href="">李氏餐馆</a> </li>
            <li class="col-md-2 col-4"> <a href="">网红餐馆</a> </li>
            <li class="col-md-2 col-4"> <a href="">其他</a> </li>
           
         </ul>
      </div>

      <div class="mt-5 col-md-12  ">
        <label for="" class="col-md-2 col-5 mt-3"><h5>美食类型：</h5></label>
        <a href="" class="col-md-2 col-4 text-center">快餐简餐</a>
        <a href="" class="col-md-2 col- text-center">粥粉面</a>
        <a href="" class="col-md-2 col-4 text-center">饮品店</a>
        <a href="" class="col-md-2 col-4 text-center">水果生鲜</a>
        <a href="" class="col-md-2 col-4 text-center">粤菜</a>
        <a href="" class="col-md-2 col-4 text-center">自助餐</a>
        <a href="" class="col-md-2 col-4 text-center">日本菜</a>
        <br>
      </div>

      <div class="mt-2 col-md-12 col-12 ">
        <label for="" class="col-md-2 col-6 mt-3"><h5></h5></label>
        
        <a href="" class="col-md-2 col-4 text-center">面包甜点</a>
       
        <a href="" class="col-md-2 col-2 text-center">下午茶</a>
           
         <a href="" class="col-md-2 col-4 text-center">西餐</a>
        <a href="" class="col-md-2 col-4 text-center">咖啡厅</a>
        <a href="" class="col-md-2 col-4 text-center">韩国料理</a>
        <a href="" class="col-md-2 col-4 text-center">火锅</a>
        <a href="" class="col-md-2 col-4 text-center">川菜</a>
        <a href="" class="col-md-2 col-4 text-center">&gt;&gt;</a>
      </div>

    <br/>
    <br/>







   </div>
</div>
                      
 <hr>

 <div class="container mt-3">
    <h3 class=""> <a href="">推荐美食</a> </h3>
    <h6>由网友高分推荐出的美食</h6>
    <div class="row mt-5">

        <?php

        while($row=$result->fetch_array()) {
            ?>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="image/<?php echo $row["foodid"] ?>.jpg" alt="" class="card-img-top">

                    <div class="card-body">
                        <h5 class=" card-title"><?php echo $row["foodname"] ?></h5>

                        <p class=" card-text" style="height:7em">
                            <?php echo $row["intoduce"] ?></p>
                        <button class=" btn btn-danger float-left"   ><a style="color:ghostwhite" href="buynow.php?id=<?php echo $row["foodid"] ?>& name=<?php echo $row["foodname"] ?>">立即购买</a></button>
                          <a class="btn btn-secondary float-right" role="button" name="lookinfo" href="lokinfo.php?id=<?php echo $row["foodid"] ?>& name=<?php echo $row["foodname"] ?>" >查看详情</a>
                        <!--   <button class=" btn btn-secondary float-right" name="lookinfo">查看详情</button>-->
                    </div>
                </div>
            </div>



        <?php
        }
        ?>



        <nav class=" center ml-5">
            <ul class="pagination  col-md-12 col-12">
              <li class="page-item "><a class="page-link disabled "  style=" color:black">Previous</a></li>
              <li class="page-item"><a class="page-link active "  href="#">1</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">2</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">3</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">...</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">Next</a></li>
            </ul>
          </nav>
          
        
    </div>

    <div class="col-md-12 col-12">
        <img src="image/bb.jpg" alt="" class=" d-block" width="100%">
      </div>
      <hr class="mt-5">

      <h3 class=""> <a href="">网红餐馆</a> </h3>
      <h6>网友经常溜达的餐馆</h6>



     <div class="row form-group mt-4">

         <?php
         while($array=$store->fetch_array())
         {
             ?>

         <div class="col-md-3 offset-1 col-6 mt-4">
             <img src="image/<?php echo $array["storeid"] ?>.jpg" alt="" class="  ">
         </div>

         <div class="col-md-7 col-5 align-content-center align-self-center ">
             <h4 class=""><?php echo $array["storename"] ?></h4>
             <h5 class="">&nbsp; &nbsp; &nbsp; &nbsp;<?php echo $array["storecomment"] ?></h5>
             <h6>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $array["address"] ?></h6>
             <a class="btn btn-warning float-right mr-3 mt-3" href="#" role="button">进入店家</a>
         </div>


         <?php
         }
?>




         <nav class=" center ml-5 mt-4">
            <ul class="pagination  col-md-12 col-12">
              <li class="page-item "><a class="page-link disabled "  style=" color:black">Previous</a></li>
              <li class="page-item"><a class="page-link active "  href="#">1</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">2</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">3</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">...</a></li>
              <li class="page-item"><a class="page-link " href="#" style=" color:black">Next</a></li>
            </ul>
          </nav>
        
      </div>
</div>
 </div>


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