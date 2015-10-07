<?php /* Smarty version Smarty-3.1.20, created on 2015-10-06 21:52:16
         compiled from "/var/www/infy/app/views/user/login.html" */ ?>
<?php /*%%SmartyHeaderCode:142848520856136345277e44-51128853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6db2d36e11b34b8528351849069c54f5510071' => 
    array (
      0 => '/var/www/infy/app/views/user/login.html',
      1 => 1444139535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142848520856136345277e44-51128853',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_561363452ad9d2_21170695',
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561363452ad9d2_21170695')) {function content_561363452ad9d2_21170695($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/css/bootstrap.min.css"/>
    <style>
        .container {
            margin-top: 80px;
        }
        body {
            background: url(app/assets/images/e757c4eb2538f7044b6b00d80a43474c.jpg) no-repeat center right fixed;
            background-size: cover;
            /*background: url(app/assets/images/934c57c9d6b6f4c7dbdcc566479cd022.jpg)  center right fixed;*/
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div class="container col-md-12">
    <div class="page-header col-md-7 col-md-offset-3">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理员登录(bootstrap响应式) </h1>
    </div>
    <div class="alert alert-danger error col-md-7 col-md-offset-3" role="alert" style="display: none;"></div>

    <form class="form-horizontal col-md-6 col-md-offset-3" action="index.php?c=user&a=do_login" method="post">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="用户名" name="username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">密&nbsp;&nbsp;&nbsp;码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="密码" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rem" value="1"> Remember me

                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default submit">登录</button>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/js/bootstrap.min.js"></script>
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
                $(".error").html(info).slideDown(3000);
                return false;
            }
        })
        $(".form-control").focus(function(){
            $(".error").slideUp(3000);

        })
    })
</script>
</body>
</html><?php }} ?>
