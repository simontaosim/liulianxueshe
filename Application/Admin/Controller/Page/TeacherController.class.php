<?php
namespace Admin\Controller\Page;
use Think\Controller;
class TeacherController extends Controller {
    public function index(){


        $this->pageSetting(1, 20);

        $this->menuSetting(8);

        $search_result_title = "教师列表";
        $this->assign('search_result_title',$search_result_title);



        $this->display('index');
    }

    public function newTeacher(){
        $this->menuSetting(7);
        $this->display('new_teacher');
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
