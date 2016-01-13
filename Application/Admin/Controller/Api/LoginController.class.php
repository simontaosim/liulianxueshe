<?php
namespace Admin\Controller\Api;
use Think\Controller;
class LoginController extends Controller {
  public $backData = '404';

  public function auth(){
  			
  	 // $password_store = md5("liulianxueshe2016");
    // $admin = ["username" => "webmaster", "password" => $password_store];
			//以上是伪数据部分
    $username = I('param.username', '');
    $password = I('param.password', '');
    $loginModel  = new \Api\Model\AdminModel();
    $ret = $loginModel->auth($username, $password);
    if ($ret) {
      $token = md5($admin["username"].'|^'.$admin["password"]);
      session('admin_token', $token);
      $this->backData = 4200;
    } else {
      $this->backData= 4100;
    }
			
    // $login_admin = ["username"=> $username, "password"=> $password];

    // if ($login_admin == $admin) {
    // 	$token = md5($admin["username"].'|^'.$admin["password"]);
    // 	session('admin_token', $token);
    //   	$this->backData = 4200;
    // }
    // else{
    //   $this->backData= 4100;
    // }
    $this->ajaxReturn($this->backData,"json");
  }
  
  public function jsonphp(){
  		
  	
  	}


}
