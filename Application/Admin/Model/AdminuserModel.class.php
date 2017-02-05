<?php
namespace Admin\Model;
use Think\Model;

class AdminuserModel extends Model{
    protected $_validate = array(
        array('username','require','用户名必填！',0,'regex',3),
        array('username','','用户名已存在！',0,'unique',3),
        array('password','require','密码必填！',0,'regex',3),
        array('email','require','邮箱必填！',0,'regex',3),
        array('email','','邮箱已存在！',0,'unique',3),
        array('email','email','邮箱格式不正确！',0,'regex',3),
        array('username','require','用户名必填！',1,'regex',4),
        array('password','require','密码必填！',1,'regex',4),
        array('verify','check_verify','验证码错误！',1,'callback',4),
        array('password','require','密码1111必填！',1,'regex',5),
        array('repwd','password','确认密码不一致！',0,'confirm'), // 验证确认密码是否和密码一致

        );

    //管理员登陆
    public function login(){
        $password = $this->password;
        $username['username'] = $this->username;
        $username['email'] = $this->username;
        $username['_logic'] = 'OR'; //更改默认的逻辑判断，通过使用 _logic 定义查询逻辑
        $info = $this->where($username)->find();
        if($info){
            if($info['password'] == $password ){
                session('id',$info['id']);
                session('username',$info['username']);
                session('email',$info['email']);
                session('pic',$info['pic']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}