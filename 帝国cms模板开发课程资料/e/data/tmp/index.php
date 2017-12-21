<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="en">
<head>

    <!-- meta data & title -->
    <meta charset="utf-8">
    <title>Office</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/skin/houdunren/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/skin/houdunren/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/skin/houdunren/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/skin/houdunren/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/skin/houdunren/assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/skin/houdunren/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/skin/houdunren/assets/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="[!&#45;&#45;news.url&#45;&#45;]skin/houdunren/assets/css/animate.min.css">-->
    <link rel="stylesheet" href="/skin/houdunren/assets/css/style.css">
    <link rel="stylesheet" href="/skin/houdunren/assets/css/swiper.min.css">
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            /*height: 550px;*/
            margin-left: auto;
            margin-right: auto;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            position: relative;
        }
        .swiper-slide p{
            position: absolute;
            left:45%;
            bottom:8%;
            color:white;
            font-size:30px;
        }
    </style>
</head>
<body>
<!-- Header -->
<nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand wow fadeInDownBig" href="index.html"><img class="office-logo" src="/skin/houdunren/assets/img/slider/Office.png" alt="Office"></a>
        </div>

        <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav pull-right">

                <li class="active">
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="team.html">Team</a>
                </li>
                <li>
                    <a href="contact.html"><span>Contact</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- End Header -->

<!-- Begin #carousel-section -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('slide',5,18,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <div class="swiper-slide">
            <a href="<?=$bqsr['titleurl']?>" target="_blank" style="display:block;width: 100%;"><img src="<?=$bqr['titlepic']?>" style="width: 100%;">
                <p><?=$bqr['title']?></p>
            </a>
        </div>
        <?php
}
}
?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<script src="/skin/houdunren/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<!-- Begin #services-section -->
<section id="services" class="services-section section-global-wrapper">
    <div class="container">
        <div class="row">
            <div class="services-header">
                <h3 class="services-header-title">推荐新闻</h3>
                <!--<p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>-->
            </div>
        </div>

        <!-- Begin Services Row 1 -->
        <div class="row services-row services-row-head services-row-1">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                    <p class="services-icon"><span class="fa fa-android fa-5x"></span></p>
                    <h4 class="services-title">文章标题</h4>
                    <p class="services-body">文章简介文章简介文章简介文章简介文章简介文章简介文章简介文章简介.</p>
                    <p class="services-more"><a href="#">了解更多</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="services-group wow animated zoomIn" data-wow-offset="40">
                    <p class="services-icon"><i class="fa fa-apple fa-5x"></i></p>
                    <h4 class="services-title">文章标题</h4>
                    <p class="services-body">文章简介文章简介文章简介文章简介文章简介文章简介文章简介文章简介.</p>
                    <p class="services-more"><a href="#">了解更多</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                    <p class="services-icon"><i class="fa fa-thumbs-o-up fa-5x"></i></p>
                    <h4 class="services-title">文章标题</h4>
                    <p class="services-body">文章简介文章简介文章简介文章简介文章简介文章简介文章简介文章简介.</p>
                    <p class="services-more"><a href="#">了解更多</a></p>
                </div>
            </div>
        </div>
        <!-- End Serivces Row 1 -->

        <!-- Begin Services Row 2 -->
        <div class="row services-row services-row-tail services-row-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                    <p class="services-icon"><span class="fa fa-windows fa-5x"></span></p>
                    <h4 class="services-title">文章标题</h4>
                    <p class="services-body">文章简介文章简介文章简介文章简介文章简介文章简介文章简介文章简介.</p>
                    <p class="services-more"><a href="#">了解更多</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="services-group wow animated zoomIn" data-wow-offset="40">
                    <p class="services-icon"><i class="fa fa-eye fa-5x"></i></p>
                    <h4 class="services-title">文章标题</h4>
                    <p class="services-body">文章简介文章简介文章简介文章简介文章简介文章简介文章简介文章简介.</p>
                    <p class="services-more"><a href="#">了解更多</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                    <p class="services-icon"><i class="fa fa-cube fa-5x"></i></p>
                    <h4 class="services-title">文章标题</h4>
                    <p class="services-body">文章简介文章简介文章简介文章简介文章简介文章简介文章简介文章简介.</p>
                    <p class="services-more"><a href="#">了解更多</a></p>
                </div>
            </div>
        </div>
        <!-- End Serivces Row 2 -->

    </div>
</section>
<!-- End #services-section -->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3><i class="fa fa-map-marker"></i> Contact:</h3>
                <p class="footer-contact">
                    北京市朝阳区马泉营顺白路12号 后盾IT教育<br><br>
                    Phone: 400-682-3231<br>
                </p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-external-link"></i> Links</h3>
                <p> <a href="http://www.houdunwang.com"> 后盾网</a></p>
                <p> <a href="http://www.houdunren.com"> 后盾人</a></p>
                <p> <a href="http://bbs.houdunwang.com"> 后盾论坛</a></p>
                <p> <a href="http://www.hdphp.com/"> HDPHP</a></p>
                <p> <a href="http://www.hdcms.com/"> HDCMS</a></p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-heart"></i> Socialize</h3>
                <div id="social-icons">
                    <a href="#" class="btn-group google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#" class="btn-group linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                    <a href="#" class="btn-group twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn-group facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright text center">
    <p>&copy; Copyright 2017, <a href="http://www.houdunwang.com">www.houdunwang.com</a></p>
</div>


<script type="text/javascript" src="/skin/houdunren/js/jquery-1.10.2.min.js"></script>
<script src="/skin/houdunren/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/skin/houdunren/js/wow.min.js"></script>

<script>
    new WOW().init();
</script>
</body>
</html>
