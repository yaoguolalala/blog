<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>腰果的个人空间</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.3.js"></script>
    <link rel="stylesheet" href="trytrytry/fullpagecss/fullpage.css">
    <script src="trytrytry/fullpagejquery/jquery.fullpage.js"></script>
    <script src="trytrytry/fullpagejquery/easyui.js"></script>
    <link rel="stylesheet" href="css/picture.css">
</head>
<body>
<nav class=" navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="##" class="navbar-brand">Yaoguo</a>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li><a href="index2.php">首页</a></li>
                <li><a href="jianli.php">简历</a></li>
                <li><a href="##">个人日志</a></li>
                <li class="dropdown">
                    <a href="##"data-toggle="dropdown">文档查询
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.w3school.com.cn/h.asp">html/css</a></li>
                        <li><a href="http://www.w3school.com.cn/b.asp">javascript</a></li>
                        <li><a href="http://www.bootcss.com/">bootstrap</a></li>
                        <li><a href="https://cn.vuejs.org/">Vue.js</a></li>
                        <li class="divider"></li>
                        <li><a href="http://biaoyansu.com/">友情链接</a></li>
                    </ul>
            </ul>
            <ul class="nav navbar-nav navbar-right show" id="navbarright">
                <li><a href="mygames.php">玩过的游戏</a></li>
                <li><a href="pictrue.php">图库</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
 <?php
  include './data/pictrue.php';
  echo '<div class="waterfall">';
  for($i=0;$i<count($picArr);$i++){
      echo  '<div class="item">
            <img src='.$picArr[$i]['path'].' alt="">
            <div class="pic-operation">
                <a href='.$picArr[$i]['path'].'><span class="glyphicon glyphicon-zoom-in"></span></a>
                <a href='.$picArr[$i]['path'].' download='.$picArr[$i]['name'].'><span class="glyphicon glyphicon-download"></span></a>
            </div>
        </div>';
  }
  echo '</div>';
  ?>
    <!--<div class="waterfall">
        <div class="item">
            <img src="./pictures/7.jpg" alt="">
            <div class="pic-operation">
                <a href="./pictures/7.jpg""><span class="glyphicon glyphicon-zoom-in"></span></a>
                <a href="./pictures/7.jpg" download="1.jpg"><span class="glyphicon glyphicon-download"></span></a>
            </div>
        </div>
    </div>-->
</div>
</body>
<script>
    $(function () {
        $('.item').mouseenter(function () {
            $(this).children('.pic-operation').stop();
            $(this).children('.pic-operation').slideDown(300);
        });
        $('.item').mouseleave(function () {
            $(this).children('.pic-operation').stop();
            $(this).children('.pic-operation').slideUp(300);
        });
        function checkScrollDirector() { //判断滚动条是否滑到底部
            var flag = 0;
            console.log($(document).scrollTop());
            console.log($(window).height());
            console.log($(document).height());
            if($(document).scrollTop() + $(window).height() >$(document).height()/1.1) {
                flag = 1;
            }
            return flag;
        }
       window.onload=function () {
            window.onscroll=function () {
                if(checkScrollDirector()){
                    var html=`
                            <?php
                            include './data/pictrue.php';
                            for($i=0;$i<count($picArr);$i++){
                                echo  '<div class="item">
                                        <img src='.$picArr[$i]['path'].' alt="">
                                        <div class="pic-operation">
                                            <a href='.$picArr[$i]['path'].'><span class="glyphicon glyphicon-zoom-in"></span></a>
                                            <a href='.$picArr[$i]['path'].' download='.$picArr[$i]['name'].'><span class="glyphicon glyphicon-download"></span></a>
                                        </div>
                                        </div>';
                            }
                            ?>`;
                        $(".waterfall").append(html); //向容器内一次性添加12个图片
                        console.log(1);
                }
            };
        };
    })
</script>
</html>