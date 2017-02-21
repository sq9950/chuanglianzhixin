<?php
/**
 *简要说明	
 * @package 		Admin/Mcenter	            //所属包
 * @author 		    wanglin<1210321011@qq.com>	//作者王琳
 * @modify		    xianhui<1024362476@qq.com>	//作者xianhui
 * @version 		V1.0	                    //版本号  
 * @firstday 	    2014/09/05	                //最先写的日期
 * @lastmodifide	待定		                //最后修改日期
 */
namespace Admin\Controller\Mcenter;
use Think\Controller;

// 会员管理类
class IndexController extends ComController{ 

	public function  index(){
		$this->assign('language', dowith_include($_REQUEST['language']) );	// 所属站点
		$this->assign('web', dowith_include($_REQUEST['w']) );	// 栏目
		$this->assign('formstatus', dowith_include($_SESSION['formstatus']) );	// 表单令牌
		$this->assign('classID', dowith_include($_REQUEST['classID']) ); // 分类  

		// 保存查询条件
		if($_POST['keyword']){		// 关键字
			$keyword = dowith_include( $_POST['keyword'] );
			$map['name'] = array('like', "%{$keyword}%");
			$this->assign('keyword', $keyword); 
		}
		if(intval($_POST['status'])){	// 状态
			$status = dowith_include( $_POST['status'] );
			$map['status'] = array('eq', $status);
			$this->assign('status', $status);
		}

		$model = M("Member"); 
		// 每页显示的记录数
		if (!empty($_REQUEST['numPerPage'])) {
			$listRows = dowith_include( $_REQUEST['numPerPage'] );
		} else {
			$listRows = '15';
		} 
		// 设置当前页码
		if(!empty($_REQUEST['pageNum'])) {
			$nowPage = dowith_include( $_REQUEST['pageNum'] );
		}else{
			$nowPage = 1;
		}
		$_GET['p'] = $nowPage;
		
		//分页数据
		$list = $model->where($map)->select();  
		$count = count($list); 

		//  echo $model->getLastSql(); 
		// 创建分页对象 
		$p = new \Think\Page($count, $listRows); 

		//分页数据
		$list = $model->where($map)->order("writetime desc")->limit($p->firstRow.','.$p->listRows)->select(); 
			 // echo $model->getLastSql();  
		foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}

		//分页显示
		$page = $p->show(); 		
		
	 	//模板赋值显示
		$this->assign('list', $list); 
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		
		$this->assign("search",	$search);			//搜索类型
		$this->assign("values",	$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",	dowith_include($count) );			//总条数
		$this->assign("numPerPage",	dowith_include($p->listRows) );		//每页显多少条
		$this->assign("currentPage", dowith_include($nowPage) );			//当前页码
		$this->display();
	}


	//编辑页面 
	public function edit() {
		$this->assign('formstatus', dowith_include($_SESSION['formstatus']) );	// 表单令牌
		$this->assign('classID', dowith_include($_REQUEST['classID']) ); // 分类

		$model = M("Member");		
		$id = dowith_include( $_GET['id'] );
		$vo = $model->find($id);
		$this->assign('vo', $vo);
		$this->display('edit');
	}
	
	
	//更新
	public function update() { 
		// dump($_POST);exit();
		$model = D("Member"); 
		if(false === $model->create()) {
			$this->error($model->getError());
		}

		$data['id'] = I('post.id', '', 'intval');
		$data['status'] = I('post.status', 2, 'intval');

		// 更新数据
		if(false !== $model->save($data)) {
			// 回调接口
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update($model);
			} //echo $model->getLastsql();die;
			//成功提示
			$this->success(L('修改成功'));
		} else { 
			//错误提示
			$this->error(L('更新失败'));
		}
	}


	// ajax更改会员状态
	public function changeStatus(){
		$status = $_GET['status'];
		$id = $_GET['id'];
		// echo $status;
		// echo $id;

		$obj = M('Member');
		$where['id'] = $id;
		if($status == 1){
			$data['status'] = 2;
		}else{
			$data['status'] = 1;
		}
		$count = $obj->where($where)->save($data);
		if($count){
			echo '正确';
		}else{
			echo '错误';
		}
	}


	// 查看我的订单
	public function mydeal(){
		$this->assign('language', dowith_include($_REQUEST['language']) );	// 所属站点
		$this->assign('web', dowith_include($_REQUEST['w']) );	// 栏目
		$this->assign('formstatus', dowith_include($_SESSION['formstatus']) );	// 表单令牌
		$this->assign('classID', dowith_include($_REQUEST['classID']) ); // 分类

		$id = dowith_include($_REQUEST['id']);
		$this->assign('id', $id);
		$map['uid'] = array('eq', $id);

		if($_POST['keyword']){
			$keyword = dowith_include( $_POST['keyword'] );
			$map['num'] = array('like', "%{$keyword}%");
			$this->assign('keyword', $keyword);
		}

		if(intval($_POST['status'])){
			$status = dowith_include( $_POST['status'] );
			if($status == 1){
				$map['paystatus'] = array('eq',1);
			}
			if($status == 2){
				$map['paystatus'] = array('eq',0);
			}
			if($status == 3){
				$map['sendstatus'] = array('eq',1);
			}
			if($status == 4){
				$map['sendstatus'] = array('eq',0);
			}
			if($status == 5){
				$map['checkstatus'] = array('eq',1);
			}
			if($status == 6){
				$map['checkstatus'] = array('eq',0);
			}
			$this->assign('status', $status);
		}

		$model = M("Gdeal");

		$list = $model->where($map)->select();

	 	// dump($list);
		$this->assign('list', $list);
		$this->display();
	}
	
	
	//删除方法，批量删除
	public function delete() { 
		//删除指定记录
		$model = M("Member");
		if (!empty($model)) {
			$pk = $model->getPk();
			$id = $_REQUEST[$pk];
			if (isset($id)) { 
				$condition = array($pk => array('in', explode(',', $id)));
				if (false !== $model->where($condition)->delete()) {
					$this->success(L('删除成功'));
				} else {
					$this->error(L('删除失败'));
				}
			} else {
				$this->error('非法操作');
			}
		}
	} 
	

//增加栏目页面
	public function add(){
		$time=time();
		$this->assign('time',$time); 
		$this->assign('classID',$_REQUEST['classID']); 
		$this->display('add');
	}


	 //添加新闻方法
	public function insert(){
	  //dump($_POST);die;
		$model = D("Member");
		unset ( $_POST [$model->getPk()] ); 
		if (false === $model->create()) {
			$this->error($model->getError());
		}  
		//保存当前数据对象
		if ($result = $model->add()) { //保存成功
			// 回调接口
			if (method_exists($this, '_tigger_insert')) {
				$model->id = $result;
				$this->_tigger_insert($model);
			}  // echo $model->getLastsql();die;
			//成功提示
			$this->success(L('新增成功'));
		} else {
			//失败提示
			$this->error(L('新增失败').$model->getLastSql());
		} 
	}







}