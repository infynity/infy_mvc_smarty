<?php
/***
 * 项目入口文件
 */
//echo 3;die;
$redis = new redis();  
$result = $redis->connect('127.0.0.1', 6379);
$a=$redis->get('hello');  
$b=$redis->get('nvaisdjajskjfa');
$cc = $redis->get('access_time');
 //var_dump($cc);die;
//$cc= $redis->get('trojan1');
if($cc){
$d=	$redis->incr('access_time');
}else{
$d=	$redis->set('access_time',1);
}
//var_dump($result,$a,$b,$cc); //结果：bool(true)  
//var_dump($d);
//phpinfo();
//die;


require 'common.php';

