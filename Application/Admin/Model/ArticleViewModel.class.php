<?php
namespace Admin\Model;
use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel{

    public $viewFields = array(
        'article' => array('id','title','intro','content','pic','ctime','_type'=>'LEFT'),
        'adminuser' => array('username','_on'=>'article.uid=adminuser.id'),
        'cate' => array('name','_on'=>'article.cid=cate.id'),
    );

}