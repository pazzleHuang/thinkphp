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
		<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-info box">
  			<div class="panel-heading ">
  				<b> 用户登录</b>
  			</div>
 			<div class="panel-body">
 				
 				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				    	<a href="#" class="pull-right">忘记密码</a>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			
				<hr>
				<a href="../Index/index.html"><span class="glyphicon glyphicon-share-alt"></span> 返回首页</a>
				<a href="register.html" class="nan-log" >还没有帐号？立即注册</a>			
			</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/Write/login.js"></script>
</body>
</html>