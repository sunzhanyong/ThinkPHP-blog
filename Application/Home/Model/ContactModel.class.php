<?php
namespace Home\Model;
use Think\Model;

class ContactModel extends Model{
    protected $_validate = array(
        array('name','require','请填写用户名！',1,'regex',3),
        array('email','require','请填写邮箱！',1,'regex',3),
        array('content','require','请填写留言内容！',1,'regex',3)
        );
}