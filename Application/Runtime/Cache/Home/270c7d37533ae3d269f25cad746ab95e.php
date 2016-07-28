<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="keywords" content="南瓜鱼 hyhning 作品首页" />
<meta name="description" content="南瓜鱼是个人创作网页" /><title>作品首页</title>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/CSS/product.css">
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
        <li><a href="../Index/index.html">首页	</a></li>
        <li><a href="water.html">瀑布流图片</a></li>
        <li class="active"><a href="html5.html">HTML5动画</a></li>
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


<div class="box1">
  <div class="yuan" id="yuan0"></div>
  <div class="yuan" id="yuan1"></div>
  <div class="yuan" id="yuan2"></div>
  <div class="yuan" id="yuan3"></div>
  <div class="yuan" id="yuan4"></div>
  <div class="yuan" id="yuan5"></div>
  <div class="yuan1" id="yuan6"></div>
</div>
<!-- <audio controls="controls" autoplay="autoplay"  loop="loop">
  <source src="/thinkphp/Public/Audio/song.mp3" type="audio/mpeg">
    你的浏览器不支持音频播放
</audio> -->
<div class="box2 container">
    <div class="circle">
      <div class="ro"></div>
    </div>
    <div class="circle">
      <div class="ro"></div>
    </div>
    <div class="circle">
      <div class="ro"></div>
    </div>
    <div class="circle">
      <div class="ro"></div>
    </div>
    <div class="circle">
      <div class="ro"></div>
    </div>
</div>
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/bootstrap.min.js"></script>

</body>
</html>