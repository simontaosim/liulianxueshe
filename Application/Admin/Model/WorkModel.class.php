<?php
namespace Admin\Model;
use Think\Model;
class WorkModel extends Model {
    protected $tableName = 'works';

    //获取作品列表详情，$num：每页获取的记录条数，$page：第几页
    public function getList($num, $page){
      $count = ($page-1)*$num;
    $sql = "SELECT wid, author,thumbnail,content,createtime,updatetime,title FROM `works` WHERE valid=1 ORDER BY updatetime DESC LIMIT $count, $num";
    	$res = $this->query($sql);
		  return $res;
    }

    //删除作品，将作品的valid字段值设置为0，不做物理删除
    public function deleteWork($wid){
    	$data["valid"] = 0;
    	$res = $this->where("wid='{$wid}'")->save($data);
    	return $res;
    }

    //添加新作品
    public function addWork($arr){
    	$data = $arr;
    	$res = $this->add($arr);
    	return $res;
    }

    //编辑更新作品
    public function modifyWork($arr){
    	$wid = $arr["wid"];
    	$res = $this->where("wid='$wid'")->save($arr);
    	return $res;
    }

    //获取作品详细信息
    public function getDetail($wid){
    	$res = $this->where("wid='$wid'")->find();
    	return $res;
    }

    //获取大图原图
    public function getCover($wid){
      return
      $res = $this->where("wid=$wid")->field("cover")->find();
    }

    //模糊搜索，按照id模糊搜索
    public function searchById($word){
        $where['_string'] = '(wid like "'%$word%'") ' ;
        $res = $this->where($where)->find()->limit(10);
        return $res;
    }

    //模糊搜索，按照title模糊搜索
    public function searchByTitle($word){
        $where['_string'] = '(title like "'%$word%'") ' ;
        $res = $this->where($where)->find()->limit(10);
        return $res;
    }

    //模糊搜索，按照author模糊搜索
    public function searchByAuthor($word){
        $where['_string'] = '(author like "'%$word%'") ' ;
        $res = $this->where($where)->find()->limit(10);
        return $res;
    }

}
