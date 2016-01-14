<?php
namespace Admin\Controller\Api;
use Think\Controller;
use Think\Think;
use \Admin\Model\WorkModel;

class WorkController extends Controller {
  public function index(){
	  phpinfo();
	}

	public function works(){
		$page = I('param.page', 1);
		$work = D('Work');
    $data = $work->getList(20,$page);
		$this->ajaxReturn($data, "json");
	}

	public function create(){
    $data = [
      author => I('post.author', ''),
      title => I('post.title', ''),
      thumbnail => I('post.thumbnail', ''),
      cover => I('post.cover', ''),
      post => I('post.post', ''),
      pics => I('post.pic_url', ''),
      content => I('post.content', ''),
      valid => I('post.valid', '1'),
      createtime => date("Y-m-d H:i:s"),
      updatetime => date("Y-m-d H:i:s")
    ];
    $work = new \Admin\Model\WorkModel();
    $work->addWork($data);
    $this->ajaxReturn($data, "json");
	}
  public function update(){
    $data = [
      wid => I('post.wid', ''),
      author => I('post.author', ''),
      title => I('post.title', ''),
      thumbnail => I('post.thumbnail', ''),
      cover => I('post.cover', ''),
      content => I('post.content',''),
      updatetime => date("Y-m-d H:i:s")
    ];
    $work = new \Admin\Model\WorkModel();
    $work->modifyWork($data);
    $this->ajaxReturn($data, "json");
  }

	public function show(){
		$wid = I('param.wid', '');
		$work = new \Admin\Model\WorkModel();
		$this->ajaxReturn($work->getDetail($wid), "json");
	}


  public function upLoadPic(){

		$upload = new \Think\Upload();// 实例Gd化上传类
		$upload->maxSize   =     31457280 ;// 设置附件上传大小
		$upload->rootPath  =      './WorkImages/'; // 设置附件上传根目录
		// 上传单个文件
		$info   =   $upload->uploadOne($_FILES['photo']);
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息
			$image_path = $info['savepath'].$info['savename'];
      $util = new \Admin\Model\UtilModel();
			$thumb = $util->workImageCrop($upload->rootPath.$image_path, $info['ext'], 150, 150);
			$data = ['thumb' => $thumb, 'cover' => $image_path];
			$this->ajaxReturn($data, "json");
    	}
	}
  //获取封面
  public function getCover(){
    $wid = I('param.wid', '');
    $work = new \Admin\Model\WorkModel();
    $this->ajaxReturn($work->getCover($wid), "json");

  }

  public function destroy(){
    $wid = I('param.wid', '');
    $work = new \Admin\Model\WorkModel();
    $this->ajaxReturn($work->deleteWork($wid), "json");
  }
//================================以下是私有方法=========================================================================

}
