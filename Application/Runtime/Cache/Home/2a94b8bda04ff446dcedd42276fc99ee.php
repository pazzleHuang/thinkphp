<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="keywords" content="南瓜鱼 hyhning thinkphp框架作品" />
<meta name="description" content="南瓜鱼是个人创作网页" />
<title>欢迎来到导航页</title>
<link rel="stylesheet" href="/thinkphp/Public/Css/index.css" />
<!-- [if lt ie 9] >
<script src='/thinkphp/Public/Js/Frame/css3-mediaqueries.js'></script>
<script type="text/javascript" src='/thinkphp/Public/Js//Frame/css3-mediaqueries.js'></script>
<! endif -->
</head>
<body>
	<div class="main width1">
		<!-- logo -->
		<div class="header width1">
			<img src="/thinkphp/Public/Images/logo-mohu_05.png" class="logo" alt="南瓜鱼">
			<h4 class="author">by puzzleHuang</h4>
		</div>
		<!-- content -->
		<div class="content">
			<ul class="cont-list">
				<li>
					<a href="#">
						<img src="/thinkphp/Public/Images/20160602-01.png" class="icon-img" alt=""/>
						<div class="icon-text">
							<h3>首页作品</h3>
							<a href="<?php echo U('Product/product');?>">首页展示</a>	
						</div>			
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/thinkphp/Public/Images/20160602-02.png" class="icon-img" title="海报" alt=""/>	
						<div class="icon-text">					
							<h3>图片瀑布流</h3>
							<a href="<?php echo U('Product/water');?>">图片-瀑布流</a>
						</div>
					</a>	
				</li>
				<li>
					<a href="#">
						<img src="/thinkphp/Public/Images/20160602-03.png" class="icon-img" alt=""/>		
						<div class="icon-text">
							<h3>动画</h3>
							<a href="<?php echo U('Product/html5');?>">html5+css3动画</a>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="list-last">
						<img src="/thinkphp/Public/Images/20160602-04.png" class="icon-img" alt=""/>
						<div class="icon-text">						
							<h3>Boostrap</h3>
							<a href="<?php echo U('Product/admin');?>">boostrap框架后台页面</p>
						</div>
					</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/thinkphp/Public/Js/Write/index.js"></script>
	<script type="text/javascript">
	// 图片预加载
	$(function(){
		var img = new Image();
 			img.src = "/thinkphp/Public/Images/logo_05.png";
 			img.onload = function() {
				$('.logo').attr('src',this.src);
			}
	});	
	</script>
</body>
</html>