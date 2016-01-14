<?php
namespace Admin\Controller\Api;
use Think\Controller;
class TeacherController extends Controller {

  private $teacherModel;

  public function __construct(){
    $this->teacherModel = new \Admin\Model\TeacherModel();
  }

  //输出
  public function teachers(){
    $page = I('param.page', 1);
    $data = $this->teacherModel->getList(20, $page);
    $back_data = [];
    foreach($data as $item){
      $ablity = new \Api\Model\AbilityModel();
      $my_ability = $ablity->getAbility($item["uid"]);
      $item['charts'] = $my_ability['charts'];
      $item['model_3d'] = $my_ability['model_3d'];
      $item['model_express'] = $my_ability['model_express'];
      $item['effect'] = $my_ability['effect'];
      $item['design_theory'] = $my_ability['design_theory'];
      $item['parametrize'] = $my_ability['parametrize'];
      $back_data[] = $item;
    }


    $this->ajaxReturn($back_data, "json");
  }
  public function teachersforindex(){
    $page = I('param.page', 1);
    $data = $this->teacherModel->getList(80, $page);
    $back_data = [];
    foreach($data as $item){
      $ablity = new \Api\Model\AbilityModel();
      $my_ability = $ablity->getAbility($item["uid"]);
      $item['charts'] = $my_ability['charts'];
      $item['model_3d'] = $my_ability['model_3d'];
      $item['model_express'] = $my_ability['model_express'];
      $item['effect'] = $my_ability['effect'];
      $item['design_theory'] = $my_ability['design_theory'];
      $item['parametrize'] = $my_ability['parametrize'];
      $back_data[] = $item;
    }


    $this->ajaxReturn($back_data, "json");
  }

  public function destroy(){
    $teacher_id = I('param.uid', "");
    echo $back_data = $this->teacherModel->delete($teacher_id);
    // $this->ajaxReturn($back_data, "json");

  }
  public function update(){
    $data = [
      uid => I('post.uid', ''),
      truename => I('post.truename', ''),
      title => I('post.title', ''),
      thumbnail => I('post.thumbnail', ''),
      img => I('post.img', ''),
      major => I('post.major',''),
      school => I('post.school',''),
      mobile => I('post.moile',''),
      email => I('post.email',''),
      qq => I('post.qq',''),
      wechat => I('post.wechat',''),
      achieving => I('post.achieving',''),
      achieved => I('post.achieved',''),
      birth => I('post.birth',''),
      location => I('post.location','')
    ];
    $back_data = $this->teacherModel->update($data);
    $this->teacherModel->ModifyUpdatetime($data['uid']);
    $this->ajaxReturn($back_data, "json");

  }
  public function create(){

    $arr = array();
    $arr["name"] = I('post.name', '');
    $arr["truename"] = I('post.truename', '');
    $arr["passwd"] = 'e10adc3949ba59abbe56e057f20f883e';
    $arr["img"] = I('post.img', '');
    $arr["profile"] = I('post.profile', '');
    $arr["major"] = I('post.major', '');
    $arr["school"] = I('post.school', '');
    $arr["mobile"] = I('post.mobile', '');
    $arr["qq"] = I('post.qq', '');
    $arr["wechat"] = I('post.wechat', '');
    $arr["sex"] = I('post.sex', '1');
    $arr["achieving"] = I('post.achieving', '');
    $arr["achieved"] = I('post.achieved', '');
    $arr["birth"] = I('post.birth', '');
    $arr["constellation"] = I('post.constellation', '');
    $arr["role"] = 1;
    $arr["valid"] = 1;
    $arr["more"] = "";
    // $arr["updatetime"] = time();
    // $arr["createtime"] = time();
    $arr["location"] = I('post.location', '');
    $arr["thumbnail"] = I('post.thumbnail', '');
    $back_data = $this->teacherModel->create($arr);
    $name = $arr["name"];
    $saved_teacher = $this->teacherModel->where('name ="'.$name.'"')->find();
    $ablity = new \Api\Model\AbilityModel();
    $ablity_attr  = array(
      'user_id' => $saved_teacher["uid"],
      'charts' => I('post.charts', ''),
      'model_3d' => I('post.model_3d', ''),
      'model_express' => I('post.model_express', ''),
      'effect' => I('post.effect', ''),
      'design_theory' => I('post.design_theory', ''),
      'parametrize' => I('post.parametrize', '')
    );
      $ablity->insertAbility($ablity_attr);

    $this->ajaxReturn($saved_teacher, "json");


    // echo json_encode($arr);

  }

  public function upLoadPic(){
    $upload = new \Think\Upload();// 实例Gd化上传类
    $upload->maxSize   =     31457280 ;// 设置附件上传大小
    $upload->rootPath  =      './TeacherImages/'; // 设置附件上传根目录
    // 上传单个文件
    $info   =   $upload->uploadOne($_FILES['photo']);
    if(!$info) {// 上传错误提示错误信息
      $this->error($upload->getError());
    }else{// 上传成功 获取上传文件信息
      $image_path = $info['savepath'].$info['savename'];
      $util = new \Admin\Model\UtilModel();
      $thumb = $util->teacherImageCrop($upload->rootPath.$image_path, $info['ext'], 150, 150);
      $data = ['thumb' => $thumb, 'cover' => $image_path];
      $this->ajaxReturn($data, "json");
      }
  }

  //获取封面
  public function getCover(){
    $uid = I('param.uid', '');
    $this->ajaxReturn($this->teacherModel->getCover($uid), "json");

  }
  public function getTeacherByName(){
    $name = I('param.name', '');
    $saved_teacher = $this->teacherModel->where('name ="'.$name.'"')->find();
    $this->ajaxReturn($saved_teacher, "json");
  }


}
