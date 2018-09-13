<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use think\facade\Session;
use auth\Auth;
/**
 * Description of Base
 *
 * @author GL-LiJie
 */
class Base extends Auth{
    
    public function getMenu(){
        $uid = Session::get("admin");
        return $this->getGroups(1);
    }
}
