<?php
namespace app\admin\controller;
use app\common\Authcommon;



/**
 * Description of AuthAdmin
 *
 * @author GL-LiJie
 */
class Admin extends Authcommon
{
       public function index()
    {
           return "用户表";
           
    }
}
