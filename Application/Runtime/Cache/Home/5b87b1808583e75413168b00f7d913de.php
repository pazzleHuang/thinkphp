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
        <li class="active"><a href="#">首页 </a></li>
        <li><a href="water.html">瀑布流图片</a></li>
        <li><a href="html5.html">HTML5动画</a></li>
        <li><a href="admin.html">管理界面展示</a></li>
        <li><a href="#">关于</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../Login/login.html">登录</a></li>
        <li><a href="../Login/register.html">注册</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<!-- main -->
<div class="container col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1" id="nan-main">
  <div class="row">
    <div class="col-md-9 col-sm-8 col-xs-12 nan-img">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner nan-img" role="listbox">
          <div class="item active">
            <img src="/thinkphp/Public/Images/haidi-0.png" alt="...">
            <div class="carousel-caption">
              <a href="#" class="list-group-item active">
                <!-- <h4 class="list-group-item-heading">标题</h4> -->
                <p class="list-group-item-text">第1张图</p>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="/thinkphp/Public/Images/haidi-2.png" alt="...">
            <div class="carousel-caption">
              <a href="#" class="list-group-item active ">
                <!-- <h4 class="list-group-item-heading">标题</h4> -->
                <p class="list-group-item-text">第2张图</p>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="/thinkphp/Public/Images/haidi-4.png" alt="...">
            <div class="carousel-caption">
              <a href="#" class="list-group-item active ">
                <!-- <h4 class="list-group-item-heading">标题</h4> -->
                <p class="list-group-item-text">第3张图</p>
              </a>
            </div>
          </div>
        </div> <!--carousel-inner-->
      </div>

    </div>
    <div class="list-group col-md-3 nan-title">
      <div class="thumbnail">
      <img src="/thinkphp/Public/Images/day0.jpg" alt="...">
      <div class="caption">
        <h3>每天推荐</h3>
        <p>花瓣网,帮你采集,发现网络上你喜欢的事物.你可以用它收集灵感,保存有用的素材,计划旅行,晒晒自己想要的东西</p>
        <p>
          <a href="http://huaban.com/" class="btn btn-info" role="button">了解更多</a> 
          <!-- <a href="#" class="btn btn-default" role="button">Button</a></p> -->
      </div>
    </div>
    </div>
  </div> <!--row-->
</div>

<footer class="container col-md-12">
  <p>by hyhning@163.com</p>
</footer>
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/bootstrap.min.js"></script>

</body>
</html>