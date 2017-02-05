<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){

         $this->display();
    }

    public function logout() {
        session(null);
        $this->success('退出成功，跳转中...',U('Login/index'));
    }

    public function config() {
        $config = D('config');
        $id = $config->max('id');
        $condata = $config->where(array('id'=>$id))->find();
        if(IS_POST){

                if($config->where(array('id'=>$id))->save(I())){
                    $this->error('^_^成功了！');
                }else{
                    $this->error('~_~失败了！');
                }

            return;
        }
        $this->assign('con',$condata);
        $this->display();
    }
}