<?php

class UserController extends CommonController
{
    function register()
    {       //方法，实例方法

      
    }


    function create()
    {
        if ($_POST) {
            // dump($_POST);
            $this->model->create($_POST);
            $this->jump("index.php?c=user&a=login", "注册成功");

        }
    }

    function login()
    {


        $this->display();
    }


    function do_login()
    {
        if ($_POST) {
            // dump($_POST);
            if ($this->model->check($_POST)) {
                $this->jump("index.php?c=admin", "登录成功");
            } else {
                $this->jump("index.php?c=user&a=login", "账号密码错误");
            }
        }
    }


    function logout()
    {
        $this->clearSession();
        $this->jump("index.php?c=user&a=login", "您已经成功安全退出");
    }

    function changepwd(){
        if ($_POST){
           if( $this->model->changepwd($_POST)){
              $this->jump("index.php?c=admin&a=changepwd", "您已经成功修改密码");
           }else{
               $this->jump("index.php?c=admin&a=changepwd", "账号密码错误");

           }

        }
    }

}