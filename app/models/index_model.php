<?php
class IndexModel extends CommonModel
{
    /***
     * 获取所有的文章
     * @return array
     */
    function all_articles(){
        $articles = $this->all("select * from article order by id desc");
        return $articles;
    }

    function one_article($id){
        $article = $this->one("select * from article where id=$id");
        return $article;
    }

    function add($post){
        $title=$post['title'];
        $article=$post['content'];
        $date=time();
       // $cate_id=$_POST['cate_id'];
        $this->db->query("insert into article (`cate_id`,`title`,`article`,`date`) values ('1','$title','$article','$date')");

    }


    function getimgs(){
        $articles = $this->all("select * from images  where `display`='1' order by id desc");
        return $articles;

    }

    function getmess($id){


        $articles = $this->article->where("id>'$id'")->select();
    }

    function store($post){
        $nickname=$post['nickname'];
        $content=$post['content'];
        $date=time();
        $this->db->query("insert into messages (`nickname`,`content`,`date`) values ('$nickname','$content','$date')");

    }

    function readmess($id){
        $articles = $this->all("select * from messages  where `id`>'$id'");
        return $articles;
    }
}