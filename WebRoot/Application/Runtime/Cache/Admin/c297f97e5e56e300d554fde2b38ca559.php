<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/index.php/Admin/Cms/Appointment/update/navTabId/classID<?php echo ($vo["classID"]); ?>/callbackType/closeCurrent"    class="pageForm required-validate" 
	onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<?php  ?>
	<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
	<input type="hidden" name="formstatus" value="<?php echo ($formstatus); ?>" />
	<div class="pageFormContent nowrap" layoutH="97"> 
		<dl>
			<dt>公司名称：</dt>
			<dd><input type="text" value="<?php echo ($vo["company"]); ?>" style="width:350px" name="company"/></dd> 
		</dl> 
		<dl>
			<dt>联系人：</dt>
			<dd><input type="text" value="<?php echo ($vo["contacts"]); ?>" style="width:350px" name="contacts"/></dd> 
		</dl>
		<dl>
			<dt>部门：</dt>
			<dd><input type="text" value="<?php echo ($vo["department"]); ?>" style="width:350px" name="department"/></dd> 
		</dl>
		<dl>
			<dt>联系电话：</dt>
			<dd><input type="text" value="<?php echo ($vo["phone"]); ?>" style="width:350px" name="phone"/></dd> 
		</dl>
		<dl>
			<dt>电子邮箱:</dt>
			<dd><input type="text" value="<?php echo ($vo["email"]); ?>" style="width:350px" name="email"/></dd> 
		</dl>
		<dl>
			<dt>公司地址：</dt>
			<dd><input type="text" value="<?php echo ($vo["addr"]); ?>" style="width:350px" name="addr"/></dd> 
		</dl>
		<dl>
			<dt>网络设备数量:</dt>
			<dd><input type="text" value="<?php echo ($vo["deviceNum"]); ?>" style="width:350px" name="deviceNum"/></dd> 
		</dl>
		<dl>
			<dt>服务器数量:</dt>
			<dd><input type="text" value="<?php echo ($vo["serverNum"]); ?>" style="width:350px" name="serverNum"/></dd> 
		</dl>

		<dl>
			<dt>业务系统数量:</dt>
			<dd><input type="text" value="<?php echo ($vo["systemNum"]); ?>" style="width:350px" name="systemNum"/></dd> 
		</dl>
		<dl>
			<dt>虚拟化厂商:</dt>
			<dd><input type="text" value="<?php echo ($vo["virtualNum"]); ?>" style="width:350px" name="virtualNum"/></dd> 
		</dl>

		<dl>
			<dt>预约演示产品：</dt>
			<dd>  
				<textarea name="product" style="width:350px;height:100px" ><?php echo ($vo["product"]); ?></textarea>
			</dd> 
		</dl>
		<dl>
			<dt>发布日期：</dt>
			<dd>
				<input type="text" name="writetime" class="date" readonly="true" value="<?php echo (date('Y-m-d', $vo["writetime"])); ?>" />
			</dd>
		<!-- <dl>
			<dt>状态：</dt> 
			<dd>
				<input type="radio" name="status" value="2"  <?php if(($vo['status']) == "2"): ?>checked<?php endif; ?> />暂存 
				<input type="radio" name="status" value="1"  <?php if(($vo['status']) == "1"): ?>checked<?php endif; ?> />提交 
			</dd> 
		</dl> -->

		<dl>
			提示：标注*的项目为必填项目。
		</dl>

	</div>
	
	<div class="formBar" >
		<ul style="float:left">
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li><li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
		</ul>
	</div>
</form>
</div>