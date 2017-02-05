<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{

    public function index() {
        $user = D('adminuser');

        if(IS_POST){
            if($user->create($_POST,4)){
                if($user->login()){
                    $this->success('登陆成功！跳转中...',U('Index/index'));
                }else{
                    $this->error('用户名或者密码错误！','',1);
                }
            }else{
                $this->error($user->getError(),'',1);
            }

            return;
        }
        $this->display('login');
    }

    //验证码
    public function verify() {
        // 实例化验证码类
        $Verify = new \Think\Verify();
        $Verify->fontSize = 20;
        $Verify->length   = 4;
        // $Verify->useNoise = false;
        $Verify->fontttf = '4.ttf';
        // $Verify->imageW = 140;
        $Verify->imageH = 40;
        $Verify->useCurve = false;
        $Verify->entry();
    }


}
