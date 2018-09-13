<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\facade\Session;

class Login extends Controller {

    public function initialize() {
        parent::initialize();
    }

    //默认登录页面
    public function index() {
        //已登陆，跳转到后台首页
        if(Session::get('admin_id')){        
            $this->redirect('/admin/index');
        } else {
            $this->display();
        }
        return $this->fetch();
    }

    //登录控制器
    public function login() {

        if ($this->request->isPost()) {
            $data = $this->request->post();
            $dbadmin = db('admin')->where('username', $data["username"])->find();
                       
            if (!$dbadmin) {
                return 500;
            }
            if ($dbadmin["password"] !== md5($data["password"])) {
                return 400;
            } else {
                Session::set('admin_id', $dbadmin['id']);
                return 200;
            }
        }
    }

    //退出登陆
    public function logout() {

        session(null);
        return $this->success('退出成功！', '/admin/login');
//        
    }

}
