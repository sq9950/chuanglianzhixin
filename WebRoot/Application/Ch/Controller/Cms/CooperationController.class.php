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
class CooperationController extends ComController{ 
  	  
	  //单页管理列表
	  public function  index(){  
		// $Cooperation       = M('Cooperation'); // 实例化User对象
		// $count      = $Cooperation->where('status=1 and classID=8')->count();// 查询满足要求的总记录数
		// $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		// $show       = $Page->show();
		// // 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		// $list = $Cooperation->where('status=1 and classID=8')->order('writetime')->limit($Page->firstRow.','.$Page->listRows)->select();
		// $this->assign('list',$list);// 赋值数据集
		// $this->assign('page',$show);// 赋值分页输出



		$this->display(); // 输出模板 
	 } 
	 
	 public function add(){
	 	$model = M("Cooperation");
		$data['classID'] = 62;
		$data['status'] = 0;
		$data['language'] = 1;
		$data['writetime'] = time();
		$data['name'] = $_POST['name'];
		$data['phone'] = $_POST['phone'];
		$data['company'] = $_POST['company'];
		$data['requirement'] = $_POST['requirement'];

		$res = $model->add($data);
		echo $res;
	 }

	 // 详情	 
	 public function  infor(){   
	 	$id=(int)$_GET['id'];
		$Cooperation  = M('Cooperation'); 
		$arr=$Cooperation->find($id);
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