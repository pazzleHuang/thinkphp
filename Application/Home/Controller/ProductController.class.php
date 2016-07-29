<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {

    public function water(){
        $Dao = M("img");
        $list = $Dao->select();
        $this->assign("list", $list);
        $this->display();
    }
}