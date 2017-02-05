<?php
namespace Admin\Model;
use Think\Model;

class CateModel extends Model{
    protected $_validate = array(
        array('name','require','栏目名必填！',1,'regex',3),
        array('name','','栏目已存在！',1,'unique',3),
        );
}