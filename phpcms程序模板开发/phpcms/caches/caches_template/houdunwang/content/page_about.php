<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=“X-UA-Compatible” content=“chrome=1″ />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="renderer" content="webkit" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>关于我们</title>
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/houdunwang/css/reset.css">
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/houdunwang/css/common.css">
    <script type="text/javascript" src="<?php echo WEB_PATH;?>statics/houdunwang/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo WEB_PATH;?>statics/houdunwang/js/common.js"></script>
    <script type="text/javascript" src="<?php echo WEB_PATH;?>statics/houdunwang/js/scrollTop.js"></script>
</head>
<body>
<!-- 固定定位，返回顶部按钮 -->
<?php include template('content','header'); ?>
<div class="clear"></div>
<!-- 头部结束 -->
<!-- 手机头部结束 -->
<link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/houdunwang/css/about.css">
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=849628ca3f0fd087fa3558737aa03109"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
<!-- 头部结束 -->
<div class="banner">
    <img src="http://www.yimaokeji.com/statics/ymkj/images/bannerAbout.jpg" alt="" class="pcbanner">
    <img src="http://www.yimaokeji.com/statics/ymkj/images/mobile/bannerAbout.jpg" alt="" class="sjbanner">
</div>
<!-- 5大创始人 -->
<div class="founder" id="founder">
    <div class="center">
        <div class="top">
            <p class="title">后盾网大牛们</p>
            <p class="line"></p>
            <p class="etitle">HOUDUN TECHNOLOGY</p>
        </div>
        <div class="bottom">
            <div class="csr">
                <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/xianglaoshi.jpg" alt="">
                <div class="line"></div>
                <div class="jieshao">
                    <p class="name">向军 <small>高级讲师</small></p>
                    <p class="desc">行业经验10年以上，服务过中国石油、光大银行、丰田汽车、宝洁公司等企业。擅长php、mysql、linux、javascript、html5、css3、jquery等编程语言和数据库系统。多年培训经验，讲课思路清晰，重点突出，实用性强，通俗易懂。并开发HDPHP框架与HDCMS系统</p>
                </div>
            </div>
            <div class="csr">
                <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/sunlaoshi.jpg" alt="">
                <div class="line"></div>
                <div class="jieshao">
                    <p class="name">孙琪峥 <small>高级讲师</small></p>
                    <p class="desc">高效率学习倡导者，接触网站行业十年，精通网站开发、策划、运营、优化，授课幽默风趣，深入浅出，通俗易懂，能准确抓住每位同学的薄弱点，因材施教，专治各种零基础，人送外号“小白杀手”。</p>
                </div>
            </div>
            <div class="csr">
                <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/gulaoshi.jpg" alt="">
                <div class="line"></div>
                <div class="jieshao">
                    <p class="name">古丽 <small>市场经理</small></p>
                    <p class="desc">后盾网招生咨询部主任，曾担任多家大型公司的业务客服经理，知性大方、谈吐得体，极富耐心，深受学员爱戴。凭借丰富的生活阅历和工作经验，能帮你解决报名前与学习过程中的各种琐碎问题，广受大家爱戴。</p>
                </div>
            </div>
            <div class="csr">
                <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/malaoshi.jpg" alt="">
                <div class="line"></div>
                <div class="jieshao">
                    <p class="name">马震宇 <small>高级讲师</small></p>
                    <p class="desc">曾担任惠普，方正，宏碁开发工程师、培训讲师，多年一线开发经验与讲师经验，讲课幽默不乏认真，轻松不乏严谨，让你的大脑时刻保持活力。擅长引导思维，而不是一味灌输，新生代优秀青年讲师的代表</p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- 5大创始人 -->
