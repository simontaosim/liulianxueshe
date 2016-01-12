<?php
namespace Api\Model;
use Think\Model;
class AdminModel extends Model {
    protected $tableName = 'admins';

    //管理员登录授权认证
    public function auth($username, $password){
		$res = $this->where("name='{$username}' AND passwd='{$password}'")->getField("valid");
		return $res;
    }

    //登录成功后修改上次登录时间为当前时间
    public function updateLastLogin($username){
    	//修改上次登录时间
		$data["lastLogin"] = time();
		$res = $this->where("name='{$username}'")->save($data);
		return $res;
    }

    //添加管理员
    public function addAdmin($arr){
    	$arr["createTime"] = $arr["lastLogin"] = time();
    	$res = $this->add($arr);
    	return $res;
    }

    //删除管理员
    public function deleteAdmin($aid){
    	$data["valid"] = 0;
    	$res = $this->where("aid='{$aid}'")->save($data);
    	return $res;
    }

    //修改管理员密码
    public function changePwd($aid, $old, $new){
    	$data["passwd"] = $new;
    	$res = $this->where("aid='{$aid}' AND passwd='{$old}'")->save($data);
    	return $res;
    }
	
}
