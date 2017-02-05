<?php
namespace Home\Controller;
use Think\Controller;
class LoseController extends Controller {
    //网站关闭
    public function lose() {
		$this->display('503');
    }

}