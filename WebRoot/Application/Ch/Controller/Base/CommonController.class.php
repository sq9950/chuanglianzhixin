<?php
/**
 *简要说明	
 * @package 		Ch/Base             //所属包
 * @author 		    wanglin<1210321011@qq.com>	//作者王琳
 * @version 		V1.0	                    //版本号  
 * @firstday 	    2014/07/07	                //最先写的日期
 * @lastmodifide	2014/08/18	                //最后修改日期
 */
namespace Ch\Controller\Base;
use Think\Controller; 
/** 
 * 公共方法 
 */
class CommonController extends Controller {

	public function _initialize() { 
		//判断用户是否登录
   //	if(empty($_SESSION[C('USER_AUTH_KEY')])){
 	/* if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
		 	$this->redirect(C('BASE').'Public/login');
		 	return;
		 } */ 
		 
		/*  
		//权限过滤
		$mname = strtolower(MODULE_NAME); //获取模块名
		$aname = strtolower(ACTION_NAME); //获取方法名
		$nodelist = $_SESSION[C('USER_AUTH_KEY')]['nodelist']; //获取权限列表
		if(empty($nodelist[$mname]) || !in_array($aname,$nodelist[$mname])){
			//$this->error("抱歉！没有操作权限！");
			//return;
		}
		*/  
	}
	
