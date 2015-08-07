<?php

class AdminController extends CommonController
{
    function index()
    {
        // $this->assign('admin',$_SESSION['admin']);
        $this->display();
    }

    function info()
    {
        $res = $this->model->getinfo();
        $this->assign("res", $res);
        $this->display();
    }

    function update(){
//            dump($_POST);
        $this->model->update($_POST);
//        $res = $this->model->getinfo();
//        $this->assign("res", $res);
//        $this->display("info.html");
        $this->jump("index.php?c=admin&a=info", "update ok");
    }

    function changepwd(){
        $this->display();

    }

    function flink(){

        $res = $this->model->getflink();
        $this->assign("res", $res);
        $this->display();

    }
}