<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="UTF-8">
	<title>创联致信-全栈敏捷运维软件提供商</title>
	<link rel="stylesheet" href="/webpage/ch/cms/public/css/page.css">
	<script src="/webpage/ch/cms/public/js/jquery-1.8.3.min.js"></script>
	<style>
	</style>
</head>
<body>
	<div class="content back-fff" id="content" name="content">
		<style>
			.bannerWarp{
			  height: 263px;
			}
			.bannerImg{
			  margin-top:-131px;
			}
		</style>
		<div class="warp bannerWarp borB4-dee1e5">
			<img class="bannerImg" src="/webpage/ch/cms/public/images/banner_hezuo.jpg" alt="">
		</div>
		<style>
		
			.statement{
				margin-top: 16px;
				line-height: 40px;
				font-size: 20px;
			}
			.h1{
				font-size: 20px;
				font-weight: 800
			}
			.conditionH1{
				margin-top: 50px;
			}
			.condition{
				margin-top:50px;
			}
			.condition p{
				height: 33px;
				line-height: 33px;
			}
		</style>
		<p class="statement w1200 mauto">面向广大代理商、系统集成商、软件开发商，我们提供优质的产品及具备竞争力的销售代理及合作政策，同时提供专业技术支持与合作培训，诚邀业界同仁共建生态、合作共赢。</p>
		<p class="conditionH1 h1 w1200 mauto">加入条件</p>
		<div class="condition w1200 mauto">
			<p>（一）具备高校、医院、大型企业、金融等优质客户资源的专业销售团队</p>
			<p>（二）具备提供云计算、存储、网络等专业IT服务支撑能力的广大集成商</p>
			<p>（三）具备深厚的OA、ERP等行业软件开发和实施能力的软件服务商</p></p>
		</div>
		<style>
			.cooperationH1{
				margin-top:50px;
			}
			.cooperationStep{
				padding-left:45px;
				margin-top:60px;
			}
		</style>
		<p class="cooperationH1 h1 w1200 mauto">合作流程</p>
		<div class="w1200 mauto">
			<img class="cooperationStep" src="/webpage/ch/cms/public/images/hezuo/step.png" alt="">
		</div>
		
		<style>
			.hrBor{
				height: 0px;
				margin-top:95px;
				border-bottom:1px dashed #b2b2b2;
			}
			.addH1{
				margin-top: 78px;
			}
			.addText{
				margin-top:20px;
				font-size: 18px;
			}
		</style>
		<div class="hrBor w1200 mauto"></div>
		<p class="addH1 h1 w1200 mauto">申请加入</p>
		<p class="addText col-4c5058 w1200 mauto">如果您想与我们合作，请填写以下表提交，我们将及时与您联系</p>
		<style>
			.fromUl{
		 		width:600px;
			}
			.fromUl li{
				margin-top:38px;
				display: block;
			}
			.fromUl li .left{
				width:120px;
				height: 30px;
				line-height: 30px;
				font-size: 15px;
				text-align: right;
			}
			.fromUl li .right input{
				width:348px;
				height: 30px;
				border:1px solid #ccc;
				font-size: 15px;
				text-align: right;
			}
			.fromUl li .right textarea{
				width:348px;
				height: 150px;
				border:1px solid #ccc;
				font-size: 15px;
				text-align: right;
			}
			.fromUl li .right .sub{
				width:148px;
				height: 38px;
				line-height: 38px;
				border:1px solid #1296db;
				background-color: #fff;
				text-align: center;
				color:#1296db;
				display: block;
				margin-left:100px;
				cursor: pointer;
			}
		</style>
		<div class="w1200 mauto">
			<ul class="fromUl">
				<li class="clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>
						<span>姓名：</span>
					</p>
					<div class="right fl">
						<input id="name" type="text">
					</div>
				</li>
				<li class="clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>
						<span>联系电话：</span>
					</p>
					<div class="right fl">
						<input id="phone" type="text">
					</div>
				</li>
				<li class="clearfix">
					<p class="left fl">
						<span>*</span>
						<span>公司名称：</span>
					</p>
					<div class="right fl">
						<input id="company" type="text">
					</div>
				</li>
				<li class="clearfix">
					<p class="left fl">
						<span>*</span>
						<span>合作需求：</span>
					</p>
					<div class="right fl">
						<textarea name="" id="requirement" cols="30" rows="10"></textarea>
					</div>
				</li>
				<li class="clearfix">
					<p class="left fl">
					</p>
					<div class="right fl">
						<input class="sub" type="submit" value="提交" onclick="tijiao()">
					</div>
				</li>
			</ul>
		</div>
		<script>
		shareHTML();
		function shareHTML(){
			$("<div>").load('/webpage/ch/cms/include/share.html',function(text){
				$(document.body).prepend(text)
				menuHTML();
			})
		}
		function menuHTML(){
			$("<div>").load('/webpage/ch/cms/include/menu.html',function(text){
				$(".content").prepend(text)
				cooperationHTML();		
			})
		}
		function cooperationHTML(){
			$("<div>").load('/webpage/ch/cms/include/cooperation.html',function(text){
				$(".content").append(text)
				footerHTML();		
			})
		}
		
		function footerHTML(){
			$("<div>").load('/webpage/ch/cms/include/footer.html',function(text){
				$(".content").append(text)
				frendLinkHTML();
			})
		}
		function frendLinkHTML(){
			$("<div>").load('/webpage/ch/cms/include/frendLink.html',function(text){
				$(".content").append(text)
			})
		}
		</script>
	</div>
</body>
</html>
<script type="text/javascript">
	function tijiao(){
		var name = $('#name').val();
		var phone = $('#phone').val();
		var company = $('#company').val();
		var requirement = $('#requirement').val();
		// alert(requirement)
		$.post("/index.php/Ch/Cms/cooperation/add",{"name":name,"phone":phone,"company":company,"requirement":requirement},function(e){
			// alert(e)
			if(e){
				alert("留言成功，稍后我们会与您取得联系！")
			}else{
				alert("留言失败，请核实后重新留言！")
			}
		});
	}
</script>