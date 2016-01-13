<?php
namespace Api\Model;
use Think\Model;
class AbilityModel extends Model {
    protected $tableName = 'user_abilities';

    //插入能力值
    public function insertAbility($arr){
        $res = $this->add($arr);
        return $res;
    }

    //查询能力值
    public function getAbility($user_id){
        $res = $this->where("user_id='{$user_id}'")->find();
        return $res;
    }

    //修改能力值
    public function modifyAbility($arr){
        $uid = $arr["uid"];
        $res = $this->where("user_id='{$uid}'")->save($arr);
        return $res;
    }
}