<!-- 关于我们 -->
<div class="about">
    <div class="center">
        <div class="left">
            <p class="title" id="ppyxl">ABOUT HOUDUN&关于我们<br />BRAND STORY<br />品牌影响力</p>
            <p class="aboutus">后盾网自2010年创立至今，免费发布了数千课高质量视频教程，为同行业之最，视频在优酷、土豆、酷六等视频网站播放量高达数千万，百度网盘下载量数百万次，无数技术爱好者受益其中。除了免费视频外，后盾网还为大家提供了面授班、远程班、公益公开课、VIP系列课程等众多形式的学习途径。后盾网有一群认真执着的老师，他们一心为同学着想，将真正的知识传授给大家是后盾网永远不变追求。<br>后盾网专注于PHP培训，坚持实战式教学，将学员定位于企业员工，学习即是实习，学习即是工作，为学员提供最优质的学习体验。目前后盾网学员遍布世界各地，受到了各用人单位的一致好评。后盾网独一无二的高效率学习模式培养出了众多的PHP顶尖人才，98.9%的高薪就业率更是全年领先其他培训机构。零基础、跨行业、低学历在后盾网教学模式面前都不在是问题，一个又一个的高薪就业案例胜于一切言表。</p>
            <a href="<?php echo WEB_PATH;?>/index.php?m=content&c=index&a=show&catid=10&id=7" class="more">了解详情 +</a>
        </div>

        <div class="right">
            <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/about.jpg" class="aboutimg">
        </div>
    </div>
</div>
<!-- <span style="display:block;width:100%;border-top:solid 1px #ccc;"></span> -->
<!-- 关于我们 -->
<div class="main">
    <div class="three" id="wmdys">
        <div class="center">
            <div class="right">
                <p class="title">全国3000家体验服务中心</p>
                <p class="small">365天24小时全方位守护</p>
                <p class="jieshao">翼猫科技全力打造3000+家体验服务中心，遍布全国各个地区，致力于实现全民安全饮水；24小时全年客户服务中心，全心全意为顾客解决疑问难题，让安全无忧用水落实到每个人。</p>
                <a href="http://www.yimaokeji.com/content-8-19-1.html" class="more">了解详情 &nbsp;<span class="jiantou"></span></a>
            </div>
        </div>
    </div>
</div>

<!-- 联系我们 -->
<div class="contact" id="lxwm">
    <div class="top">
        <!--<img src="http://www.yimaokeji.com/statics/ymkj/images/mobile/contactTitle.jpg">-->
        <h2 style="font-size: 32px;">联系我们</h2>
    </div>
    <div class="bottom">
        <div class="xianlu">
            <img src="http://www.yimaokeji.com/statics/ymkj/images/contactImg.jpg">
            <p class="chengche">地铁15号线马泉营站，C口出右转坐988路公交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</p>
        </div>
        <div class="map" id="allmap"></div>
    </div>
</div>
<!-- 联系我们 -->
<div class="share">
    <div class="center">
        <div class="left" style="line-height: 40px;">
            <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/houdunwang.png" alt="">
        </div>
        <!--<div class="right bdsharebuttonbox">-->
        <!--<span>分享至</span>-->
        <!--<a href="#" class="bds_sqq qq" data-cmd="sqq" title="分享到QQ"></a>-->
        <!--<a href="#" class="bds_weixin weixin" data-cmd="weixin" title="分享到微信"></a>-->
        <!--<a href="#" class="bds_qzone qzone" data-cmd="qzone" title="分享到QQ空间"></a>-->
        <!--<a href="#" class="bds_weixin friend" data-cmd="tieba" title="分享到百度贴吧"></a>-->
        <!--<a href="#" class="bds_tsina tsina" data-cmd="tsina" title="分享到新浪微博"></a>-->
        <!--<a href="#" class="bds_tqq tqq" data-cmd="tqq" title="分享到腾讯微博"></a>-->
        <!--</div>-->
    </div>
</div>

<!-- 底部区域 -->
<div class="foot">
    <div class="center">
        <div class="company">
            <p class="title">The Company</p>
            <ul>
                <li><a href="http://www.houdunwang.com/">实战培训</a></li>
                <li><a href="http://www.houdunren.com/">在线视频</a></li>
                <li><a href="http://bbs.houdunwang.com/portal.php">论坛讨论</a></li>
                <li><a href="#">关于我们</a></li>
            </ul>
        </div>
        <div class="lianxi">
            <p class="title">Contact</p>
            <ul>
                <li><a href="http://houdunren.com" target="_blank">houdunren.com</a></li>
                <li>400-682-3231</li>
            </ul>
        </div>
        <div class="address">
            <p class="title">Address</p>
            <ul>
                <li>北京市朝阳区马泉营</li>
                <li>顺白路12号</li>
                <li>比目鱼创业园A区</li>
            </ul>
        </div>
        <div class="follow">
            <p class="title">Follow Us</p>
            <a href="javascript:void(0);" class="tsina" title="马上就要放大招了，敬请期待~"></a>
            <a href="javascript:void(0);" class="gzweixin" title=""></a>
        </div>
        <div class="gzherweima">
            <img src="<?php echo WEB_PATH;?>statics/houdunwang/images/gongzhonghao.jpg" alt="">
            <p>扫一扫，关注后盾</p>
        </div>
    </div>
    <!--<div class="bottom">-->
    <!--<div class="copyright">-->
    <!--Copyright © 2016 Yimao Technology Development(Shanghai)Co,.Ltd.All rights reserved-->
    <!--</div>-->
    <!--</div>-->
