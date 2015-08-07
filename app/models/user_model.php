<?php

class UserModel extends CommonModel
{
    function create($post)
    {
        $username = trim($post['username']);
        $password = md5(trim($post['password']));
        $token = md5($username . $password . time() . rand(0, 9999));
        $this->db->query("insert into user (`name`, `password`,`token`) values ('$username', '$password','$token')");

    }

    function check($post)
    {
        $username = trim($post['username']);
        $password = md5(trim($post['password']));

        $admin = $this->one("select * from user where name='$username' and password='$password'");
//           $_SESSION["isAdmin"] = 1;           //用来判断是否登录
//           $_SESSION["admin"] = $admin;        //储存用户信息，方便使用
        if ($admin) {
            if (isset($post['rem'])) {
                setcookie('token', $admin['token'], time() + 3600 * 24 * 7);
            } else {
                setcookie('token', $admin['token']);
            }
            return true;
        } else {
            return false;
        }


    }

    function changepwd($p)
    {
        $pwd1 = md5($p['pwd1']);
        $pwd2 = md5($p['pwd2']);
        $pwd3 = md5($p['pwd3']);
        $username = $_SESSION['admin']['username'];
        $admin = $this->one("select * from user where username='$username' and password='$pwd1'");
        // echo $username;

            if ( $admin && $pwd2 == $pwd3) {
                $this->db->query("update user set password='$pwd2' where username='$username'");
                return true;
            } else {
                return false;
            }

    }
}