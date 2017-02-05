<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
    //显示栏目列表
    public function index(){
        $cate = D('cate');
        $count = $cate->count();
        $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $list = $cate->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }

    //添加栏目
    public function add() {
        $cate = D('cate');

        if(IS_POST){
            if($cate->create(I())){
                if($cate->add()){
                    $this->success('添加栏目成功，跳转中...',U('index'));
                }else{
                    $this->error('添加栏目失败，正在返回...','',1);
                }
            }else{
                $this->error($cate->getError(),'',1);
            }

            return;
        }
        $this->display();
    }

    //删除栏目
    public function del() {
        $cate = D('cate');
        if($cate->delete(I('id'))){
            $this->success('删除栏目成功，正在返回...');
        }else{
            $this->error('删除栏目失败，正在返回...','',1);
        }
    }

    //修改栏目
    public function edit() {
        $cate = D('cate');
        $data = $cate->where(array('id'=>I('id')))->find();

        if(IS_POST){
            if($cate->create(I())){
                $info = $cate->where(array('id'=>I('id')))->save();
                if($info){
                    $this->success('修改栏目成功，跳转中...',U('index'));
                }else{
                    $this->error('修改栏目失败，跳转中...','',1);
                }
            }else{
                $this->error($cate->getError(),'',1);
            }


            return;
        }

        $this->assign('data',$data);
        $this->display();
    }
}