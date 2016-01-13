<?php
namespace Admin\Model;
class UtilModel {
  //html去除换行
  public function trimall($str){
    $qian=array("\t","\n");$hou=array("","");
    return str_replace($qian,$hou,$str);
  }

  //作品图片处理
  public function workImageCrop($path, $ext, $width, $height){
    //$path是要处理的文件路径
    $image = new \Think\Image();
    $res = $image->open($path);
    //将图片裁剪为100x100并保存为corp.jpg
    $thumb_url = ((string)time()).(string)rand().'.'.$ext;
    $image->thumb($width, $height)->save('WorkImages/thumb/'.$thumb_url);

    return $thumb_url;
  }

  //教师图片处理
  public function teacherImageCrop($path, $ext, $width, $height){
    //$path是要处理的文件路径
    $image = new \Think\Image();
    $res = $image->open($path);
    //将图片裁剪为100x100并保存为corp.jpg
    $thumb_url = ((string)time()).(string)rand().'.'.$ext;
    $image->thumb($width, $height)->save('TeacherImages/thumb/'.$thumb_url);

    return $thumb_url;
  }

}
