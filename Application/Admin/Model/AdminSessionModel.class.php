<?php
namespace Api\Model;
use Think\Model;
class AdminSessionModel extends Model {

    protected $tableName = 'admin_sessions';

    public function auth($username, $password){
          $Admin = new \Admin\Model\AdminModel();
          $admin = $Admin->auth($username, $password);
          reutrn generateToken($username, $password);
    }

    public function create($admin_id){

    }
    public function getOne($token){

    }
    public function getToken($admin_id){

    }
    public function generateToken($username, $password){
      return md5($username.'|^'.$password);
    }
}
