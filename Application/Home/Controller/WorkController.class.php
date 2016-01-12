<?php
namespace Home\Controller;
use Think\Controller;
use Think\Think;
use \Admin\Model\WorkModel;

class WorkController extends Controller {
    public function index(){
	    $this->display();
    }
    public function works(){
      $page = I('param.page', 1);
      $work = new \Admin\Model\WorkModel();
      $data = $work->getList(20,$page);
	    $this->ajaxReturn($data, "json");
    }
    public function showworks(){
      layout(false);
      $this->display();
    }
}
