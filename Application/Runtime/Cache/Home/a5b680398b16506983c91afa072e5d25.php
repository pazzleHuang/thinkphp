<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>作品首页</title>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/CSS/bootstrap.min.css">
<style type="text/css">	
	body { background-color:#6AE2BC;  }
	* { margin: 0; padding: 0; }
	#box { position: relative; top: 50px; }
	.pic {  padding: 5px 5px 10px 5px; width:230px;  float: left; }
	.caption { padding: 10px; background-color: #fff; border: 1px solid #ddd;  }
	.caption img { width: 100%; border-radius: 2px; }

</style>
</head>
<body>
<!-- nav -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- 响应式导航 -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">首页</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../Index/index.html">南瓜鱼</a>
    </div>
    <!-- navbar -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="product.html">首页</a></li>
        <li class="active"><a href="water.html">瀑布流图片</a></li>
        <li><a href="html5.html">HTML5动画</a></li>
        <li><a href="admin.html">后台管理</a></li>
        <li><a href="#">关于</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="../Login/login.html">登录</a></li>
      	<li><a href="../Login/register.html">注册</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
	<div class="container">
	<div id="box">
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/001.jpg">
	     		<span>label标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/002.jpg">
	     		<span>pic label标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/003.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/004.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/005.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/006.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/007.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/015.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/008.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/009.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/010.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/011.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/012.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/013.jpg">
	     		<span>标题</span>
	     		<p>...</p>	     		
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/014.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
		<div class="pic">
			<div class="caption">
				<img src="/thinkphp/Public/Images/pic/015.jpg">
	     		<span>标题</span>
	     		<p>...</p>
	     	</div>
		</div>
	</div> <!--box-->
</div>
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/Write/waterpull.js"></script>
</body>
</html>