</div>
<!-- 底部区域 -->
<!-- 手机版本menu -->
<link type="text/css" rel="stylesheet" href="http://www.yimaokeji.com/statics/ymkj/css/jquery.mmenu.all.css" />
<script type="text/javascript" src="http://www.yimaokeji.com/statics/ymkj/js/jquery.mmenu.all.min.js"></script>
<script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "16"
        },
        "share": {},
        // "image": {
        // 	"viewList": ["sqq", "weixin", "qzone", "tieba", "tsina", "tqq"],
        // 	"viewText": "分享到：",
        // 	"viewSize": "16"
        // },
        // "selectShare": {
        // 	"bdContainerClass": null,
        // 	"bdSelectMiniList": ["sqq", "weixin", "qzone", "tieba", "tsina", "tqq"]
        // }
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("nav#menu").mmenu({
            offCanvas: {
                position: "right",
                zposition : "front"
            }
        });
        $(".gzweixin").hover(function(){
            var height = document.documentElement.clientHeight;
            $(".gzherweima").css('bottom',(height - 200) / 2);
            $(".gzherweima").css('display','block');
        },function(){
            $(".gzherweima").css('display','none');
        });
    });
</script>
<nav id="menu">
    <ul>
        <li><a href="http://www.yimaokeji.com/" >首页</a></li>
        <li>
            <a href="http://www.yimaokeji.com/list-1-1.html" >后盾新闻</a>
            <ul>
                <li><a href="http://www.yimaokeji.com/list-8-1.html">公司新闻</a>
                <li><a href="http://www.yimaokeji.com/list-9-1.html">健康资讯</a>
                <li><a href="http://www.yimaokeji.com/list-10-1.html">行业动态</a>
            </ul>
        </li>
        <li>
            <a href="http://www.yimaokeji.com/list-2-1.html" >品牌与产品</a>
            <ul>
                <li><a href="http://www.yimaokeji.com/list-25-1.html">智能净水系统</a>
                <li><a href="http://www.yimaokeji.com/list-28-1.html">健康食品系统</a>
                <li><a href="http://www.yimaokeji.com">翼猫生物系统</a>
                <li><a href="http://www.yimaokeji.com/list-26-1.html">智能空净系统</a>
                <li><a href="http://www.yimaokeji.com/list-27-1.html">智能睡眠系统</a>
            </ul>
        </li>
        <li>
            <a href="http://www.yimaokeji.com/list-3-1.html" >视频中心</a>
            <ul>
                <li><a href="http://www.yimaokeji.com/list-11-1.html">翼猫产品</a>
                <li><a href="http://www.yimaokeji.com/list-12-1.html">翼猫+战略</a>
                <li><a href="http://www.yimaokeji.com/list-13-1.html">大事记</a>
                <li><a href="http://www.yimaokeji.com/list-14-1.html">福慧顺课堂</a>
            </ul>
        </li>
        <li><a href="http://www.yimaokeji.com/list-4-1.html" >翼猫+战略</a></li>

        <li><a href="http://www.yimaokeji.com/list-5-1.html" >主题活动</a></li>

        <li><a href="http://www.yimaokeji.com/list-6-1.html" >售后服务</a></li>

        <li>
            <a href="http://www.yimaokeji.com/list-7-1.html" class="current">关于翼猫</a>
            <ul>
                <li><a href="http://www.yimaokeji.com/list-7-1.html#ppyxl">品牌影响力</a></li>
                <li><a href="http://www.yimaokeji.com/list-7-1.html#wmdys">我们的优势</a></li>
                <li><a href="http://www.yimaokeji.com/list-7-1.html#jrwm">加入我们</a></li>
                <li><a href="http://www.yimaokeji.com/list-7-1.html#lxwm">联系我们</a></li>
            </ul>
        </li>

        <li><a href="http://www.yimaokeji.com/list-29-1.html">体验服务中心查询</a></li>
    </ul>
    <!-- <ul>
        <li><a href="#">Home</a></li>
        <li><span>About us</span>
            <ul>
                <li><a href="#about/history">History</a></li>
                <li><span>The team</span>
                    <ul>
                        <li><a href="#about/team/management">Management</a></li>
                        <li><a href="#about/team/sales">Sales</a></li>
                        <li><a href="#about/team/development">Development</a></li>
                    </ul>
                </li>
                <li><a href="#about/address">Our address</a></li>
            </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
    </ul> -->
