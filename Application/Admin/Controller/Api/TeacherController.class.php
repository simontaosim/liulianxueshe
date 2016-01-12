<?php
namespace Admin\Controller\Api;
use Think\Controller;
class TeacherController extends Controller {
  public $backData = '404';

  public function teachers(){
    $page = I('param.page', 1);
    $teachers = new \Admin\Model\TeacherModel();
    $data = $teachers->getList(20,$page);
    $back_data = [];
    foreach($data as $item){
      $ability_id1 = D('UserAbilities')->where('user_id='.$item['uid'].' and ability_id=1')->getField("value");
      $ability_id2 = D('UserAbilities')->where('user_id='.$item['uid'].' and ability_id=4')->getField("value");
      $ability_id3 = D('UserAbilities')->where('user_id='.$item['uid'].' and ability_id=5')->getField("value");
      $ability_id4 = D('UserAbilities')->where('user_id='.$item['uid'].' and ability_id=6')->getField("value");
      $ability_id5 = D('UserAbilities')->where('user_id='.$item['uid'].' and ability_id=9')->getField("value");
      $ability_id6 = D('UserAbilities')->where('user_id='.$item['uid'].' and ability_id=12')->getField("value");
      //ability: 1:分析图,4:3d建模,5:模型表达,6:效果图,9:设计理论, 12:参数化
      $item['charts'] = $ability_id1;
      $item['model_3d'] = $ability_id2;
      $item['model_express'] = $ability_id3;
      $item['effect'] = $ability_id4;
      $item['design_theory'] = $ability_id5;

      $item['parametrize'] = $ability_id6;
      $back_data[] = $item;
    }

    $this->ajaxReturn($back_data, "json");
  }
  public function index(){
    $teacher = D('Teacher');
    $this->ajaxReturn($teacher->getTeachers(2,1),"json");
  }


}
