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
				color:#000;
				font-size: 16px;
				display: block;
				float: left;
				padding-left:7px;
				padding-right:7px;
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
				<a href="/index.php/Ch/Cms/News/index"><&nbsp;返回最近报道列表</a>
				<span class="fr currAddr">
					<span>当前位置：</span>
					<span>首页</span>
					<span>>新闻动态</span>
					<span class="curr">>新闻详情</span>
				</span>
			</div>
		</div>
		<style>
			.newsCon{
				margin-top:20px;
				text-align: center;
			}
			.newsCon .title{
				font-size: 24px;
				color:#193967;
				padding-top:72px;
				font-weight: 800;
			}
			.newsCon .timeData{
				margin-top:17px;
				color: #989898;
				font-size: 12px;
			}
			.newsCon .con{
				padding:0 50px 50px;
			}
			.newsCon .con p{
				line-height: 27px;
				color: #333;
			}
			.newsCon .con p,
			.newsCon .con img{
				margin-top:30px;
			}
		</style>
		<div class="newsCon w1280 mauto back-fff">
			<p class="title"><?php echo ($res["title"]); ?></p>
			<p class="timeData">
				<span><?php echo (date("Y-m-d h:i:s",$res["writetime"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;作者：<?php echo ($res["author"]); ?></span>
			</p>
			<div class="con">
				<?php echo ($res["content"]); ?>
			</div>
		</div>
		<?php if($parr == 0): ?><div class="w1280 mauto typeCon">
				<div class="_con">
					<a href="javascript:;">上一篇:没有了</a>
				</div>
			</div>
		<?php else: ?>
			<div class="w1280 mauto typeCon">
				<div class="_con">
					<a href="/index.php/Ch/Cms/News/newscon/id/<?php echo ($parr["id"]); ?>">上一篇：<?php echo ($parr["title"]); ?></a>
				</div>
			</div><?php endif; ?>

		<?php if($narr == 0): ?><div class="w1280 mauto typeCon">
				<div class="_con">
					<a href="javascript:;">下一篇:没有了</a>
				</div>
			</div>
		<?php else: ?>
			<div class="w1280 mauto typeCon">
				<div class="_con">
					<a href="/index.php/Ch/Cms/News/newscon/id/<?php echo ($narr["id"]); ?>">下一篇：<?php echo ($narr["title"]); ?></a>
				</div>
			</div><?php endif; ?>
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