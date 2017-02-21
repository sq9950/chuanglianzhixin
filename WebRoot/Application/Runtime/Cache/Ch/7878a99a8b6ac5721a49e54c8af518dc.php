<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="UTF-8">
	<title>创联致信-全栈敏捷运维软件提供商</title>
	<link rel="stylesheet" href="/webpage/ch/cms/public/css/page.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="/webpage/ch/cms/public/js/jquery-1.8.3.min.js"></script>
</head>
<body>
	<div class="content back-f0f3f8" id="content" name="content">
		<style>
			.bannerWarp{
			  height: 213px;
			  border-bottom-width: 13px;
			}
			.bannerImg{
			  margin-top:-106px;
			}
		</style>
		<div class="warp bannerWarp borB4-dee1e5">
			<img class="bannerImg" src="/webpage/ch/cms/public/images/banner_xinwen.jpg" alt="">
		</div>
		 <style>
		 	.typeCon{
				height: 60px;
				line-height: 60px;
				margin-top:60px;
				background-color: #fff;
		 	}
		 	.typeCon ._con{
				padding-left: 20px;
				padding-right: 55px;
		 	}
		 	.typeCon a{
				color:#999999;
				font-size: 16px;
				display: block;
				float: left;
				padding-left:7px;
				padding-right:7px;
		 	}
		 	.typeCon a.select{
				color:#000;
				border-bottom:2px solid #2d8aff;
		 	}
		 	.currAddr span{
				 color:#999;
		 	}
		 	.currAddr span.curr{
				 color:#666;
		 	}

		 </style>
		<div class="w1280 mauto typeCon">
			<div class="_con">
				<span class="fl block">分类：</span>
				<a class="select" href="/index.php/Ch/Cms/News/index">新闻资讯</a>
				<a href="/index.php/Ch/Cms/News/cpdt">产品动态</a>
				<a href="/index.php/Ch/Cms/News/zxhd">最新活动</a>
				<a href="/index.php/Ch/Cms/News/alfx">案例分享</a>
				<span class="fr currAddr">
					<span>当前位置：</span>
					<span>首页</span>
					<span>>新闻动态</span>
					<span class="curr">>新闻资讯</span>
				</span>
			</div>
		</div>
		<style>
			.newList li{
				margin-top:30px;
				background-color: #fff;
			}
			.newList .left{
				width:360px;
				padding-top:20px;
				padding-bottom:20px;
			}
			.newList .left img{
				width:320px;
				height: 180px;
				display: block;
				margin: 0 auto;
			}
			.newList .right{
				padding-right:60px;
			}
			.newList .right .title{
				color:#6c7481;
				font-weight: 800;
				font-size: 18px;
				padding-top:40px;
			}
			.newList .right .text{
				line-height: 24px;
				color:#6c7481;
				font-size: 12px;
				margin-top:30px;
			}
			.newList .right .timeData{
				margin-top:50px;
			}
			.newList .right .timeData,
			.newList .right .timeData a{
				font-size: 12px;
				color:#c3c3c3;
			}
		</style>
		<ul class="newList w1280 mauto">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="clearfix">
					<div class="left fl">
						<img src="/Upload<?php echo ($v["attachpath"]); echo ($v["attachment"]); ?>" alt="">
					</div>
					<div class="right">
						<p class="title"><?php echo ($v["title"]); ?></p>
						<p class="text"><?php echo ($v["Intro"]); ?></p>
						<div class="timeData clearfix">
							<!-- <p class="fl">2016-08-10&nbsp;09:36:59</p> -->
							<p class="fl"><?php echo (date("Y-m-d h:i:s",$v["writetime"])); ?></p>
							<p class="fr">
								<a href="/index.php/Ch/Cms/News/newscon/id/<?php echo ($v["id"]); ?>">阅读全文</a>
							</p>
						</div>
					</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			
			<!-- <li class="clearfix">
				<div class="left fl">
					<img src="/webpage/ch/cms/public/images/news/list.jpg" alt="">
				</div>
				<div class="right">
					<p class="title">IT运营新世界</p>
					<p class="text">2016全球运营大会2016全球运营大会2016全球运营大会2016全球运营大会2016全球运营大会2016全球运营大会2016全球运营大会2016全球运营大会2016全球运营大会2016全球运</p>
					<div class="timeData clearfix">
						<p class="fl">2016-08-10&nbsp;09:36:59</p>
						<p class="fr">
							<a href="./newsCon.html">阅读全文</a>
						</p>
					</div>
				</div>
			</li> -->
		</ul>
		<style>
			.pageNum{
				height: 22px;
				margin-top:30px;
				line-height: 22px;
			}
			.pageNum ul li{
				width:22px;
				height: 22px;
				line-height: 22px;
				background-color: #fff;
				font-size: 12px;
				text-align: center;
				float: right;
				margin-left:10px;
			}
			.pageNum ul li.text{
				width:400px;
				background-color: transparent;
				text-align: right;
				color: #6c7481;
			}
			.pageNum ul li a{
				color:#6c7481;
			}
			.pageNum ul li a.curr{
				color:#3681dd;
			}
			.pageNum span,.pageNum a{
				font-size: 12px;
				color: #6c7481;
				display: inline-block;
				margin-right: 10px;
			}
		</style>
		<div class="pageNum w1280 mauto">
			<ul  style="float:left;width:90%">
				<li class="text"style="margin-right:10px">

				</li>
			</ul>
			<div style="float:right">
				<?php echo ($page); ?>
			</div>
			
			<!-- <span style="float:left"><a href="javascript:;">尾页</a></span> -->
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
<script>
	// $(function(){
	// 	$('._con a').click(function(){
	// 		$('._con a').removeClass('select');
	// 		$(this).addClass('select');
	// 	})
	// })
	
 //    $('.pageNum').css({'color':'#6c7481','font-size':'12px'})
	// $('.pageNum div').css({'float':'right','margin-right':'10px'})
	// $('.num').css({'margin-right':'10px'})
	// $('.current').css({'margin-right':'10px'})
	// $('.next').html('>')
</script>
</html>