<?php
namespace Admin\Model;
class TeacherModel extends UserModel {

  //获取教师展示信息列表详情 $num：每页获取的记录条数，$page：第几页
  public function getList($num, $page){
    $res = $this->where("valid='1' AND role='1'")->order("createtime desc")->limit(($page-1)*$num, $num)->getField("uid, truename, img, major, school, createtime, birth, profile, location");
    return $res;
  }

  //获取某个教师的详细信息
  public function getOne($uid){
    $res = $this->where("uid='{$uid}' AND valid='1' AND role='1'")->find();
    return $res;
  }

}
