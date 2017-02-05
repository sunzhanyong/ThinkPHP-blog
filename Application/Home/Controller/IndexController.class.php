<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends CommonController {



    //主页

    public function index() {

        $artres = D('ArticleView')->order('ctime desc')->limit(5)->select();

        $cate = M('cate')->select();

        $link = M('link')->select();

        $articles = M('article')->order('ctime desc')->limit(5)->select();

        $this->assign('cate',$cate);

        $this->assign('artres',$artres);

        $this->assign('link',$link);

        $this->display();

    }



    //所有文章

    public function article() {

        $ar = D('ArticleView');



        $keywords = '%'.$_GET['title'].'%'; //接收查询关键字

        $where['title'] = array('like',$keywords); //封装查询条件



        $count = $ar->where($where)->count(); // 查询满足要求的总记录数

        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数



        $show = $Page->show();// 分页显示输出

        $list = $ar->where($where)->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集

        $this->assign('page',$show);// 赋值分页输出



        $this->display();

    }



    //关于此站

    public function about() {

        $about = D('config')->field('about')->find();

        $this->assign('about',$about);



        $this->display();

    }



    //留言给我

     public function contact() {

        $contact = D('contact');

        if (IS_POST) {
            if ($contact->create(I())) {
                if ($contact->add()) {
                    $this->success("留言成功");
                }else{
                    $this->error("留言失败，请重试……",'',1);
                }
            }else{
                $this->error($contact->getError(),'',1);
            }
            return;
        }

        $this->display();

    }



}