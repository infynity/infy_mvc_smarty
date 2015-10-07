<?php

class IndexController extends CommonController
{
    function index()
    {       //方法，实例方法
     // $messages =$this->model->readmess(0);
     // foreach($messages as $k => $message){
     // 	$messages[$k][date]=date("Y-m-d H:i:s",$message[date]);
     // }
     // dump($messages);
        $imgs = $this->model->getimgs();
        // dump($imgs);
        $this->assign("imgs", $imgs);
//        $this->assign('dd',false);
        $this->display();

    }
    function store(){
        $this->model->store($_POST);
    }
    function chat(){
        $id=$_POST['id'];

      $messages =$this->model->readmess($id);
  	 foreach($messages as $k => $message){
     	$messages[$k][date]=date("Y-m-d H:i:s",$message[date]);
     }
       echo json_encode($messages);
    }
}

