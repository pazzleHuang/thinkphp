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
	.pic p { color: #666; }
	.caption { padding: 8px; background-color: #fff; border-bottom: 5px solid #eee;  }
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
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pic">
				<div class="caption">
					<img src="/thinkphp/<?php echo ($vo['src']); ?>" />
		     		<h4><?php echo ($vo['title']); ?></h4>
		     		<p><?php echo ($vo['des']); ?></p>
		     	</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div> <!--box-->
</div>
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Js/Write/waterpull.js"></script>
</body>
</html>