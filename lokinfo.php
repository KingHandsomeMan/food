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
    <title><?=$mname?></title>

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
  $mysqli  = new mysqli("localhost","root","sise","foods")  ;
  $char="utf8";
  mysqli_set_charset($mysqli,$char);
  $result = $mysqli->query("select * from  food where foodid='$id'");
  ?>

  <?php
  while ($row=$result->fetch_array()) {

  ?>
  <div class="container"style="height: 290px">
      <div class="col-md-3 offset-9 col-4 offset-8 mt-3 ">
          <a href="question.php?id=<?php echo $row["foodid"] ?>& name=<?php echo $row["foodname"] ?>">发表我的看法</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="index.php">返回首页</a>
      </div>
      <?php
      }
    ?>
    <div class="row form-group mt-2" >
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
            ?>
            <div class="input-group input-group-sm col-md-8 col-5  ">
                <b class="tesejieshao">美食特色</b>
                   &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row["more"] ?>
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

<hr>
<div class="container">
        <b class="b1"> <a href="" ><?=$mname?></a> </b><br>
        <b class="b2">看看别人这么说</b>
    <hr>
    <?php
    $mysqli  = new mysqli("localhost","root","sise","foods")  ;
    $char="utf8";
    mysqli_set_charset($mysqli,$char);
    $comment = $mysqli->query("select * from  comment where id='$id'");
    ?>
    <?php
    while($com=$comment->fetch_array())
    {
    ?>

    <div class="mt-3 col-md-12 col-12">
        <img src="image/<?php echo $com["id"]?>.jpg" alt="" class=" rounded" width="3%" height="5%">
        <b><?php echo $com["name"]?></b>
        <i class=" float-right"><?php echo $com["time"]?></i>
    </div>
    <div class="mt-3 col-md-12 col-12">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $com["comments"]?></p>
    </div>


    <div class="col-md-12 col-12 mt-3 ">
        <i class="far fa-comment-alt float-right mr-5 active"></i>
        <i class="fas fa-thumbs-down mr-4  float-right"></i>
        <i class="fas fa-thumbs-up mr-3  active  float-right"></i>

    </div>

        <hr>
    <?php
    }
    ?>
</div>






<nav class=" center ml-5 " >
        <ul class="pagination  col-md-12 col-12">
          <li class="page-item "><a class="page-link disabled "  style=" color:black">Previous</a></li>
          <li class="page-item"><a class="page-link active "  href="#">1</a></li>
          <li class="page-item"><a class="page-link " href="#" style=" color:black">2</a></li>
          <li class="page-item"><a class="page-link " href="#" style=" color:black">3</a></li>
          <li class="page-item"><a class="page-link " href="#" style=" color:black">...</a></li>
          <li class="page-item"><a class="page-link " href="#" style=" color:black">Next</a></li>
        </ul>
      </nav>




<div class=" container">
     <!--   <div class="container mt-3">
                <b class="b1"> <a href="">其他高分蛋糕</a> </b><br>
                <b class="b2">吃出精彩</b>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card mb-3">
                             <img src="image/dangao1.jpg" alt="" class="card-img-top">
                             <div class="card-body">
                                <b class=" card-title b3">草莓巧克力蛋糕</b>
                                <p class=" card-text" style="height:4em">上层为草莓，下层为巧克力</p>
                                <i class="far fa-star float-right ml-2" ></i>
                                <button class=" btn btn-secondary float-right" >查看详情</button>
                             </div>
                        </div>
                    </div>
 
                    <div class="col-md-4">
                        <div class="card mb-3">
                             <img src="image/补丁.jpg" alt="" class="card-img-top">
                             <div class="card-body">
                                    <b class=" card-title b3">巧克力奶酪</b>
                                <p class=" card-text"style="height:4em">巧克力奶酪是由下层为巧克力，上层为奶酪制作而成。</p>
                                <i class="far fa-star float-right ml-2" ></i>
                                <button class=" btn btn-secondary float-right">查看详情</button>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                             <img src="image/dangao2.jpg" alt="" class="card-img-top">
                             <div class="card-body">
                                    <b class=" card-title b3">布丁蛋糕</b>
                                <p class=" card-text"style="height:4em">由奶油和面包一层一层交替组层的双层蛋糕</p>
                                <i class="far fa-star float-right ml-2" ></i>
                                <button class=" btn btn-secondary float-right" >查看详情</button>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                             <img src="image/dangao4.jpg" alt="" class="card-img-top">
                             <div class="card-body">
                                    <b class=" card-title b3">网红蛋糕</b>
                                <p class=" card-text" style="height:4em">水果加上溶巧克力奶油</p>
                                <i class="far fa-star float-right ml-2" ></i>
                                <button class=" btn btn-secondary float-right" >查看详情</button>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                             <img src="image/dangao3.jpg" alt="" class="card-img-top">
                             <div class="card-body">
                                    <b class=" card-title b3">草莓蛋糕</b>
                                <p class=" card-text"style="height:4em">草莓味蛋糕</p>
                                <i class="far fa-star float-right ml-2" ></i>
                                <button class=" btn btn-secondary float-right">查看详情</button>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                             <img src="image/dangao5.jpg" alt="" class="card-img-top">
                             <div class="card-body">
                                    <b class=" card-title b3">果狸子蛋糕</b>
                                <p class=" card-text"style="height:4em">上层用果狸子点缀</p>
                                <i class="far fa-star float-right ml-2" ></i>
                                <button class=" btn btn-secondary float-right" >查看详情</button>
                             </div>
                        </div>
                    </div>
                
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
                      
                    
                </div>-->
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
        <div class="">
          <img src="image/yejiao.jpg" alt="" class=" d-block" width="100%">
        </div>
 </footer>