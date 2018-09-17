<?php

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/7/16
 * Time: 15:32
 */
class FlinkController extends CommonController
{

    function add()
    {
        if ($_POST) {
            $this->model->add($_POST);
            $this->jump("index.php?c=admin&a=flink", "添加成功");
        }

    }

    function delete(){
      // dump($_POST);
        if ($_POST) {
            dump($_POST);
            $this->model->delete($_POST);
            $this->jump("index.php?c=admin&a=flink", "删除成功");
        }elseif ($_GET){
//            dump($_GET);
            $this->model->delete($_GET['did']);
            $this->jump("index.php?c=admin&a=flink", "删除成功");
        }
    }
    function edit()
    {
        if ($_POST) {
            $this->model->edit($_POST);
            $this->jump("index.php?c=admin&a=flink", "修改成功");
        }

    }

    function sort(){
        if ($_POST) {
           // dump($_POST);
            $this->model->sort($_POST);
            $this->jump("index.php?c=admin&a=flink");
        }
    }
}