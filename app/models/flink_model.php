<?php

/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/7/16
 * Time: 15:32
 */
class FlinkModel extends CommonModel
{
    function add($p)
    {
        $name = $p['name'];
        $site = $p['site'];
        $this->db->query("insert into flink (name,site) values('$name','$site')");
    }

    function delete($p)
    {

        if (is_array($p)) {
            $p = $p['item'];
            foreach ($p as $v) {
                $this->db->query("delete from flink where id='$v'");
            }
        } else {
            $this->db->query("delete from flink where id='$p'");
        }
    }

    function edit($p)
    {
        $id = $p['d-id'];
        $name = $p['name'];
        $site = $p['site'];
        $this->db->query("update flink set name = '$name',site = '$site' where id='$id'");
    }

    function sort($p)
    {
        $arr = $p['weight'];
        $i = 0;
        /******
         *
         * 为何不能 直接写成$p[weight][$i]  在底下·111111111111111111111111111111111111111111111111111111111111111111111111
            因为$p['weight']
         *
         */
        foreach ($p['id'] as $k=>$v) {
            $weight=$p['weight']["$k"];
            if(is_numeric($weight)){
                $this->db->query("update flink set weight='$weight' where id='$v'");

            }
//            $this->db->query("update flink set weight=".$p['weight'][$i]." where id='$v'");
            // $this->db->query("update flink set weight='$arr["$i"]' where id='$v'");
//
//            echo 1;
$i++;
          }

    }
}