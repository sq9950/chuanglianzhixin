<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="UTF-8">
	<title>创联致信-全栈敏捷运维软件提供商</title>
	<link rel="stylesheet" href="/webpage/ch/cms/public/css/page.css">
	<script src="/webpage/ch/cms/public/js/jquery-1.8.3.min.js"></script>
</head>
<body class=" back-eaeaea">
<style>
	.appointment{
		width: 600px;
		margin:158px auto 0 auto;
		background: #eaeaea;
		border:1px solid #b0b0b0;
		padding-bottom:30px;
	}
	.appointment .top{
			height: 40px;
			line-height: 40px;
			padding-top:40px;
			padding-bottom:20px;
			margin-left:35px;
			border-bottom:1px dashed #a6a6a6;
	}
	.appointment .top span{
		font-size: 18px;
		font-weight: 800;
	}
	.appointment .top img,
	.appointment .top span{
		vertical-align: middle;
	}
	.appointment .con{

		line-height: 28px;
		margin-top: 15px;
	}
	.appointment .con .list{
		margin-top:15px;
	}
	.appointment .con .left{
			width:170px;
			margin-right: 10px;
			text-align: right;
	}
	.appointment .con .right{
			text-align: left;
	}
	.appointment .con .right .inp{
		width:345px;
		height: 28px;
		line-height: 28px;
		display: block;
		border:1px solid #cccccc;
	}
	.appointment .con .right label{
		display: block;
	}
	.warpCon{
		background: url(/webpage/ch/cms/public/images/yuyue/bg.jpg) no-repeat;
		
	}
</style>
<div class="warpCon w1280 mauto clearfix">
	<div class="appointment fr">
		<div class="top">
			<img src="/webpage/ch/cms/public/images/yuyue/rili.png" alt="">
			<span>欢迎预约演示</span>
		</div>
		<div class="con">
			<ul>
				<li class="list clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>公司名称：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="company">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>联系人：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="contacts">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						部门：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="department">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>联系电话：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="phone">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						电子邮箱：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="email">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>公司地址：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="addr">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						网络设备数量：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="deviceNum">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						服务器数量：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="serverNum">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						业务系统数量：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="systemNum">
					</div>
				</li>
				<li class="list clearfix">
					<p class="left fl">
						虚拟化厂商：
					</p>
					<div class="right fl">
						<input class="inp" type="text" id="virtualNum">
					</div>
				</li>
				<style>
					.productList{
						
					}
					.productList label{
						margin-top:20px;
					}
					.productList label input{
						display: none;
					}
					.productList label div{
						float: left;
						width:13px;
						height:14px;
						border:1px solid #7d7d7d;
						margin-top:5px;
						margin-right:5px;
					}
					.productList label div.select{
						width:16px;
						height: :16px;
						border:none;
						background: url(/webpage/ch/cms/public/images/yuyue/sel.jpg);
					}
					.open{
						cursor: pointer;
					}
				</style>
				<li class="list productList clearfix">
					<p class="left fl">
						<span class="col-f51010">*</span>预约演示产品：
					</p>
					<div class="right fl">
						<p class="col-1296db open">
						点击展开
						<img class="off" src="/webpage/ch/cms/public/images/yuyue/sanjiao.png" alt="">
						<img class="on none" src="/webpage/ch/cms/public/images/yuyue/sanjiao2.png" alt="">
						</p>
						<div class="openCon none">
							<input type="hidden" class="hidden_hx">
							<label >
								<input type="checkbox">
								<div ></div>
								<span >ITiMe 基础设施监控平台</span>
							</label>
							<label >
								<input type="checkbox">
								<div ></div>
								<span>ITiMe 应用性能监控平台（Insight）</span>
							</label>
							<label >
								<input type="checkbox">
								<div ></div>
								<span>ITiMe 应用性能监控平台（Apm）</span>
							</label>
							<label >
								<input type="checkbox">
								<div ></div>
								<span>ITiMe 自动化运维平台（Automation）</span>
							</label>
							<label >
								<input type="checkbox">
								<div ></div>
								<span>ITiMe 敏捷运维管理平台（ITSM、CMDB）</span>
							</label>
							<label >
								<input type="checkbox">
								<div ></div>
								<span>企业档案管理系统（Archive）</span>
							</label>
							<style>
								.other{
									margin-top: 27px;
									color: #8c8c8c;
								}
								textarea{
									display: block;
									width:348px;
									height: 73px;
									border:1px solid #cccccc;
								}
								.yuyueBtn{
									width:346px;
									height: 38px;
									line-height: 38px;
									text-align: center;
									border: none;
									background: #1296db;
									color:#fff;
									font-size:18px;
									margin-top:26px;
									border-radius: 5px;
								}
							</style>
							<p class="other">其他要求</p>
							<textarea name="" id="other" cols="30" rows="10"></textarea>
						</div>
						<button class="yuyueBtn" type="submit" onclick="tijiao()">预约演示</button>
					</div>
				</li>
				<script>
				var hx_arr=[];
					$(".productList label").on("click",function(e){
						if(e.target.nodeName == "INPUT"){
							var inp_sel = $(this).find("input")[0]
							var isCheck = inp_sel.checked
							if(isCheck){

								
								$(this).find("div").addClass("select");
								hx_arr.push($(this).find("span").html());
        						$(".hidden_hx").val(hx_arr.join(","));
   								
							}else{
								//alert($(this).find("div").attr("value"))
								
								$(this).find("div").removeClass("select");
								for(var i=0;i<hx_arr.length;i++){
				   					if(hx_arr[i]==$(this).find("span").html()){
				   					hx_arr.splice(i,1);
				   					}
				   				}
				   				$(".hidden_hx").val(hx_arr.join(","));
								
							}
							
						}
					})
					$(".open").on("click",function(){
							$(".openCon").toggle();
							$(".open .off").toggle();
							$(".open .on").toggle();
					})
				</script>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	function tijiao(){
		var company = $('#company').val();
		var contacts = $('#contacts').val();
		var department = $('#department').val();
		var phone = $('#phone').val();
		var email = $('#email').val();
		var addr = $('#addr').val();
		var deviceNum = $('#deviceNum').val();
		var serverNum = $('#serverNum').val();
		var systemNum = $('#systemNum').val();
		var virtualNum = $('#virtualNum').val();
		var product = $('.hidden_hx').val();
		var other = $('#other').val()
		// alert(product)
		$.post("/index.php/Ch/Cms/Appointment/add",{"company":company,"contacts":contacts,"department":department,"phone":phone,"email":email,"addr":addr,"deviceNum":deviceNum,"serverNum":serverNum,"systemNum":systemNum,"virtualNum":virtualNum,"product":product,"other":other},function(e){
			// alert(e)
				if(e){
					alert("留言成功，稍后我们会与您取得联系！")
				}else{
					alert("留言失败，请核实后重新留言！")
				}
		});
	}
	

</script>