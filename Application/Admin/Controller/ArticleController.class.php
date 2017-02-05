<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    //文章列表显示
    public function index(){
        $ar = D('ArticleView');

        $keywords = '%'.$_GET['title'].'%'; //接收查询关键字
        $where['title'] = array('like',$keywords); //封装查询条件

        $count = $ar->where($where)->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数

        $show = $Page->show();// 分页显示输出
        $list = $ar->where($where)->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }

    //添加文章
    public function add(){
        $article = D('article');

        if(IS_POST){
            // if($_FILES['pic']['tmp_name'] != ''){
            //      $upload = new \Think\Upload();// 实例化上传类
            //      $upload->maxSize = 3145728 ;// 设置附件上传大小
            //      $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            //      $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
            //      $upload->rootPath = './'; // 设置附件上传目录
            //      // 上传单个文件
            //      $info = $upload->uploadOne($_FILES['pic']);
            //     if(!$info) {
            //         // 上传错误提示错误信息
            //         $this->error($upload->getError(),'',1);
            //     }else{
            //         $articles['pic'] = $info['savepath'].$info['savename'];
            //     }
            // }
                $articles['title'] = I('title');
                $articles['intro'] = I('intro');
                $articles['content'] = I('content');
                $articles['uid'] = I('uid');
                $articles['cid'] = I('cid');

                if($article->create($articles)){
                    $ob = $article->add();
                    if($ob){
                        $this->success('文章添加成功，跳转中...',U('index'));
                    }else{
                        $this->error('文章添加失败，正在返回...','',1);
                    }
                }else{
                    $this->error($article->getError(),'',1);
                }

                return;
        }

        $cate = D('cate');
        $data = $cate->select();
        $this->assign('data',$data);
        $this->display();
    }

    //删除文章
    public function del() {
        $ar = D('Article');
        if($ar->where(array('id'=>I('id')))->delete()){
            $this->success('^_^删除成功',U('index'));
        }else{
            $this->error('~_~删除失败','',1);
        }
    }

    //修改文章
    public function edit() {
        $article = D('article');
        $adata = $article->where(array('id'=>I('id')))->find();

        if(IS_POST){
            // if($_FILES['pic']['tmp_name'] != ''){
            //      $upload = new \Think\Upload();// 实例化上传类
            //      $upload->maxSize = 3145728 ;// 设置附件上传大小
            //      $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            //      $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
            //      $upload->rootPath = './'; // 设置附件上传目录
            //      // 上传单个文件
            //      $info = $upload->uploadOne($_FILES['pic']);
            //     if(!$info) {
            //         // 上传错误提示错误信息
            //         $this->error($upload->getError(),'',1);
            //     }else{
            //         $articles['pic'] = $info['savepath'].$info['savename'];
            //     }
            // }
                $articles['title'] = I('title');
                $articles['intro'] = I('intro');
                $articles['content'] = I('content');
                $articles['uid'] = I('uid');
                $articles['cid'] = I('cid');



            if($article->create($articles)){
                $info = $article->where(array('id'=>I('id')))->save();
                if($info){
                    $this->success('修改文章成功，跳转中...',U('index'));
                }else{
                    $this->error('修改文章失败，正在返回...','',1);
                }
            }else{
                $this->error($article->getError(),'',1);
            }

            return;
        }

        $this->assign('data',$adata);
        $cate = D('cate');
        $cdata = $cate->select();
        $this->assign('cdata',$cdata);
        $this->display();
    }

}