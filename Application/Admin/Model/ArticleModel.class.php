<?php
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{
    protected $_validate = array(
        array('title','require','文章标题必填！',1,'regex',3),
        array('cid','require','请选择一个所属栏目！',1,'regex',3),
        array('content','require','文章所属栏目必填！',1,'regex',3),
        );

}