</nav>



<!-- 手机版本menu --!><div class="hylx">
	<img src="http://www.yimaokeji.com/statics/ymkj/images/mobile/huanYing.jpg" alt="">
	<p class="xinxi">了解更多关于我们的信息，请联系</p>
	<p class="email">service@yimaokeji.com</p>
	<p class="phone">400-151-9999</p>
</div>
<div class="lastdiv">
	<div class="company"><img src="http://www.yimaokeji.com/statics/ymkj/images/Yimao.png" alt="">翼猫科技发展(上海)有限公司</div>
	<p class="copyr">Copyright © 2016 Yimao Technology Development(Shanghai)</p>
	<p class="co">Co,.Ltd.All rights reserved.</p>
	<div class="lastshare bdsharebuttonbox">
		<!-- <span class="weixin"></span> -->
<!-- <span class="weibo"></span> -->
<a href="#" class="bds_sqq qq" data-cmd="sqq" title="分享到QQ"></a>
<a href="#" class="bds_weixin weixin" data-cmd="weixin" title="分享到微信"></a>
<a href="#" class="bds_qzone qzone" data-cmd="qzone" title="分享到QQ空间"></a>
<a href="#" class="bds_weixin friend" data-cmd="tieba" title="分享到百度贴吧"></a>
<a href="#" class="bds_tsina tsina" data-cmd="tsina" title="分享到新浪微博"></a>
<a href="#" class="bds_tqq tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
</div>
</div>
<script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "16"
        },
        "share": {},
        // "image": {
        // 	"viewList": ["sqq", "weixin", "qzone", "tieba", "tsina", "tqq"],
        // 	"viewText": "分享到：",
        // 	"viewSize": "16"
        // },
        // "selectShare": {
        // 	"bdContainerClass": null,
        // 	"bdSelectMiniList": ["sqq", "weixin", "qzone", "tieba", "tsina", "tqq"]
        // }
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script><!-- <div class="hylx">
	<img src="http://www.yimaokeji.com/statics/ymkj/images/mobile/huanYing.jpg" alt="">
	<p class="xinxi">了解更多关于我们的信息，请联系</p>
	<p class="email">service@yimaokeji.com</p>
	<p class="phone">400-151-9999</p>
</div>
<div class="lastdiv">
	<div class="company"><img src="http://www.yimaokeji.com/statics/ymkj/images/Yimao.png" alt="">翼猫科技发展(上海)有限公司</div>
	<p class="copyr">Copyright © 2016 Yimao Technology Development(Shanghai)</p>
	<p class="co">Co,.Ltd.All rights reserved.</p>
	<div class="lastshare">
		<span class="weixin"></span>
		<span class="weibo"></span>
	</div>
</div> -->

<!-- 分享 -->

<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map('allmap');
    var poi = new BMap.Point(116.52179315359358,40.04801374641647);
    map.centerAndZoom(poi, 18);
    map.enableScrollWheelZoom();

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
        '<img src="<?php echo WEB_PATH;?>statics/houdunwang/images/houdunwang.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:70px;height:70;margin-left:3px;background:#f22f16"/>' +
        '地址：北京市朝阳区马泉营顺白路12号比目鱼创业园A区<br/>电话：400-682-3231<br/>简介：后盾网隶属于北京后盾计算机技术培训有限责任公司，是专注于培养中国互联网顶尖PHP程序语言专业人才的专业型培训机构。' +
        '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
        title  : "翼猫科技",      //标题
        width  : 340,             //宽度
        height : 125,              //高度
        panel  : "panel",         //检索结果面板
        enableAutoPan : true,     //自动平移
        searchTypes   :[
            BMAPLIB_TAB_SEARCH,   //周边检索
            BMAPLIB_TAB_TO_HERE,  //到这里去
            BMAPLIB_TAB_FROM_HERE //从这里出发
        ]
    });
    var marker = new BMap.Marker(poi); //创建marker对象
    searchInfoWindow.open(marker);
    marker.addEventListener("click", function(e){
        searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
</script>

</body>
</html>