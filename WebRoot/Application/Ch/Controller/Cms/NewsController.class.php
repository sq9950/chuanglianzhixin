<?php
/**
 *简要说明	
 * @package 		Ch/Cms	            //所属包
 * @author 		    wanglin<1210321011@qq.com>	//作者王琳
 * @version 		V1.0	                    //版本号  
 * @firstday 	    2014/07/07	                //最先写的日期
 * @lastmodifide	2014/08/20	                //最后修改日期
 */
namespace Ch\Controller\Cms;
use Think\Controller;

//新闻列表类
class NewsController extends ComController{ 

  	  //项目新闻
	  public function  index(){  
		$specialID = '新闻资讯';
		$map['specialID'] = array('eq', $specialID);
		$map['status'] = 1;
		$model = M('News'); 
		$listRows = '5';// 每页显示的记录数
		// 设置当前页码
		if(!$_GET['pageNum']) {
			$nowPage = $_GET['pageNum'];
		}else{
			$nowPage = 1;
		}
		// 分页数据
		$list=$model->where($map)->select();  
		$count=count($list); 
		// var_dump($list);die;
		// 创建分页对象 
		$p = new \Think\Pages($count, $listRows); 
		//分页显示
		$page = $p->show(); 

		//分页数据
		$list = $model->where($map)->order("writetime desc")->limit($p->firstRow.','.$p->listRows)->select(); 
		// echo $model->getLastSql();  
	 	foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}


		//模板赋值显示
		$this->assign('list', $list); 
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		// var_dump($page);die;
		$this->assign("search",	$search);			//搜索类型
		$this->assign("values",	$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",	$count );			//总条数
		$this->assign("numPerPage",	dowith_include($p->listRows) );		//每页显多少条
		$this->assign("currentPage", dowith_include($nowPage) );			//当前页码
		// var_dump($count);die;
		$this->display(); // 输出模板 
	 } 

	  public function  cpdt(){  

		$specialID = '产品动态';
		$map['specialID'] = array('eq', $specialID);
		$map['status'] = 1;
		$model = M('News'); 
		$listRows = '5';// 每页显示的记录数
		// 设置当前页码
		if(!$_GET['pageNum']) {
			$nowPage = $_GET['pageNum'];
		}else{
			$nowPage = 1;
		}
		// 分页数据
		$list=$model->where($map)->select();  
		$count=count($list); 
		// var_dump($list);die;
		$p = new \Think\Pages($count, $listRows); 
		//分页显示
		$page = $p->show(); 

		//分页数据
		$list = $model->where($map)->order("writetime desc")->limit($p->firstRow.','.$p->listRows)->select(); 
		// echo $model->getLastSql();  
	 	foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}


		//模板赋值显示
		$this->assign('list', $list); 
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		// var_dump($page);die;
		$this->assign("search",	$search);			//搜索类型
		$this->assign("values",	$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",	$count );			//总条数
		$this->assign("numPerPage",	dowith_include($p->listRows) );		//每页显多少条
		$this->assign("currentPage", dowith_include($nowPage) );			//当前页码
		// var_dump($count);die;
		$this->display(); // 输出模板 
	 } 


	 public function  zxhd(){  

		$specialID = '最新活动';
		$map['specialID'] = array('eq', $specialID);
		$map['status'] = 1;
		$model = M('News'); 
		$listRows = '5';// 每页显示的记录数
		// 设置当前页码
		if(!$_GET['pageNum']) {
			$nowPage = $_GET['pageNum'];
		}else{
			$nowPage = 1;
		}
		// 分页数据
		$list=$model->where($map)->select();  
		$count=count($list); 
		// var_dump($list);die;
		$p = new \Think\Pages($count, $listRows); 
		//分页显示
		$page = $p->show(); 

		//分页数据
		$list = $model->where($map)->order("writetime desc")->limit($p->firstRow.','.$p->listRows)->select(); 
		// echo $model->getLastSql();  
	 	foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}


		//模板赋值显示
		$this->assign('list', $list); 
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		// var_dump($page);die;
		$this->assign("search",	$search);			//搜索类型
		$this->assign("values",	$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",	$count );			//总条数
		$this->assign("numPerPage",	dowith_include($p->listRows) );		//每页显多少条
		$this->assign("currentPage", dowith_include($nowPage) );			//当前页码
		// var_dump($count);die;
		$this->display(); // 输出模板 
	 } 


