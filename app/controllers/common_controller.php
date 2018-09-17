<?php
// smarty 配置
require(VENDOR_PATH . '/smarty/Smarty.class.php');

class CommonController extends Smarty
{

    //当前方法对应的模板
    protected $template;
    protected $action;
    protected $controller;
    protected $model;

    function __construct()
    {

        //这里要parent::__construct(); 因为这里的function __construct 会覆盖掉同名的父类的function __construct
        parent::__construct();

        global $a, $c;
        $this->action = $a;
        $this->controller = $c;

        //smarty配置
        $this->set_smarty();

        //实例化模型
        $this->model = D();
        $this->check_login();


    }


    function check_login()
    {
        /***
         * 如果session已经存在，直接发送给模板，返回
         */
        if (isset($_SESSION["admin"])) {
            $this->assign("admin", $_SESSION["admin"]);
            return;
        }
        //排除用户注册、登录页面
        if ($this->controller == 'index') {
            return;
        }
        $allow = C("allow");
        if ($this->controller == $allow["c"] and in_array($this->action, $allow["a"])) {
            return;
        }
        //如果没有token，跳到登录页面
        if (!isset($_COOKIE["token"])) {
            $this->jump("index.php?c=user&a=login", "您还没有登录");
            exit;
        }
        //检查token是否正确
        $token = $_COOKIE["token"];
        $user = M();
        $admin = $user->one("select * from user where token = '$token'");
        //如果token错误，说明用户伪造请求
        if (!$admin) {
            $this->jump("index.php?c=user&a=login", "不要非法登录");
            exit;
        }
        //将用户信息存入session
        $_SESSION["admin"] = $admin;
        $this->assign("admin", $admin);
    }

    /***
     * smarty配置
     */
    private function set_smarty()
    {
        //模板的路径
        $this->setTemplateDir(APP_PATH . '/views/' . $this->controller);

        //编译模板位置
        $this->setCompileDir(APP_PATH . '/views/smarty/templates_c/');

        //配置文件路径
        $this->setConfigDir(APP_PATH . '/views/smarty/configs/');
        $this->caching = true;
        //缓存路径
        $this->setCacheDir(APP_PATH . '/views/smarty/cache/');
//        $this->debugging=true;
        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";
        //index.html
        $this->template = $this->action . ".html";
        $this->assign("assets", "/app/assets");
    }



    // $s->display();
    /***
     * 重载smarty的display方法
     * @param null $template
     * @param null $cache_id
     * @param null $compile_id
     * @param null $parent
     */
    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        $template = $template == "" ? $this->template : $template;
        parent::display($template, $cache_id = null, $compile_id = null, $parent = null);
    }





    /***
     * 清除session方法
     */
    protected function clearSession()
    {
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time() - 3600, "/");
        }
        setcookie("token", "", time() - 3600);
    }





    //跳转成功信息
    protected function jump($url, $info = "")
    {
        if ($info == "") {
            echo "<script>location.href='" . $url . "'</script>";
        } else {
            echo "<script>alert('" . $info . "');location.href='" . $url . "'</script>";
        }
    }


}
