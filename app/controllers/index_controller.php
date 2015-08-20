<?php

class IndexController extends CommonController
{
    function index()
    {       //方法，实例方法
        $imgs = $this->model->getimgs();
        $this->assign("imgs", $imgs);
        $this->display();
    }

}