<?php
namespace app\admin\controller;
use auth\Auth;



/**
 * Description of AuthAdmin
 *
 * @author GL-LiJie
 */
class Admin
{
       public function index()
    {

           $group = new Auth();
           var_dump( $group->getUserInfo(4));
           
    }
}
