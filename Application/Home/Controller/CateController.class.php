<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {

    //栏目下的文章
    public function index() {
        $ar = D('ArticleView');
        $id = I('id');
        $count = $ar->where(array('cid'=>$id))->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

        $show = $Page->show();// 分页显示输出
        $list = $ar->where(array('cid'=>$id))->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
}