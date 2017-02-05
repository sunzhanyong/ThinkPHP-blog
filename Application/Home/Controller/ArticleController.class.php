<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {

    //文章阅读
    public function index() {
        $article = D('ArticleView')->where(array('id'=>I('id')))->find();
        $this->assign('data',$article);
        $this->display();
    }

}