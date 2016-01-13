<?php
namespace Admin\Controller\Page;
use Think\Controller;
class WorkController extends Controller {
    public function index(){
    	if (session('?admin_token')) {
    		$massage = I('param.massage', '');
			$this->pageSetting(1, 20);

	    	$this->menuSetting(7);

			$search_result_title = "最近作品列表";
			$this->assign('search_result_title',$search_result_title);

	      	$this->assign('massage', $massage);

	   		$this->display('index');
    	} else {
    		layout(false);
			$this->display('Page/login/login');
    	}

    	
   	}

	public function newWork(){
		if (session('?admin_token')) {
			$this->menuSetting(7);
			$this->display('new_work');
		}
	}

    public function editWork(){
    	if (session('?admin_token')) {
    	  $wid = I('param.wid', '');
	      $work = new \Admin\Model\WorkModel();
	      $data = $work->getDetail($wid);
	      $this->assign('data', $data);
	      $this->menuSetting(7);
	      $this->display('edit_work');
    	} else {
    		layout(false);
			$this->display('Page/login/login');
    	}
     
    }

		public function create(){

		}

		private function pageSetting($param_page, $param_count){

			$page = $param_page;
			$page_count = $param_count;
			$this->assign("page", $page);
			//默认视图视为一次搜索

		}

		private function menuSetting($number){
			$menu_number = $number;
    	$this->assign('menu_number',$menu_number);
			//表示该页面对应的菜单显示样式
		}

}
