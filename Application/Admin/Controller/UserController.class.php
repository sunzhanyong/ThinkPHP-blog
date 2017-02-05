<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
    /**
     *  管理员列表
     */
    public function index(){
        $user = D('adminuser');
        $data = $user->select();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 管理员的添加
     */
    public function add(){
        $user = D('adminuser');
        if(IS_POST){

            $users['username'] = I('username');
            $users['email'] = I('email');
            $users['password'] = I('password');

            if($_FILES['pic']['tmp_name'] != ''){
             $upload = new \Think\Upload();// 实例化上传类
             $upload->maxSize = 3145728 ;// 设置附件上传大小
             $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
             $upload->savePath = '/Public/Uploads/'; // 设置附件上传目录
             $upload->rootPath = './'; // 设置附件上传目录
             // 上传单个文件
             $info = $upload->uploadOne($_FILES['pic']);
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError(),'',1);
            }else{
                $users['pic'] = $info['savepath'].$info['savename'];
            }
            }
            if($user->create($users)){
                if($user->add()){
                    $this->success('添加成功，正在跳转到列表页...',U('index'));
                }else{
                    $this->error('添加失败，正在返回...','',1);
                }
            }else{
                $this->error($user->getError(),'',1);
            }
            return;
        }
        $this->display();
    }

    /**
     * 管理员的删除
     */
    public function del(){
        $user = D('adminuser');

        if($user->delete(I('id'))){
            $this->success('删除管理员成功！',U('index'));
        }else{
            $this->error('删除管理员失败！','',1);
        }
    }

    /**
     * 管理员的修改
     */
    public function edit(){
        $user = M('adminuser');


        if(IS_POST){
            $users['username'] = I('username');
            $users['email'] = I('email');
            //执行上传操作
            if($_FILES['pic']['tmp_name'] != ''){
             $upload = new \Think\Upload();// 实例化上传类
             $upload->maxSize = 3145728 ;// 设置附件上传大小
             $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
             $upload->savePath = '/Public/Uploads/'; // 设置附件上传目录
             $upload->rootPath = './'; // 设置附件上传目录
             // 上传单个文件
             $info = $upload->uploadOne($_FILES['pic']);
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError(),'',1);
            }else{
                    $users['pic'] = $info['savepath'].$info['savename'];
                }
            }
            if($user->create($users) ){
                if($user->where(array('id'=>I('id')))->save()){
                    // 修改成功写入session
                    session('username',$users['username']);
                    session('email',$users['email']);
                    //判断是否修改了头像
                    if(!empty($users['pic'])){
                        session('pic',$users['pic']);
                    }

                    $this->success('修改成功，即将跳转到列表页！',U('index'));
                }else{
                    $this->error('修改失败，正在返回...','',1);
                }
            }else{
                $this->error($user->getError(),'',1);
            }
            return;
        }

        $data = $user->find(I('id'));
        $this->assign('data',$data);
        $this->display();
    }

    // 修改管理员密码
    public function savepwd() {
        $admin = D('adminuser');

        if(IS_POST){
            $pwd['password'] = I('password');
            $pwd['repwd'] = I('repwd');
            if($admin->create($pwd,5)){
                $info = $admin->where(array('id'=>I('id')))->save();
                // dump($info);die;
                if($info){
                    session(null);
                    $this->success('修改成功，请重新登陆...',U('Login/index'));
                }else{
                    $this->error('修改失败！正在返回...','',1);
                }

            }else{
                $this->error($admin->getError(),'',1);
            }

            return;
        }


        $this->display();
    }
}
