<?php /*%%SmartyHeaderCode:12934631515613634a715534-61909622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9bb629958dae07bc14368d325f8a716e9cb1f0' => 
    array (
      0 => '/var/www/infy/app/views/user/register.html',
      1 => 1443503543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12934631515613634a715534-61909622',
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5613634a72a972_62116086',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613634a72a972_62116086')) {function content_5613634a72a972_62116086($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/app/assets/bootstrap/css/bootstrap.min.css"/>
    <style>
        .container {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>用户注册 <small><a href="index.php?c=user&a=login">已有账号，立即登录</a></small></h1>
    </div>
    <div class="alert alert-danger error" role="alert" style="display: none;"></div>

    <form class="form-horizontal col-md-6 col-md-offset-3" action="index.php?c=user&a=create" method="post">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="用户名" name="username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="密码" name="password">
            </div>
        </div>
        <!--<div class="form-group">-->
        <!--<div class="col-sm-offset-2 col-sm-10">-->
        <!--<div class="checkbox">-->
        <!--<label>-->
        <!--<input type="checkbox"> Remember me-->
        <!--</label>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default submit">注册</button>
            </div>
        </div>
    </form>
</div>

<script src="/app/assets/js/jquery-2.1.4.min.js"></script>
<script src="/app/assets/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $(".submit").click(function(){
            var $username = $("#username");
            var $password = $("#password");

            var username = $username.val();
            var password = $password.val();
            var info ="";
            var error = 0;

            if(username == "") {
                info += "请填写用户名<br>";
                error++;
            }

            if(password == "") {
                info += "请填写密码";
                error++;
            }

            if(error != 0) {
                $(".error").html(info).fadeIn(300);
                return false;
            }


        })

    })
</script>
</body>
</html><?php }} ?>
