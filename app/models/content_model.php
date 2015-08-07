<?php
class ContentModel extends CommonModel
{
    public $treeList = array();

    function addarticle($p) {

        $title=$p['title'];
        $article=$p['editor1'];
        $color=$p['color'];
        $cate_id=$p['cate_id'];
        $time=$p['time'];
        $description=$p['description'];
        $digest=$p['digest'];
        $picture=$p['picture'];
        $file=array();
        foreach ($p['file'] as $v){
            if ($v!=""){
                $file[]=$v;
            }
        }
        $file=join("+",$file);
        $this->db->query("insert into con_article (`title`, `article`, `color`, `cate_id`, `time`, `description`, `digest`, `picture`, `file`) values ('$title','$article','$color','$cate_id','$time','$description','$digest','$picture','$file')");
    }

    function getarticles(){

        $res=$this->all("select * from con_article order by id asc");
        foreach ($res as $k=>$v){
            $id=$v['cate_id'];
            $res1=$this->one("select * from con_cate where id='$id'");
            $res[$k]['cate_name']=$res1['name'];
        }

       return $res;
    }
    function delete($p)
    {
        if (is_array($p)) {
            $p = $p['item'];
            foreach ($p as $v) {
                $this->db->query("delete from con_article where id='$v'");
            }
        } else {
            $this->db->query("delete from con_article where id='$p'");
        }
    }

    function edit($p)
    {
        $id = $p;
        $res=$this->one("select * from con_article where id='$id'");
        return $res;
    }

    function getcates(){

        /* 二级分类$res=$this->all("select * from con_cate where parent_id=0");
         foreach ($res as $k=>$v){
         $arr=$this->all("select * from con_cate where parent_id=$v[id]");
         $res[$k]['child']=$arr;
        }
        dump ($res);
        return $res;*/

        /***
         * 无线分类
         */
        $list = $this->all("select * from con_cate order by `parent_id` asc, `sort` asc, `id` asc");
        return $this->tree($list);




    }
    /***
     * 无线分类 递归
     */
    public function tree(&$data, $pid = 0, $count = 1)
    {
        foreach ($data as $k => $v) {

            if ($v['parent_id'] == $pid) {

                $v['count'] = $count;
                $this->treeList [] = $v;
                unset($data[$k]);


                $this->tree($data, $v['id'], $count + 1);
            }
        }
        return $this->treeList;
    }
/*    function infi($concate,$pid=0,$count=1){
        $res=$this->all("select * from con_cate where parent_id=$pid");
        foreach ($res as $k=>$v){
            $arr=$this->all("select * from con_cate where parent_id=$v[id]");
            $v['count']=$count+1;
        }

        $this->infi($concate,$pid=0,$count=0);
    }*/


    function addonecate($p){
        $name=$p['name'];
        $pinyin=$p['pinyin'];
        $type=$p['type'];
        $url=$p['url'];
        $parent_id=$p['parent_id'];
        $this->db->query("insert into con_cate (`name`, `pinyin`, `type`, `url`, `parent_id`) values ('$name','$pinyin','$type','$url','$parent_id')");

    }

    function editarticle($p){
        dump($p);
        $id=$p['id'];
        $title=$p['title'];
        $article=$p['editor1'];
        $color=$p['color'];
        $cate_id=$p['cate_id'];
        $time=$p['time'];
        $description=$p['description'];
        $digest=$p['digest'];
        $picture=$p['picture'];
        $file=array();
        foreach ($p['file'] as $v){
            if ($v!=""){
                $file[]=$v;
            }
        }
        $file=join("+",$file);
        $this->db->query("update con_article set `title`='$title', `article`='$article', `color`='$color', `cate_id`='$cate_id', `time`='$time', `description`='description', `digest`='$digest', `picture`='$picture', `file`='$file' where id='$id'");
    }
}