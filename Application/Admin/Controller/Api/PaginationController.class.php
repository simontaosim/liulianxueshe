<?php
namespace Admin\Controller\Api;
use Think\Controller;
class PaginationController extends Controller {

  public function index(){
    $page = I('param.page', 1);
    $modelName = I('param.model_name', 1);
		$work = D(modelName);
    $data = $work->getLists(20,$page);
		$this->ajaxReturn($data, "json");
  }

  //输出js代码刷新分页
  public function generatePagination(){
    $page = I('param.page', 1);
    if((int)$page <= 1){
      $page_1 = 1;
    }
    else{
      $page_1 = $page-1;
    }
    $page1 = $page + 1;
    $page2 = $page1 + 1;
    $page3 = $page2 + 1;
    $page4 = $page3 + 1;
    $html_str = <<<STR
<a class="item" ng-click="toPage(1)">第一页</a>
<a class="icon item" ng-click="toPage({$page_1})">
<i class="left chevron icon"></i>
</a>
<a class="item" ng-click="toPage({$page1})">{$page1}</a>
<a class="item" ng-click="toPage({$page2})">{$page2}</a>
<a class="item" ng-click="toPage({$page3})">{$page3}</a>
<a class="item" ng-click="toPage({$page4})">{$page4}</a>
<a class="icon item" ng-click="toPage({$page1})">
<i class="right chevron icon"></i>
</a>
STR;
    $util = new \Admin\Model\UtilModel();
    $html_str = $util->trimall($html_str);
    echo $html_str;

  }
}
