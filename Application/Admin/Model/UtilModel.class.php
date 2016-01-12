<?php
namespace Admin\Model;
class UtilModel {
  //html去除换行
  public function trimall($str){
    $qian=array("\t","\n");$hou=array("","");
    return str_replace($qian,$hou,$str);
  }
  //图片处理
  public function workImageCrop($path, $width, $height){
    //$path是要处理的文件路径
    $image = new \Think\Image();
    $image->open('./WorkImages/'.$path);
    //将图片裁剪为100x100并保存为corp.jpg
    $thumb_url = ((string)time()).(string)rand().'.jpg';
    $image->thumb($width, $height)->save('Public/thumb/'.$thumb_url);

    return $thumb_url;
  }

}
