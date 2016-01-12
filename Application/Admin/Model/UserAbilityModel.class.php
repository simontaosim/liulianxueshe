<?php
namespace Api\Model;
use Think\Model;
class UserAbilityModel extends Model{
    protected $tableName = 'user_abilities';

    public function getAbilities($user_id){
        $res = $this->where('user_id= $user_id')->getField("ability_id", "value");
        return $res;
    }

}