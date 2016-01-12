<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	layout(false);
    
		
    	if (session('?admin_token')) {
    			$menu_number = '5';
    	$this->assign('menu_number',$menu_number);
		//表示该页面对应的菜单显示样式
		layout(true);
			$this->display('index');
		} else {
			
			$this->display('Page/login/login');
		}
		
	    
    }
}
