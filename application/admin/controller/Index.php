<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Index extends Controller
{
    public function initialize() {
        parent::initialize();
        if(!Session::has('admin_id')){
            $this->error("您還沒有登陸，請先登陸！",'/admin/login');            
        }                
    }  
    
    //默认主页
    public function index()
    {
        return $this->fetch();
    }
}
