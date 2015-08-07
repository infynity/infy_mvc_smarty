<?php

class ContentController extends CommonController
{

    function article()
    {
        $articles = $this->model->getarticles();
        $this->assign("articles", $articles);
        $this->display();
    }

    function add()
    {
//        echo date("Y-m-d",time());
        $this->assign("time", date('Y-m-d',time()));
        $cates = $this->model->getcates();
        $this->assign("cates", $cates);
        $this->display();

    }

    function category()
    {
        $cates = $this->model->getcates();
        $this->assign("cates", $cates);
        $this->display();
    }

    function addcate()
    {
        $cates = $this->model->getcates();
        $this->assign("cates", $cates);
        $this->display();

    }

    function addarticle()
    {
        if ($_POST) {
            //dump($_POST);
            $this->model->addarticle($_POST);
        }
        $this->jump("index.php?c=content&a=article", "添加成功");
    }

    function delete()
    {
        if ($_POST) {
            $this->model->delete($_POST);
            $this->jump("index.php?c=content&a=article", "删除成功");
        } elseif ($_GET) {
            $this->model->delete($_GET['did']);
            $this->jump("index.php?c=content&a=article", "删除成功");
        }
    }


    function edit()
    {
        if ($_GET) {
            $res = $this->model->edit($_GET['eid']);
            $this->assign("article", $res);
        }
        $this->display();
    }

    function addonecate(){
        if ($_POST) {

            $this->model->addonecate($_POST);
        }
        $this->jump("index.php?c=content&a=category", "添加成功");
    }

    function editarticle(){

        if ($_POST) {

            $this->model->editarticle($_POST);
            $this->jump("index.php?c=content&a=article", "修改成功");
        }
    }
}