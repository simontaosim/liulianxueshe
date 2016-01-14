<?php
namespace Api\Model;
use Think\Model;
class UserModel extends Model {
    protected $tableName = 'users';

    //用户登录授权认证
    public function auth($username, $password){
		$res = $this->where("name='{$username}' AND passwd='{$password}'")->getField("valid");
		return $res;
    }

    //登录成功后修改上次登录时间为当前时间
    public function ModifyUpdatetime($uid){
    	//修改上次登录时间
		$data["updatetime"] = time();
		$res = $this->where("uid='{$uid}'")->save($data);
		return $res;
    }

    //添加用户
    public function addUser($arr, $ability = ""){
        if ($arr["role"] == 1){ //身份是老师，需要插入能力值
            $user_id = $this->add($arr);//插入到user表中
            if ($user_id){
                $teacher = new \Api\Model\AbilityModel();
                $ability["user_id"] = $user_id;
                $res = $teacher->insertAbility($ability);
                return $res;
            }
            return false;
        } else { //身份是学生
            $res = $this->add($arr);
            return $res;
        } 	
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
	
	//获取教师展示信息列表详情 $num：每页获取的记录条数，$page：第几页
	public function getTeachers($num, $page){
		$res = $this->where("valid='1' AND role='1'")->order("createTime desc")->limit(($page-1)*$num, $num)->getField("uid, truename, img, major, school, createtime");
		return $res;
	}

	//获取某个教师的详细信息
	public function getTeacherDetail($uid){
		$res = $this->where("uid='{$uid}' AND valid='1' AND role='1'")->find();
		return $res;
	}

    //获取老师数量
    public function getTeacherCount(){
        return $this->where("role='1' AND valid='1'")->count();
    }
}
