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
    <link rel="stylesheet" href="css/idnex.css">
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
    <div class="fullpage">
        <div  id="hello" class="section background1">
            <div id="sayhello">
                <h1>欢迎来到腰果的个人空间</h1>
                <br>
                <p style="font-size: 25px"><i>菜鸟前端的实验田</i></p>
            </div>
        </div>
        <div class="section background2">
            <div class="section-text1 anm">
                <div>
                    <h1>我，热爱游戏</h1>
                    <P>既爱沉浸电影式的3A单机大作，也爱相声五连坐的辣鸡网游</P>
                </div>
            </div>
        </div>
        <div class="section background3">
            <div class="section-text2 anm">
                <div>
                    <h1>我，热爱篮球</h1>
                    <P>是野球场上的风骚灵活小胖子</P>
                </div>
            </div>
        </div>
        <div class="section background4">
            <div class="section-text1 anm">
                <div>
                    <h1>我，热爱音乐</h1>
                    <P>戴上耳机我就是整个世界</P>
                </div>
            </div>
        </div>
        <div class="section background5">
            <div class="section-text2 anm">
                <div>
                    <h1>我，热爱折腾</h1>
                    <P>只要电脑手机能开机，我就不会停下</P>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(function () {
        //code;
        $('.fullpage').fullpage({
            verticalCentered: false,
            scrollingSpeed: 500,
            loopBottom: true
        });
        $('.background2').mouseenter(function () {
            $('.background2>.section-text1').fadeIn(500);
        });
        $('.background2').mouseleave(function () {
            $('.background2>.section-text1').fadeOut(200);
        });
        $('.background3').mouseenter(function () {
            $('.background3>.section-text2').fadeIn(500);
        });
        $('.background3').mouseleave(function () {
            $('.background3>.section-text2').fadeOut(200);
        });
        $('.background4').mouseenter(function () {
            $('.background4>.section-text1').fadeIn(500);
        });
        $('.background4').mouseleave(function () {
            $('.background4>.section-text1').fadeOut(200);
        })
        $('.background5').mouseenter(function () {
            $('.background5>.section-text2').fadeIn(500);
        });
        $('.background5').mouseleave(function () {
            $('.background5>.section-text2').fadeOut(200);
        })
    })
</script>
</html>