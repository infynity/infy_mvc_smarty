<?php /* Smarty version Smarty-3.1.20, created on 2015-10-07 00:18:34
         compiled from "/var/www/infy/app/views/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:7167362435613f45a2306d2-53839988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f490af5addfb3e88dc0ef2ff778ef2b726efab6' => 
    array (
      0 => '/var/www/infy/app/views/admin/index.html',
      1 => 1443503536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7167362435613f45a2306d2-53839988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5613f45a280ec3_81915109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613f45a280ec3_81915109')) {function content_5613f45a280ec3_81915109($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/css/bootstrap.min.css"/>

    <style>
        .clear{
            padding:0;
            margin: 0;
            border:0;
            clear:both;
        }
        #content-header h1 {
            color: #555555;
            font-size: 28px;
            font-weight: normal;
            float: none;
            text-shadow: 0 1px 0 #ffffff;
            margin-left: 20px;
            position: relative;
        }
        .container-fluid1{
            margin-right:300px;
        }

        .quick-actions_homepage{
            float:left;
        }

        .quick-actions_homepage ul{
            list-style: none;
            float:left;
            padding-left: 0;
        }
        .quick-actions_homepage ul li{
            float:left;
            text-align: center;
            margin-right: 10px;
            /*margin-bottom: 0px;*/

        }
        .quick-actions_homepage ul li:last-child{
            margin-right: 0px;

        }

        a:hover {
            text-decoration: none;
            background-color: black;
        }
        .quick-actions_homepage  ul li a {
            display:block;
            font-size: 18px;
            padding: 10px 52px;
            color:white;

        }
        .quick-actions_homepage  ul li a i{
            display:block;

        }
        .span3{
            width:285px;
        }
        .wid-box {

            border-left: 1px solid #CDCDCD;
            border-top: 1px solid #CDCDCD;
            border-right: 1px solid #CDCDCD;
            clear: both;

            margin-top:30px;
            margin-bottom: 16px;

        }

        .wid-title {
            background: #efefef;
            border-bottom: 1px solid #CDCDCD;
            height: 36px;
        }
        .wid-title span.icon {
            padding: 9px 10px 7px 11px;
            float: left;
            border-right: 1px solid #dadada;
        }

        h5 {
            padding-top:10px;
            margin-top:0;
        }
        .span6{
            width:50%;
            float:left;
        }
        body {
            background: url(app/assets/images/6baee73d9c189bc2a5bf7fddd9b06de4.jpg) no-repeat center right fixed;
            background-size: cover;
            /*background: url(app/assets/images/934c57c9d6b6f4c7dbdcc566479cd022.jpg)  center right fixed;*/
            /*padding-top: 50px;*/
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">主页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">内容管理 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="#">Action</a></li>-->
                        <!--<li><a href="#">Another action</a></li>-->
                        <li><a href="index.php?c=content&a=article">文章列表</a></li>
                        <li><a href="index.php?c=content&a=addimage">添加图片</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="index.php?c=content&a=category">栏目管理</a></li>
                        <!--<li role="separator" class="divider"></li>-->

                    </ul>
                </li>
                <li><a href="index.php?c=content&a=article">文件管理</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">系统设置 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="#">Action</a></li>-->
                        <!--<li><a href="#">Another action</a></li>-->
                        <li><a href="index.php?c=admin&a=info">站点信息</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="index.php?c=admin&a=changepwd">密码修改</a></li>
                        <!--<li role="separator" class="divider"></li>-->

                    </ul>
                </li>

                <li><a href="#">清除缓存</a></li>
            </ul>
            <!--  <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
              </form>-->
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">尊敬的 <?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>
 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="index.php?c=user&a=logout">安全退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="content">
    <div id="content-header">
        <h1>我的信息</h1>
    </div>

    <div class="container-fluid1">
        <hr>
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="btn-success span3"><a href="index.php?c=content&a=article"> <i class="glyphicon glyphicon-pencil"></i>内容管理</a></li>
                <li class="btn-info"><a href="/static/ckfinder/ckfinder2.html"> <i class="glyphicon glyphicon-cloud"></i>文件管理</a></li>
                <li class="btn-warning"><a href="index.php?c=admin&a=flink"> <i class="glyphicon glyphicon-star"></i>友情链接管理</a></li>
                <li class="btn-danger"><a href="/User/Setting/changeInfo"> <i class="glyphicon glyphicon-user"></i>用户管理</a></li>
                <li class="btn-primary"><a href="/System/Cache/clearCache"> <i class=" glyphicon glyphicon-refresh"></i>清除缓存</a></li>

                <!--<li class="bg_ls"><a href="index.html"> <i class="icon-envelope"></i> <span
                        class="label label-important">20</span>访客留言</a></li>-->
            </ul>
        </div>

        <div class="clear"></div>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">   我的信息</span> </div>
            <div class="panel-body">
                <p>...</p>

            <div class="span6">
                <!-- List group -->
                <table class="table table-hover  table-striped   ">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="span6">
                <table class="table table-bordered table-hover ">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>



</div>


<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/js/bootstrap.min.js"></script>

</body>
</html><?php }} ?>
