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
    <title>[!--pagetitle--]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[!--pagedes--]">
    <meta name="keywords" content="[!--pagekey--]">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="[!--news.url--]skin/houdunren/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="[!&#45;&#45;news.url&#45;&#45;]skin/houdunren/assets/css/animate.min.css">-->
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/css/style.css">
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/css/swiper.min.css">
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
        .introduce{
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        .news{
            margin:20px 0;
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

            <a class="navbar-brand wow fadeInDownBig" href="index.html"><img class="office-logo" src="[!--news.url--]skin/houdunren/assets/img/slider/Office.png" alt="Office"></a>
        </div>

        <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav pull-right">

                <li class="active">
                    <a href="/">首页</a>
                </li>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewsclass where showclass = 0',5,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="[!--news.url--]e/action/ListInfo/?classid=<?=$bqr['classid']?>"><?=$bqr['classname']?></a>
                </li>
                <?php
}
}
?>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewspage',5,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="[!--news.url--]<?=$bqr['path']?>"><?=$bqr['title']?></a>
                </li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</nav>

    <div class="row container-kamn">
        <!--<img src="[!--news.url--]skin/houdunren/assets/img/slider/slide1.jpg" class="blog-post" alt="Feature-img" align="right" width="100%"> -->
        <img src="[!--news.url--]skin/houdunren/images/yumaoqiu.jpg" class="blog-post" alt="Feature-img" align="right" width="100%">
    </div>

    <div id="banners"></div>
    <div class="container">
        <div class="row">
            <div class="side-left col-sm-4 col-md-4">

                <h3 class="lead">  关于后盾网 : </h3><hr>

                <p style="text-indent: 2em;">后盾网隶属于北京后盾计算机技术培训有限责任公司，是专注于培养中国互联网顶尖PHP程序语言专业人才的专业型培训机构，拥有七年培训行业经验。后盾网拥有国内最顶尖的讲师和技术团队，团队成员项目经验均在8年以上，团队曾多次为国内外上市集团、政府机关的大型项目提供技术支持，其中包括新浪、搜狐、腾讯、宝洁公司、联想、丰田、工商银行、中国一汽等众多大众所熟知的知名企业。</p>
                <br>
                <p style="text-indent: 2em;">后盾网自2010年创立至今，免费发布了数千课高质量视频教程，为同行业之最，视频在优酷、土豆、酷六等视频网站播放量高达数千万，百度网盘下载量数百万次，无数技术爱好者受益其中。除了免费视频外，后盾网还为大家提供了面授班、远程班、公益公开课、VIP系列课程等众多形式的学习途径。后盾网有一群认真执着的老师，他们一心为同学着想，将真正的知识传授给大家是后盾网永远不变追求。
                </p>
                <br>
                <p style="text-indent: 2em;">后盾网专注于PHP培训，坚持实战式教学，将学员定位于企业员工，学习即是实习，学习即是工作，为学员提供最优质的学习体验。目前后盾网学员遍布世界各地，受到了各用人单位的一致好评。后盾网独一无二的高效率学习模式培养出了众多的PHP顶尖人才，98.9%的高薪就业率更是全年领先其他培训机构。零基础、跨行业、低学历在后盾网教学模式面前都不在是问题，一个又一个的高薪就业案例胜于一切言表。</p>
                <br>
                <p style="text-indent: 2em;">后盾网顺着市场大环境的方向，踏实苦干、披荆斩棘，经过五年的跨越式发展，由最初的业界黑马成长为今日的PHP培训领军品牌，向社会输送了数千名顶尖PHP程序员，其中三分之一已升职为项目经理，年薪20-30万，尤其是近一年毕业的学员，毕业试用期薪资最高22000元，平均薪资高达10700元，每个班级有三分之一以上的学员毕业薪资在8000元以上，在业界处在绝对领先位置。后盾学员就业薪资统计：http://www.houdunwang.com/article11-34-1.html</p>
                <br>
                <p style="text-indent: 2em;">后盾网实训总部设在北京朝阳区，占地约6000余平米，我们的教学区明亮整洁、给大家创造了舒适的学习环境，我们所有的宿舍均按照酒店规格装修，每个房间都有独立卫生间、中央空调、千兆光纤，同学们虽然都是背井离乡，不远千里万里来学习，但是在后盾能体会到家一样的温暖。2016年成立上海校区，后盾成就有志青年，为社会输送高质量人才的脚步从未停歇。</p>
            </div>
            <div class="col-sm-8 col-md-8">
                <!--<h3 class="lead"id="anchor1"> 关于我们 </h3><hr>-->
                <img src="[!--news.url--]skin/houdunren/images/aboutus.png" alt="">
                <br>
                <img src="[!--news.url--]skin/houdunren/images/154858an6gxp2cotgytvv6.jpg" alt="">
                <br>
                <img src="[!--news.url--]skin/houdunren/images/01-IMG_5708.JPG" alt="">
                <br>
                <img src="[!--news.url--]skin/houdunren/images/02-IMG_0816.JPG
" alt="">
                <br>
                <img src="[!--news.url--]skin/houdunren/images/05-IMG_0856.JPG" alt="">
                <br>
                <img src="[!--news.url--]skin/houdunren/images/06-IMG_0424.JPG" alt="">
                <br>
                <img src="[!--news.url--]skin/houdunren/images/12-IMG_1393.JPG" alt="">
                <br>
            </div>
        </div>
    </div>

    <!--End Main Container -->

    <!-- Footer -->
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


<script type="text/javascript" src="[!--news.url--]skin/houdunren/js/jquery-1.10.2.min.js"></script>
<script src="[!--news.url--]skin/houdunren/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="[!--news.url--]skin/houdunren/js/wow.min.js"></script>

<script>
    new WOW().init();
</script>
</body>
</html>