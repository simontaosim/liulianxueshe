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
      $this->menuSetting(8);
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

    public function testInsert(){
        $arr = array();
        $arr["name"] = "shabi";
        $arr["truename"] = "shabi";
        $arr["passwd"] = "6ded0ef6efbd52af58b52049be8dc8a5";
        $arr["img"] = "shabi";
        $arr["profile"] = "shabi";
        $arr["major"] = "shabi";
        $arr["school"] = "shabi";
        $arr["mobile"] = "shabi";
        $arr["qq"] = "shabi";
        $arr["wechat"] = "shabi";
        $arr["sex"] = 1;
        $arr["achieving"] = "shabi";
        $arr["achieved"] = "shabi";
        $arr["birth"] = "1452696836000";
        $arr["role"] = 1;
        $arr["valid"] = 1;
        $arr["more"] = "sdfsd";
        $arr["updatetime"] = 1;
        $arr["createtime"] = 1;
        $arr["location"] = "shanghai";
        $arr["thumbnail"] = "sdfsd";

        $ability = array();

        $ability["charts"] = 5;
        $ability["model_3d"] = 5;
        $ability["model_express"] = 2;
        $ability["effect"] = 2;
        $ability["design_theory"] = 2;
        $ability["parametrize"] = 2;

        $user = new \Api\Model\AbilityModel();
        // $res = $user->addUser($arr, $ability);
        $res = $user->getAbility(6);
        var_dump($res);


    }

}
