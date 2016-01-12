<?php
namespace Admin\Controller\Page;
use Think\Controller;
class LoginController extends Controller {
	public function logout(){
		session('admin_token', null);
		layout(false);
		$this->display('login');
	}
	public function login(){
		layout(false);
		$this->display("login");
	}
	
}