	 public function  alfx(){  

		$specialID = '案例分享';
		$map['specialID'] = array('eq', $specialID);
		$map['status'] = 1;
		$model = M('News'); 
		$listRows = '5';// 每页显示的记录数
		// 设置当前页码
		if(!$_GET['pageNum']) {
			$nowPage = $_GET['pageNum'];
		}else{
			$nowPage = 1;
		}
		// 分页数据
		$list=$model->where($map)->select();  
		$count=count($list); 
		// var_dump($list);die;
		// 创建分页对象 
		$p = new \Think\Pages($count, $listRows); 
		//分页显示
		$page = $p->show(); 

		//分页数据
		$list = $model->where($map)->order("writetime desc")->limit($p->firstRow.','.$p->listRows)->select(); 
		// echo $model->getLastSql();  
	 	foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}

		//模板赋值显示
		$this->assign('list', $list); 
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		// var_dump($page);die;
		$this->assign("search",	$search);			//搜索类型
		$this->assign("values",	$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",	$count );			//总条数
		$this->assign("numPerPage",	dowith_include($p->listRows) );		//每页显多少条
		$this->assign("currentPage", dowith_include($nowPage) );			//当前页码
		// var_dump($count);die;
		$this->display(); // 输出模板 
	 } 

	 public function newscon(){
	 	$id = $_GET['id'];
	 	$News = M('News');
	 	$arr = $News->where("id={$id}")->find();
	 	if($arr){
			if($arr['status']==1){
				$this->assign('arr',$arr);
				
				//上一篇
				$parr=$News->where("id>".$arr["id"]." and classID=59 and status=1")->order("writetime asc")->find();
				if($parr){
					$this->assign("parr",$parr);
				}else{
					$this->assign("parr",0);
				}
				//下一篇
				$narr=$News->where("id<".$arr["id"]." and classID=59 and status=1")->order("writetime desc")->find();
				if($narr){
					$this->assign("narr",$narr);
				}else{
					$this->assign("narr",0);
				}
				
			}else{
				//状态不对
				echo '404';
			} 
		}else{
			//ID不存在
			echo '404';
		} 
	 	$this->assign("res",$arr);
	 	$this->assign("content",$content);
	 	$this->display();
	 }

	 //项目新闻详情	 
	 public function  infor(){   
	 	$id=(int)$_GET['id'];
		$News  = M('News'); 
		$arr=$News->find($id);
		if($arr){
			if($arr['status']==1){
				$this->assign('arr',$arr);
				
				//上一篇
				$parr=$News->where("id>".$arr["id"]." and classID=2 and status=1")->order("id asc")->find();
				if($parr){
					$this->assign("parr",$parr);
				}else{
					$this->assign("parr",0);
				}
				//下一篇
				$narr=$News->where("id<".$arr["id"]." and classID=2 and status=1")->order("id desc")->find();
				if($narr){
					$this->assign("narr",$narr);
				}else{
					$this->assign("narr",0);
				}
				
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
	 
	 
	  //集团新闻	 
	 public function  group(){   
	 	$News       = M('News'); // 实例化User对象
		$count      = $News->where('status=1 and classID=3')->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();
		// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $News->where('status=1 and classID=3')->order('writetime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); 
	 } 
	 //集团新闻详情
	 public function  groupinfor(){  
		$id=(int)$_GET['id'];
		$News  = M('News'); 
		$arr=$News->find($id);
		if($arr){
			if($arr['status']==1){
				$this->assign('arr',$arr);
				
				//上一篇
				$parr=$News->where("id>".$arr["id"]." and classID=3 and status=1")->order("id asc")->find();
				if($parr){
					$this->assign("parr",$parr);
				}else{
					$this->assign("parr",0);
				}
				//下一篇
				$narr=$News->where("id<".$arr["id"]." and classID=3 and status=1")->order("id desc")->find();
				if($narr){
					$this->assign("narr",$narr);
				}else{
					$this->assign("narr",0);
				}
				
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