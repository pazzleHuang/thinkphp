<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller {
    public function demo(){
    $Dao = M("img");
    $list = $Dao->select();
    $this->assign("list", $list);
    $this->display();
    }
}