	public function index() {
		//列表过滤器，生成查询Map对象
		$map = $this->_search();
		
		if(method_exists($this, '_filter')) {
			$this->_filter($map);
		}
		//判断采用自定义的Model类
		if(!empty($_POST["actionName"])){
			$model = D($_POST["actionName"]);
		}else{
			$model = M(CONTROLLER_NAME);
		} 
		
		  if (!empty($model)) {
			$this->_list($model, $map);
		}  
			
		$this->display();
		return;
	}
	
	
	public function add() {
		$time=time();
		$this->assign('time',$time);
		$this->display('add');
	} 
	public function insert(){
		$model = D(CONTROLLER_NAME);
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
			}  
			//成功提示
			$this->success(L('新增成功'));
		} else {
			//失败提示
			$this->error(L('新增失败').$model->getLastSql());
		} 
	}
	
	public function edit() {
		$model = M(CONTROLLER_NAME);
		$id = $_REQUEST[$model->getPk()];
		$vo = $model->find($id);
		$this->assign('vo', $vo);
		$this->display('edit');
	}
	
	public function update() {
			//dump($_POST);die;
		$model = D(CONTROLLER_NAME); 
		if(false === $model->create()) {
			$this->error($model->getError());
		} 
		// 更新数据
		if(false !== $model->save()) {
			// 回调接口
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update($model);
			} 
			//成功提示
			$this->success(L('更新成功'));
		} else { 
			//错误提示
			$this->error(L('更新失败'));
		}
	}
	
	public function delete() {
		//删除指定记录
		$model = M(CONTROLLER_NAME);
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
	
	//删除状态
	public function delete_tag(){
		//删除指定记录
		$model = M(CONTROLLER_NAME);
		if (!empty($model)) {
			$pk = $model->getPk();
			$id = $_REQUEST[$pk];
			if (isset($id)) {
				
				//用于事件处理
				//if(in_array($this->CONTROLLER_NAME,$this->eventlist)){
					//保留一下原始数据
				//	$_POST["jsoninfo"]=$model->where("id=".$id)->find();
				//	$_POST["jsoninfo"]["actionname"]=$this->CONTROLLER_NAME;
				//}
				
				$condition = array($pk => array('in', explode(',', $id)));
				if (false !== $model->where($condition)->setField('is_delete',1)) {
					$this->success(L('删除成功'));
				} else {
					$this->error(L('删除失败'));
				}
			} else {
				$this->error('非法操作');
			}
		}
	}
	
	/**
	 * 根据表单生成查询条件
	 * 进行列表过滤
	 * @param string $name 数据对象名称
	 * @return HashMap
	 */
	protected function _search($name='') {
		//生成查询条件
		if (empty($name)) {
			$name = CONTROLLER_NAME;
		}
		$model = M($name);
		$map = array();
		foreach ($model->getDbFields() as $key => $val) {
			if (substr($key, 0, 1) == '_')
				continue;
			if (isset($_REQUEST[$val]) && $_REQUEST[$val] != '') {
				$map[$val] = $_REQUEST[$val];
			}
		}
		return $map; 
	}
	
	/**
	 * 根据表单生成查询条件
	 * 进行列表过滤
	 * @param Model $model 数据对象
	 * @param HashMap $map 过滤条件
	 * @param string $sortBy 排序
	 * @param boolean $asc 是否正序
	 */
	protected function _list($model,$map=array(), $sortBy = '', $asc = false) {
		
		//排序字段 默认为主键名
		if (!empty($_REQUEST['_order'])) {
			$order = $_REQUEST['_order'];
		} else {
			$order = !empty($sortBy)?$sortBy:$model->getPk();
		}
		
		//排序方式默认按照倒序排列
		//接受 sort参数 0 表示倒序 非0都 表示正序
		if (!empty($_REQUEST['_sort'])) {
			$sort = $_REQUEST['_sort'] == 'asc'?'asc':'desc';
		} else {
			$sort = $asc ? 'asc' : 'desc';
		}
		
		//取得满足条件的记录数
		$count = $model->where($map)->count();
		
		//每页显示的记录数
		if (!empty($_REQUEST['numPerPage'])) {
			$listRows = $_REQUEST['numPerPage'];
		} else {
			$listRows = '10';
		}
		
		
		//设置当前页码
		if(!empty($_REQUEST['pageNum'])) {
			$nowPage=$_REQUEST['pageNum'];
		}else{
			$nowPage=1;
		}
		$_GET['p']=$nowPage;
		
		//创建分页对象
		//import("ORG.Util.Page");
		$p = new \Think\Page($count, $listRows);
		
		
		//分页查询数据
		//$list = $model->where($map)->order($order . ' ' . $sort)->select();
		$list = $model->where($map)->order($order.' '.$sort)
						->limit($p->firstRow.','.$p->listRows)
						->select();
			
		//dump($model->getLastSql()); 
			
		//回调函数，用于数据加工，如将用户id，替换成用户名称
		if (method_exists($this, '_tigger_list')) {
			$this->_tigger_list($list);
		}
		//分页跳转的时候保证查询条件
		//dump($map);
		foreach ($map as $key => $val) {
			if (!is_array($val)) {
				$p->parameter .= "$key=" . urlencode($val) . "&";
			}
		}
	
		//分页显示
		$page = $p->show(); 
		
		//列表排序显示
		$sortImg = $sort;                                 //排序图标
		$sortAlt = $sort == 'desc' ? '升序排列' : '倒序排列';   //排序提示
		$sort = $sort == 'desc' ? 1 : 0;                  //排序方式
		
		
		//模板赋值显示
		$this->assign('list', $list);
		$this->assign('sort', $sort);
		$this->assign('order', $order);
		$this->assign('sortImg', $sortImg);
		$this->assign('sortType', $sortAlt);
		$this->assign("page", $page);
		
		$this->assign("search",			$search);			//搜索类型
		$this->assign("values",			$_POST['values']);	//搜索输入框内容
		$this->assign("totalCount",		$count);			//总条数
		$this->assign("numPerPage",		$p->listRows);		//每页显多少条
		$this->assign("currentPage",	$nowPage);			//当前页码
		
		
	}
	//添加事件信息方法；参数：1：事件类型（参考事件action类属性），2：实际内容
	protected function addEvent($type,$content,$jsoninfo=""){
		//获取当前登录者信息
		$data['cat_id']=$type; //事件类型（参考事件action类属性）
		$data["content"]=$content;
		$data["jsoninfo"]=$jsoninfo;
		$data["source"]=$_SESSION['user']['id'];
		$data["is_look"]=0;
		$data["add_time"]=time();
		//执行添加
		M("Event")->add($data);
	}
	
}
?>