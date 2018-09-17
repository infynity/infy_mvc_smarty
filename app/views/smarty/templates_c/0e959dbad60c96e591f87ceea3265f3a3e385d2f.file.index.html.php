<?php /* Smarty version Smarty-3.1.20, created on 2018-09-17 07:11:57
         compiled from "/home/tt2/infy/app/views/index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:19703506935b9f2b56c34853-35205729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e959dbad60c96e591f87ceea3265f3a3e385d2f' => 
    array (
      0 => '/home/tt2/infy/app/views/index/index.html',
      1 => 1537168313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19703506935b9f2b56c34853-35205729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5b9f2b56ca7fc5_20300643',
  'variables' => 
  array (
    'assets' => 0,
    'imgs' => 0,
    'k' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9f2b56ca7fc5_20300643')) {function content_5b9f2b56ca7fc5_20300643($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>我的网站页面</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/my.css" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/shizhong/css/fliptimer.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!--顶部开始-->
<div class="top">
    <div class="container">
        <div class="img">
            <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/competitors.png" alt=""/></a>
        </div>
        <div class="header">
            <div class="app">
                <a href="">移动客户端APP下载</a>
            </div>
            <ul>
                <li><span>您好！欢迎来到iNFYNITY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                <li><a href="index.php?c=user&a=register">注册</a></li>
                <li><span>|</span></li>
                <li><a href="index.php?c=user&a=login">登录</a></li>
                <li><span>|</span></li>
                <li><a href="">设为首页</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--顶部结束-->
<!--导航开始-->
<div class="nav">
    <div class="container">
        <ul>
            <li><a href="">首页</a></li>
            <li id="tan1"><a href="">游戏</a></li>
            <li><a href="">论坛</a></li>
            <li id="tan2"><a href="">人生如戏</a></li>
            <li><a href="">文库</a></li>
            <li><a href="">分享</a></li>
            <li><a href="">地图</a></li>
            <!--这里有css a:hover的原因  以及js的原因        ssssssssssssssssssssssssssssssssss     -->
            <!--<li id="tan3"><a href="javascript:void 0;">珍惜时间</a></li>-->
            <li id="tan3" ><a href="javascript:void 0;" class="firm" title="点击固定时间框">珍惜时间</a></li>

        </ul>
        <div class="clear"></div>
    </div>

    <div class="tan1 dsp_n ">
        <a href="http://pingce.xincheping.com/firsttry/" target="_blank">首试</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a
            href="http://pingce.xincheping.com/pingce/" target="_blank">原创车评</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a
            href="http://pingce.xincheping.com/duibi/" target="_blank">对比测试</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a
            href="http://pingce.xincheping.com/youhao/" target="_blank">油耗测试</a>
    </div>
    <div class="tan2 dsp_n">
        <a href="http://v.xincheping.com/1010/1-1.html" target="_blank">每日新车评</a>&nbsp; | &nbsp;
        <a href="http://v.xincheping.com/998/1-1.html" target="_blank">深度评车</a>&nbsp; | &nbsp;
        <a href="http://v.xincheping.com/1005/1-1.html" target="_blank">对比测试</a>&nbsp; | &nbsp;
        <a href="http://v.xincheping.com/1011/1-1.html" target="_blank">新车评Let's购</a>&nbsp; | &nbsp;
        <a href="http://v.xincheping.com/1012/1-1.html" target="_blank">每周车闻乱弹</a>&nbsp; | &nbsp;
    </div>
    <div class="container">
        <div class="tan3 dsp_n" style="float:right; margin-bottom: 7px;" data="yy">
            <div class="fighting" style="float: left;height:104px;width: 665px;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/5-15062FZ937.gif" style="margin-top: 35px;">
            </div>
            <div class="dowebok " style="float: left">
                <div class="hours"></div>
                <div class="minutes"></div>
                <div class="seconds"></div>
            </div>
        </div>
    </div>


</div>
<!--导航结束-->

<!--正文部分开始-->
<div class="container">
<div class="main">
    <div class="left_focus">
        <div class="f1234">
            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['img']->key;
?>

                <div class="f<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
 <?php if ($_smarty_tpl->tpl_vars['k']->value!=0) {?> dsp_n <?php }?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['file'];?>
" width="101">
                </div>
            <?php } ?>
         <!--   <div class="f2 dsp_n">

            </div>
            <div class="f3 dsp_n">

            </div>
            <div class="f4 dsp_n">

            </div>
            <div class="f5 dsp_n">

            </div>
            <div class="f6 dsp_n">

            </div>
            <div class="f7 dsp_n">

            </div>
            <div class="f8 dsp_n">

            </div>-->

        </div>
        <!--<div class="rile">-->
            <!--<a href="" class="pre"></a>-->
            <!--<a href="" class="next"></a>-->
        <!--</div>-->
        <div class="pre2">
           <
        </div>
        <div class="next2">
           >
        </div>

        <div class="mt">
            <div class="showcase-thumbnail-button-backward">
                <span class="showcase-thumbnail-vertical"></span>
            </div>
            <div class="case" style="margin-bottom: 10px;">
                <div class="caselist">
                    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['imgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['img']->key;
?>
                    <div class="case1 <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?> active <?php }?>  <?php if ($_smarty_tpl->tpl_vars['k']->value==3||$_smarty_tpl->tpl_vars['k']->value==7) {?> casebot<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['file'];?>
" width="101">
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="showcase-thumbnail-button-forward" style="margin-bottom: 0">
                <span class="showcase-thumbnail-vertical"></span>
            </div>
            <div class="history" style="margin-bottom: 0">
                <a href="http://www.xincheping.com/history/" target="_blank"> 往日回顾</a>
            </div>
        </div>
    </div>
    <div class="right_search">
        <div class="xcp_input">
            <form action="" method="post">
            <input name="k" value="可查找一部车的优缺点、油耗、视频……" type="text" class="xcp_text"
                   style="color: rgb(153, 153, 153); outline: none;">
            <input name="" type="submit" class="xcp_ssbt" value="">
            </form>
        </div>

        <div class="scroll" style="margin-bottom: 4px;">
            <div id=demo style="overflow:hidden;height:220px;width:270px;background:white;color:#ffffff">
                <div id=demo1>
                    <a href="">
                        <div class="hotlist">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/1.jpg">
                            <span style="color:red">#起亚全新K5#</span>
                            少打打点缩进阿隆索的骄傲了三等奖 苏打水大大神 少打打点缩进阿隆索的骄傲了三等奖 苏打水大大神 少打打点缩进阿隆索的骄傲了三等奖 苏打水大大神 少打打点缩进阿隆索的骄傲了三等奖
                            苏打水大大神ssssssssss
                            <p><span>评论(8)</span>2015-07-29&nbsp;&nbsp;作者：伍澳迦</p>
                        </div>
                    </a>
                    <a href="">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/2.jpg">
                    </a>
                    <a href="">
                        <div class="hotlist">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/3.jpg">
                            <font color="#0080e0">#奥迪全新A3#</font>
                            少打打点缩进阿隆索的骄傲了三等奖 苏打水大大神 少打打点缩进阿隆索的骄傲了三等奖 苏打水大大神 少打打点缩进阿隆索的骄傲了三等奖 苏打水大大神 少打打点缩进阿隆索的骄傲了三等奖
                            苏打水大大神ssssssssss
                            <p><span>评论(8)</span>2015-07-29&nbsp;&nbsp;作者：伍澳迦</p>
                        </div>
                    </a>
                    <a href="">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/5.jpg">
                    </a>
                    <a href="">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/4.jpg">
                    </a>
                </div>
                <div id=demo2></div>
            </div>
        </div>
        <div class="bottom-tag">
            <ul>
                <li style="margin-left:0px;"><a href="\" class="xcp_car bg" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/bianping-yuanicon-08.png" alt=""/><span>收藏本页</span></a></li>
                <li><a href="" class="xcp_view bg" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/bianping-yuanicon-12.png" alt=""/><span>降价提醒</span></a></li>
                <li><a href="" class="xcp_gift bg" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/bianping-yuanicon-03.png" alt=""/><span>我的汽车</span></a></li>
                <li><a href="" class="xcp_pic bg" target="_blank">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/bianping-yuanicon-09.png" alt=""/><span>与我联系</span></a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="recom">
    <div class="recommend">
        <h4>近期推荐</h4>
        <span style="float: right;margin-top: 19px;"><a href="">更多</a></span>

        <div class="clear"></div>
        <div class="reccont">
            <ul>

                <li style="position: relative;">
                    <div class="detail">
                        <div class="picbox">
                            <div class="pic">
                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/rdn_51f63a487103a.png" alt=""></p>
                            </div>
                        </div>
                        <p class="version">北京云梦网络科技有限公司</p>

                        <p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>
                    </div>
                    <div class="detail2">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/rdn_51f63a487103a.png" style='width:230px;height:194px;' alt="">
                    </div>

                    <div class="button">
                        <a href="">查看详情 <i></i></a>

                    </div>
                </li>





                <li style="position: relative;">
                    <div class="detail">
                        <div class="picbox">
                            <div class="pic">
                                <p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img
                                        src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/u=650362668,1987062105&fm=15&gp=0.jpg" alt=""></a></p>
                            </div>
                        </div>
                        <p class="version">北京云梦网络科技有限公司</p>

                        <p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>
                    </div>
                    <div class="detail2">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/rdn_51f63a487103a.png" style='width:230px;height:194px;' alt="">
                    </div>
                    <div class="button">
                        <a href="">查看详情 <i></i></a>
                    </div>
                </li>
                <li style="position: relative;">
                    <div class="detail">
                        <div class="picbox">
                            <div class="pic">
                                <p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img
                                        src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/u=4056107647,1925316932&fm=21&gp=0.jpg" alt=""></a></p>
                            </div>
                        </div>
                        <p class="version">北京云梦网络科技有限公司</p>

                        <p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>
                    </div>
                    <div class="detail2">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/rdn_51f63a487103a.png" style='width:230px;height:194px;' alt="">
                    </div>
                    <div class="button">
                        <a href="">查看详情 <i></i></a>
                    </div>
                </li>
                <li style="position: relative;">
                    <div class="detail">
                        <div class="picbox">
                            <div class="pic">
                                <p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img
                                        src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/2511774_LogoiG.jpg" alt=""></a></p>
                            </div>
                        </div>
                        <p class="version">北京云梦网络科技有限公司</p>

                        <p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>
                    </div>
                    <div class="button">
                        <a href="">查看详情 <i></i></a>
                    </div>
                </li>

                <li style="position: relative;">
                    <div class="detail">
                        <div class="picbox">
                            <div class="pic">
                                <p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img
                                        src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/u=646450047,3069659210&fm=21&gp=0.jpg" alt=""></a></p>
                            </div>
                        </div>
                        <p class="version">北京云梦网络科技有限公司</p>

                        <p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>
                    </div>
                    <div class="button">
                        <a href="">查看详情 <i></i></a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>


<!--<div class="recom">-->
    <!--<div class="recommend">-->
        <!--<h4>近期推荐</h4>-->

        <!--<div class="clear"></div>-->
        <!--<div class="reccont">-->
            <!--<ul>-->

                <!--<li>-->
                    <!--<div class="detail">-->
                        <!--<div class="picbox">-->
                            <!--<div class="pic">-->
                                <!--<p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img-->
                                        <!--src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/TB1EUoMHVXXXXb0XpXXSutbFXXX.jpg" alt=""></a></p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<p class="version">北京云梦网络科技有限公司</p>-->

                        <!--<p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>-->
                    <!--</div>-->
                    <!--<div class="button">-->
                        <!--<a href="">查看详情 <i></i></a>-->

                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="detail">-->
                        <!--<div class="picbox">-->
                            <!--<div class="pic">-->
                                <!--<p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img-->
                                        <!--src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/TB1EUoMHVXXXXb0XpXXSutbFXXX.jpg" alt=""></a></p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<p class="version">北京云梦网络科技有限公司</p>-->

                        <!--<p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>-->
                    <!--</div>-->
                    <!--<div class="button">-->
                        <!--<a href="">查看详情 <i></i></a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="detail">-->
                        <!--<div class="picbox">-->
                            <!--<div class="pic">-->
                                <!--<p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img-->
                                        <!--src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/TB1EUoMHVXXXXb0XpXXSutbFXXX.jpg" alt=""></a></p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<p class="version">北京云梦网络科技有限公司</p>-->

                        <!--<p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>-->
                    <!--</div>-->
                    <!--<div class="button">-->
                        <!--<a href="">查看详情 <i></i></a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="detail">-->
                        <!--<div class="picbox">-->
                            <!--<div class="pic">-->
                                <!--<p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img-->
                                        <!--src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/TB1EUoMHVXXXXb0XpXXSutbFXXX.jpg" alt=""></a></p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<p class="version">北京云梦网络科技有限公司</p>-->

                        <!--<p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>-->
                    <!--</div>-->
                    <!--<div class="button">-->
                        <!--<a href="">查看详情 <i></i></a>-->
                    <!--</div>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<div class="detail">-->
                        <!--<div class="picbox">-->
                            <!--<div class="pic">-->
                                <!--<p><a href="http://market.aliyun.com/store/57801.html?" target="_blank"><img-->
                                        <!--src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/TB1EUoMHVXXXXb0XpXXSutbFXXX.jpg" alt=""></a></p>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<p class="version">北京云梦网络科技有限公司</p>-->

                        <!--<p class="company">基于云计算的企业网站建设专家，标配CDN云存储云数据库</p>-->
                    <!--</div>-->
                    <!--<div class="button">-->
                        <!--<a href="">查看详情 <i></i></a>-->
                    <!--</div>-->
                <!--</li>-->

            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
</div>
<!--正文部分结束-->

<!--热点部分开始-->
<div class="article">
    <div class="article_main">
        <div class="article1">
            <h3>联盟新闻</h3>
            <a href="" class="more-entry">...</a>
            <ul>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
            </ul>
        </div>
        <div class="article2">
            <h3>精彩视频</h3>
            <ul>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
            </ul>
        </div>
        <div class="article3">
            <h3>玩家留言</h3>
            <ul>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
                <li><a href="http://bbs.yunos.com/read/263302997" target="_blank">黑色版纽曼纽扣开箱 高颜值国民指纹机</a></li>
            </ul>
        </div>
    </div>
</div>
<!--热点部分结束-->
<!--侧边栏开始-->
<div class="side">
    <ul class="sideul" >
        <li class="dsp_n totop"><a href="" class="openside gotop " >返回顶部</a></li>
        <li class="yincang"></li>
        <li><a href="" class="openside cart">购物车</a></li>
        <li><a href="" class=" openside receptionist">呼叫客服</a></li>
        <li><a href="" class="addapp">
            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/s_t02.png" style="display: none;position: relative;right:106px;top:-1px;border: 1px solid silver;">
        </a>
        </li>
    </ul>
</div>
<!--侧边栏结束-->
<!--footer开始-->
<div class="footer">

    <div class="footdata">
        <p class="big">

            <a href="http://www.aliyun.com/about/?spm=5176.1824287.25.1.DiatOn" target="_blank"
               data-spm-anchor-id="5176.1824287.25.1">关于我们</a>

            <a href="http://www.aliyun.com/law/?spm=5176.1824287.25.2.DiatOn" target="_blank"
               data-spm-anchor-id="5176.1824287.25.2">法律声明</a>

            <a href="http://www.aliyun.com/act/aliyun/rule/index.html?spm=5176.1824287.25.3.DiatOn" target="_blank"
               data-spm-anchor-id="5176.1824287.25.3">政策法规</a>

            <a href="http://help.aliyun.com/noticelist.html?spm=5176.1824287.25.4.DiatOn" target="_blank"
               data-spm-anchor-id="5176.1824287.25.4">服务公告</a>

            <a href="http://www.aliyun.com/links/?spm=5176.1824287.25.5.DiatOn" target="_blank"
               data-spm-anchor-id="5176.1824287.25.5">友情链接</a>

        </p>

        <p class="link-wrap">

            <a class="link-item" href="http://www.alibabagroup.com/cn/global/home" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8001" data-spm-anchor-id="5176.1824287.25.d8001">阿里巴巴集团</a>

            <a class="link-item" href="//www.taobao.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8002"
               data-spm-anchor-id="5176.1824287.25.7">淘宝网</a>

            <a class="link-item" href="//www.tmall.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8003"
               data-spm-anchor-id="5176.1824287.25.8">天猫</a>

            <a class="link-item" href="//ju.taobao.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8004"
               data-spm-anchor-id="5176.1824287.25.9">聚划算</a>

            <a class="link-item" href="http://www.aliexpress.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8005" data-spm-anchor-id="5176.1824287.25.10">全球速卖通</a>

            <a class="link-item" href="http://www.alibaba.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8006" data-spm-anchor-id="5176.1824287.25.11">阿里巴巴国际交易市场</a>

            <a class="link-item" href="http://www.1688.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8007"
               data-spm-anchor-id="5176.1824287.25.12">1688</a>

            <a class="link-item" href="http://www.alimama.com/index.htm" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8008" data-spm-anchor-id="5176.1824287.25.13">阿里妈妈</a>

            <a class="link-item" href="//www.alitrip.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8009"
               data-spm-anchor-id="5176.1824287.25.14">阿里旅行・去啊</a>

            <a class="link-item" href="http://www.aliyun.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8010" data-spm-anchor-id="5176.1824287.25.15">阿里云计算</a>

            <a class="link-item" href="http://www.yunos.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8011" data-spm-anchor-id="5176.1824287.25.16">YunOS</a>

            <a class="link-item" href="//aliqin.tmall.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8012"
               data-spm-anchor-id="5176.1824287.25.17">阿里通信</a>

            <a class="link-item" href="http://wanwang.aliyun.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8013" data-spm-anchor-id="5176.1824287.25.18">万网</a>

            <a class="link-item" href="http://www.autonavi.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8014" data-spm-anchor-id="5176.1824287.25.19">高德</a>

            <a class="link-item" href="http://www.uc.cn/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8015"
               data-spm-anchor-id="5176.1824287.25.20">UC</a>

            <a class="link-item" href="http://www.umeng.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8016" data-spm-anchor-id="5176.1824287.25.21">友盟</a>

            <a class="link-item" href="https://kanbox.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8017"
               data-spm-anchor-id="5176.1824287.25.22">酷盘</a>

            <a class="link-item" href="http://www.xiami.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8018" data-spm-anchor-id="5176.1824287.25.23">虾米</a>

            <a class="link-item" href="http://www.ttpod.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8019" data-spm-anchor-id="5176.1824287.25.24">天天动听</a>

            <a class="link-item" href="http://www.laiwang.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8020" data-spm-anchor-id="5176.1824287.25.25">来往</a>

            <a class="link-item" href="http://www.dingtalk.com/?lwfrom=20150205111943449" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8021" data-spm-anchor-id="5176.1824287.25.26">钉钉</a>

            <a class="link-item" href="https://11main.com/" target="_blank" data-spm-click="gostr=/aliyun;locaid=d8022"
               data-spm-anchor-id="5176.1824287.25.27">11 Main</a>

            <a class="link-item" href="https://www.alipay.com/" target="_blank"
               data-spm-click="gostr=/aliyun;locaid=d8023" data-spm-anchor-id="5176.1824287.25.28">支付宝</a>

        </p>

        <p>
            © 2009-2015 Aliyun.com 版权所有 ICP证：浙B2-20080101
        </p>
    </div>
</div>


<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery-1.11.1.min.js" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/my.js" language="javaScript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/shizhong/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/shizhong/js/jquery.fliptimer.js"></script>
<script>
    $(function () {
        $('.dowebok').flipTimer({
            seconds: true
        });
        var speed = 100
        demo2.innerHTML = demo1.innerHTML
        function Marquee() {
            if (demo2.offsetTop - demo.scrollTop <= 0)
                demo.scrollTop -= demo1.offsetHeight
            else {
                demo.scrollTop++
            }
        }

        var MyMar = setInterval(Marquee, speed)
        demo.onmouseover = function () {
            clearInterval(MyMar)
        }
        demo.onmouseout = function () {
            MyMar = setInterval(Marquee, speed)
        }
    });


</script>

</body>


</html><?php }} ?>
