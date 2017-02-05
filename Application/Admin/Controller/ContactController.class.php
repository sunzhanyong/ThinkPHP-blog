<?php
namespace Admin\Controller;
use Think\Controller;
class ContactController extends CommonController {
    // 留言列表
    public function index(){
        $contact = D('contact');

        $keywords = '%'.$_GET['name'].'%'; //接收查询关键字
        $where['name'] = array('like',$keywords); //封装查询条件

        $count = $contact->where($where)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

        $show = $Page->show();// 分页显示输出
        $list = $contact->where($where)->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }

    //删除留言
    public function del() {
        $contact = D('contact');
        if($contact->where(array('id'=>I('id')))->delete()){
            $this->success('^_^删除成功',U('index'));
        }else{
            $this->error('~_~删除失败','',1);
        }
    }


}