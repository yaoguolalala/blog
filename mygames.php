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
    <link rel="stylesheet" href="css/mygames.css">
</head>
<body>
<nav class=" navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index2.php" class="navbar-brand">Yaoguo</a>
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
<div class="container" id="main">
    <div class="container">
        <?php
        include './data/gamesData.php';
        for($i=0;$i<count($gameArry);$i++){

            echo '<div class="col-md-3 col-sm-6 col-xs-6">';
            echo '<div class="card">';
            echo '<div class="card-head">
                    <img src='.$gameArry[$i]['imgsrc'].' alt="">  
                  </div>';
            echo '<div class="card-text">
                    <h5>中文名: '.$gameArry[$i]['title'].'</h5>
                    <h5>英文名：'.$gameArry[$i]['english'].'</h5>
                    <p>类型：'.$gameArry[$i]['type'].'</p>
                    <p>平台：'.$gameArry[$i]['plat'].'</p>
                    <p class="sign">'.$gameArry[$i]['sign'].'</p>
                  </div>';
            echo '<div class="card-btn">
                     <button class="btn-primary" name='.$gameArry[$i]['title'].'>详情</button>
                  </div>';
            echo '</div>';
            echo '</div>';
        }
        echo '<h1><strong><i>更新中。。。。</i></strong></h1>'
        ?>
    </div>
</div>
<div class="maskmask">
    <div class="bigcard">
        <div class="gameimg">
            <img src="./img/img6.jpg" alt="">
        </div>
        <div class="gametitle">
            <h3>
                游戏名：孤岛惊魂
            </h3>
           </div>
        <div class="gametext">
            <h4>简介</h4>
            <p></p>
        </div>
        <div class="gamebaike"><a href="http://www.baidu.com" target="_blank">前往百科</a></div>
        <div class="out"><button class="close btn-primary">×</button></div>
    </div>
</div>
</body>
<script>
    $(function () {
        var gametitle=$('.gametitle>h3');
        var gametext=$('.gametext>h4');
        var gamebaike=$('.gamebaike>a');
        var gameimg=$('.gameimg>img');
        $('.card-btn>button').click(function () {
            $('.maskmask').css('display','block');
            var btnName=this.getAttribute('name');
            console.log(btnName);
            $.ajax({
               type:'get',
               url:'./data/gametext2.php',
               data:{'name':this.getAttribute('name')},
               success:function (xhr) {
                   var res=xhr;
                   var obj=JSON.parse(res);
                   console.log(obj);
                   var subobj=obj[btnName];
                   gametitle.html(obj[btnName].name);
                   gametext.html(obj[btnName].text);
                   gameimg.attr('src',obj[btnName].img);
                   gamebaike.attr('href',obj[btnName].baike);
                   /*var res=xhr.split('|');
                   console.log(res);
                   gametitle.html(res[0]);
                   gametext.html(res[1]);
                   gameimg.attr('src',res[2]);
                   gamebaike.attr('href',res[3]);*/
               },
               error:function (xhr) {
                   console.log(xhr.status);
               }
           })
        });
        $('.out>.close').click(function () {
            $('.maskmask').css('display','none');
        })
    })
</script>
</html>