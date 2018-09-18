<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Index extends Controller
{
    public function initialize() {
        parent::initialize();

    }  
    
    //默认主页
    public function index()
    {
        return $this->fetch();
    }
}
