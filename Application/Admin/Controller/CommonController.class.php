<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller {

    public function __construct() {

        parent::__construct();

        //执行公用模板用户留言
        $this->contacts();

        //判断用户是否登陆

        if(!session('id')){

            $this->error('请登录系统！',U('Login/index'),1);

    }

  }



//公用模板用户留言

  public function contacts() {

    $con = D('contact');

    $num = $con->count();



    $contact = $con->order('ctime desc')->limit(3)->select();

    $this->assign('num',$num);

    $this->assign('contact',$contact);

  }

}