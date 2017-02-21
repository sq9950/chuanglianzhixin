<?php
/**
 *简要说明	
 * @package 		Ch/Cms	            //所属包
 * @author 		    wanglin<1210321011@qq.com>	//作者王琳
 * @version 		V1.0	                    //版本号  
 * @firstday 	    2014/07/07	                //最先写的日期
 * @lastmodifide	2014/08/24	                //最后修改日期
 */
namespace Ch\Controller\Cms;
use Think\Controller;

//单页管理列表类
class IndexController extends ComController{ 
  	  
	  //单页管理列表
	  public function  index(){  
	  	$model = M("News");
	  	$news = $model->where('classID=59 AND Indexfirst=1 AND status=1')->order('writetime desc')->limit(3)->select();
	  	foreach ($news as $key => $value) {
	  		$news[$key]['ctime'] = date('Y-m-d',$value['writetime']);
	  		// if($value['specialID'] == '新闻资讯'){
	  		// 	$news[$key]['curl'] = 'index';
	  		// }else if($value['specialID'] == '产品动态'){
	  		// 	$news[$key]['curl'] = 'cpdt';
	  		// }else if($value['specialID'] == '最新活动'){
	  		// 	$news[$key]['curl'] = 'zxhd';
	  		// }else if($value['specialID'] == '案例分享'){
	  		// 	$news[$key]['curl'] = 'alfx';
	  		// }
	  	}
		$this->assign('news',$news);// 赋值数据集
		// $this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板 
	 } 
	 
	 
	 // 详情	 
	 public function  infor(){   
	 	$id=(int)$_GET['id'];
		$About  = M('About'); 
		$arr=$About->find($id);
		if($arr){
			if($arr['status']==1){
				$this->assign('arr',$arr);
				$this->display();
			}else{
				//状态不对
				echo '404';
			} 
		}else{
			//ID不存在
			echo '404';
		} 
	 }   
}