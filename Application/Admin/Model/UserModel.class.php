<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    protected $tableName = 'users';

    //用户登录授权认证
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

    //添加用户
    public function addUser($arr){
    	$arr["createTime"] = $arr["lastLogin"] = time();
    	$res = $this->add($arr);
    	return $res;
    }

    //删除用户
    public function deleteUser($uid){
    	$data["valid"] = 0;
    	$res = $this->where("uid='{$uid}'")->save($data);
    	return $res;
    }

    //修改用户密码
    public function changePwd($uid, $old, $new){
    	$data["passwd"] = $new;
    	$res = $this->where("uid='{$uid}' AND passwd='{$old}'")->save($data);
    	return $res;
    }

    //修改用户信息
    public function updateUser($arr){
    	$uid = $arr["uid"];
    	$res = $this->where("uid='{$uid}'")->save($arr);
    	return $res;
    }


}
