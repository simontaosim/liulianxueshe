<?php
namespace Admin\Model;
class TeacherModel extends UserModel {

  private $ability;

  //获取教师展示信息列表详情 $num：每页获取的记录条数，$page：第几页
  public function getList($num, $page){
    $res = $this->where("valid='1' AND role='1'")->order("updatetime desc")->limit(($page-1)*$num, $num)->getField("uid, truename, sex, img, major, school, createtime, birth, constellation, profile, location, achieved, achieving, thumbnail");
    return $res;
  }

  //获取某个教师的详细信息
  public function getOne($uid){
    $res = $this->where("uid='{$uid}' AND valid='1' AND role='1'")->find();
    return $res;
  }

  public function update($arr){
    $uid = $arr["uid"];
    $res = $this->where("uid='$uid'")->save($arr);
    return $res;

  }

  public function delete($uid){
    $data["valid"] = 0;
    $res = $this->where("uid='{$uid}'")->save($data);
    return $res;
  }

  public function create($arr){
    $res = $this->add($arr);
    return $res;
  }

  public function getCount(){
    return $this->where("valid=1 AND role=1")->count();
  }

  //获取大图原图
    public function getCover($uid){
      return $res = $this->where("uid='$uid'")->field("img")->find();
    }

}
