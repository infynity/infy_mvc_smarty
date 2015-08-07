<?php
class AdminModel extends CommonModel
{

    function getinfo(){
        $res=$this->one("select * from web_info where id='1'");
//        dump($res);
        return $res;
    }


    function update($p){
        $name=$p['name'];
        $lastname=$p['lastname'];
        $webname=$p['webname'];
        $icp=$p['icp'];
        $copyright=$p['copyright'];
        $email =$p['email'];
        $qq=$p['qq'];
        $tele=$p['tele'];
        $tex=$p['tex'];
        $weibo=$p['weibo'];
        $this->db->query("update web_info set name='$name',lastname='$lastname',webname='$webname',icp='$icp',copyright='$copyright',email='$email',qq='$qq',tele='$tele',tex='$tex',weibo='$weibo' where id='1'");
    }

    function getflink(){
        $res=$this->all("select * from flink order by weight asc");
//     dump($res);
        return $res;
    }
}