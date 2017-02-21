<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript" charset="utf-8">
	//第一步 定义一个全局路径 
	window.UEDITOR_HOME_URL = "/Public/ueditor/";  
	//第二步 加载所需要的JS文件（2个）
</script>
<script src="/Public/ueditor/editor_all.js" type="text/javascript"></script>
<script src="/Public/ueditor/editor_config.js" type="text/javascript"></script>
<script type="text/javascript">
	//第五步 设置调用编辑器元素
	var editorOption = {
		autoClearinitialContent:false,
        //关闭字数统计
        wordCount:false,
        //更多其他参数，请参考editor_config.js中的配置项
        initialContent:'请输入内容',
        initialFrameWidth:800 ,
        initialFrameHeight:220,
        toolbars:[
        ['source','bold', 'italic', 'underline', 'strikethrough',  'paragraph', 'fontfamily', 'fontsize', '|',
        'link', 'unlink', 'anchor', '|',  'insertimage', 'emotion','scrawl', 'music','highlightcode','indent','justifyleft','justifycenter','justifyright','justifyjustify','snapscreen','preview','deleterow','formatmatch','searchreplace','removeformat','pastePlain','undo','cleardoc','snapscreen','selectall','autotypese','forecolor','lineheigth','touppercase','tolowercase']
        ]
    };
	//第六步实例化一个编辑器对象，并将编辑器元素配置，做为参数传入实例化方法中
	var editor_a = new baidu.editor.ui.Editor(editorOption);

    //第七步 直接渲染编辑器
    editor_a.render('myEditor');
    
</script>
<div class="pageContent">
	<form method="post" action="/index.php/Admin/Cms/News/update/navTabId/classID<?php echo ($vo["classID"]); ?>/callbackType/closeCurrent"    class="pageForm required-validate"  enctype="multipart/form-data"
	onsubmit="return iframeCallback(this, navTabAjaxDone);">
	<?php  ?>
	<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
	<input type="hidden" name="formstatus" value="<?php echo ($formstatus); ?>" /> 
	<div class="pageFormContent nowrap"  layoutH="97"> 
		<dl>
			<dt>分类：</dt>
			<!-- <dd><input type="text" style="width:350px" name="specialID"/></dd>  -->
			<dd>
				<select name="specialID">
				  <option value ="新闻资讯">新闻资讯</option>
				  <option value ="产品动态">产品动态</option>
				  <option value="最新活动">最新活动</option>
				  <option value="案例分享">案例分享</option>
				</select>
			</dd>
		<dl>
			<dt>标题：</dt>
			<dd><input type="text" class="required" value="<?php echo ($vo["title"]); ?>" style="width:350px" name="title"/></dd> 
		</dl>
		<dl>
			<dt>作者：</dt>
			<dd><input type="text" class="required" value="<?php echo ($vo["author"]); ?>" style="width:350px" name="author"/></dd> 
		</dl>

		<!-- <dl>
			<dt>分类：</dt>
			<dd><input type="text" value="<?php echo ($vo["specialID"]); ?>" style="width:350px" name="specialID"/></dd> 
		</dl> -->

		<!-- <dl>
			<dt>副标题：</dt>
			<dd><input type="text" value="<?php echo ($vo["subtitle"]); ?>"style="width:350px" name="subtitle"/></dd> 
		</dl>

		<dl>
			<dt>外链：</dt>
			<dd><input type="text" value="<?php echo ($vo["outlinks"]); ?>" style="width:350px" name="outlinks"/></dd>
		</dl>

		<dl>
			<dt>点击量：</dt>
			<dd><input type="text" value="<?php echo ($vo["hits"]); ?>" style="width:350px" name="hits"/></dd> 
		</dl> -->

		<dl>
			<dt>简介：</dt>
			<dd><textarea name="Intro" cols="55" class="required"  style="height:80px" rows="5"><?php echo ($vo["Intro"]); ?></textarea></dd> 
		</dl>

		<dl>
			<dt>内容：</dt>
			<dd><textarea id="myEditor" name="content" width="600" height="350px" ><?php echo ($vo["content"]); ?></textarea></dd> 
		</dl>

		<dl>
			<dt>缩略图：</dt> 
			<dd>
				<input name="upload" type="file" />
				<?php if($vo['attachment'] != ''): ?><a href="/Upload<?php echo ($vo["attachpath"]); echo ($vo["attachment"]); ?>" target="_blank"><img src="/Upload<?php echo ($vo["attachpath"]); ?>thumb_<?php echo ($vo["attachment"]); ?>" alt="" style="height:20px;"></a><?php endif; ?>
			</dd>
		</dl>

		<dl>
			<dt>首页置顶：</dt>
			<dd><input type="checkbox" <?php if(($vo['Indexfirst']) == "1"): ?>checked<?php endif; ?>    name="Indexfirst"/></dd> 
		</dl>

		<!-- <dl>
			<dt>发布日期：</dt>
			<dd>
				<input type="text" name="writetime" class="date" readonly="true" value="<?php echo (date('Y-m-d', $vo["writetime"])); ?>" />
			</dd>
		</dl> -->

		<dl>
			<dt>状态：</dt> 
			<dd><input type="radio" name="status" value="2" <?php if(($vo['status']) == "2"): ?>checked<?php endif; ?> />暂存 
				<input type="radio" name="status" value="1" <?php if(($vo['status']) == "1"): ?>checked<?php endif; ?> />提交 </dd> 
			</dl>
			
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