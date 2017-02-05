<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function __construct() {
        parent::__construct();

        $this->config();

        $config = D('config')->field('switch')->find();

        if($config['switch'] != '1'){
           $this->error('网站已关闭',U('Lose/lose'));
        }
    }

    public function config() {
        $config = D('config')->select();
        $this->assign('config',$config);
    }

}



