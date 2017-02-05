<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController {
    //友情链接列表显示
    public function index(){
        $link = D('link');

        $keywords = '%'.$_GET['name'].'%'; //接收查询关键字
        $where['name'] = array('like',$keywords); //封装查询条件

        $count = $link->where($where)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数

        $show = $Page->show();// 分页显示输出
        $list = $link->where($where)->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }

    //添加友情链接
    public function add(){
        $link = D('link');

        if(IS_POST){
            $links['name'] = I('name');
            $links['url'] = I('url');
                $ob = $link->add($links);
                if($ob){
                    $this->success('友情链接添加成功，跳转中...',U('index'));
                }else{
                    $this->error('友情链接添加失败，正在返回...','',1);
                }
            return;
        }
        $this->display();
    }

    //删除友情链接
    public function del() {
        $link = D('link');
        if($link->where(array('id'=>I('id')))->delete()){
            $this->success('^_^删除成功',U('index'));
        }else{
            $this->error('~_~删除失败','',1);
        }
    }

    //修改友情链接
    public function edit() {
        $link = D('link');
        $data = $link->where(array('id'=>I('id')))->find();

        if(IS_POST){

            $info = $link->where(array('id'=>I('id')))->save(I());
            if($info){
                $this->success('修改友情链接成功，跳转中...',U('index'));
            }else{
                $this->error('修改友情链接失败，正在返回...','',1);
            }
            return;
        }

        $this->assign('data',$data);
        $this->display();
    }

}