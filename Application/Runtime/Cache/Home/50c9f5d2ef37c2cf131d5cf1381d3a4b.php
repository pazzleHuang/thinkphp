<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="keywords" content="南瓜鱼 用户登录 hyhning thinkphp框架作品" />
<meta name="description" content="南瓜鱼是个人创作网页" />
<title>用户登录</title>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/CSS/bootstrap.min.css">
<link rel="stylesheet" href="/thinkphp/Public/Css/login.css" />
<!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<img src="/thinkphp/Public/Images/loginbg11.png" class="nan-img">
				<div class="nan-main">
				  <!-- form start-->
				  <form class="form-group col-xs-8 col-xs-offset-2 nan-form">
					<div class="input-group">
					  <span class="input-group-addon">
					  	<span class="glyphicon glyphicon-user"></span>
					  </span>
					  <input type="text" class="form-control" name="username" placeholder="用户名">
					</div>
					
					<div class="input-group">
					  <span class="input-group-addon">
					  	<span class="glyphicon glyphicon-lock"></span>
					  	</span>
					  <input type="password" class="form-control" name="passwd" placeholder="密码">
					</div>
					
					<div class="input-group col-xs-12 ">
						<button type="button" class="btn btn-primary btn-block btn-lg" id="nan-login">登 录</button>
					</div>
				  </form>
				  <!-- form end	 -->
				  <div class="col-xs-8 col-xs-offset-2 nan-link">
				  	<a href="../Product/product.html"><span class="glyphicon glyphicon-share-alt"></span>返回首页</a>
				  	<a href="register.html" class="pull-right">立即注册 <span class="glyphicon glyphicon-arrow-right"></span></a>	
				  </div>		
				</div> <!-- nan-main -->
			</div>
			<footer class="col-md-6 col-md-offset-3">
				<p>by pazzleHuang</p>
			</footer>
		</div>  <!-- row -->
	</div>	<!-- container -->
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/Write/login.js"></script>
</body>
</html>