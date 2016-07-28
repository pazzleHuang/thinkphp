<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>某管理系统-静态页面-没有交互-没有数据</title>
    <link href="/thinkphp/Public/CSS/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>

body,html { padding: 0; margin: 0; height: 100%; }

/*主要部分*/
#demo-main { margin-top: -20px;   }
.demo-content { background-color: #fff; z-index: 1000;  }
.demo-alert .alert-link { font-style: normal; }
.demo-work li { margin-bottom: 10px; }
nav { z-index: 1001; }
#demo-menu { padding: 0; margin:0; overflow: auto; height: 100%; position: fixed; top: 0; left: 0; background-color: #ccc; z-index: 999;}
#demo-menu ul { padding-top: 70px; }
</style>

</head>

<body>

<!-- 导航 -->
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- 响应式导航 -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">首页</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- logo -->
      <a class="navbar-brand" href="#">某管理系统</a>
    </div>

    <!-- 导航-->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">功能 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">信息建立</a></li>
            <li><a href="#">信息查询</a></li>
            <li><a href="#">信息管理</a></li>
            <li class="divider"></li>
            <li><a href="#">设置</a></li>
          </ul>
        </li>
        <li><a href="#">帮助</a></li>
      </ul>
      <!-- 用户登录 -->
      <form class="navbar-form navbar-right" action="">
  		<div class="form-group">
  		  <label class="sr-only" for="exampleInputEmail3">用户名</label>
  		  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="用户名">
  		</div>
  		<div class="form-group">
  		  <label class="sr-only" for="exampleInputPassword3">密码</label>
  		  <input type="password" class="form-control" id="exampleInputPassword3" placeholder="密码">
  		</div>
  		<button type="submit" class="btn btn-default">登录</button>
	</form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="demo-main" class="container-fluid">
	<div class="row">
		<div class="list-group col-md-2 col-sm-2" id="demo-menu">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#" ><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp; 首页</a></li>
				<hr>
           		<li><a href="#"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;信息建立</a></li>
           		<li><a href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;信息查询</a></li>
           		<li><a href="#"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;信息管理</a></li>
           		<hr>
           		<li><a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;设置</a></li>
           		<li><a href="#demo-help">帮助</a></li>
			</ul>

		</div>
		<div class="col-md-10 col-sm-10 col-md-offset-2 col-sm-offset-2 demo-content">
			<h3>管理控制台</h3>
			<hr>
			<!-- 按钮 -->
			<div class="btn-toolbar" role="toolbar">
			  <button type="button" class="btn btn-default">功能1 </button>
			  <button type="button" class="btn btn-primary">功能2 </button>
			  <button type="button" class="btn btn-success">功能3 </button>
			  <button type="button" class="btn btn-info">功能4 </button>
			  <button type="button" class="btn btn-warning">功能5 </button>
			  <button type="button" class="btn btn-danger">功能6 </button>
			</div>
			<hr>

			<div class="row">
				<div class="col-md-6">
					<!-- 最新提醒 -->
					<div class="panel panel-primary demo-alert">
  						<div class="panel-heading">最新提醒</div>
  						<div class="panel-body">
							<div class="alert alert-success" role="alert">
							  <a href="#" class="alert-link"><strong>提示</strong>这个只是静态页面</a>
							</div>
							<div class="alert alert-info" role="alert">
							  <a href="#" class="alert-link"><strong>提示 </strong>没有交互没有从后台连数据！</a>
							</div>
							<div class="alert alert-warning" role="alert">
							  <a href="#" class="alert-link"><strong>提示 </strong>练手的而已</a>
							</div>			 
						</div>
					</div>
					<!-- 最新订单 -->
					<div class="panel panel-primary">
  						<div class="panel-heading">最新订单</div>
  						<div class="panel-body">
							<table class="table table-striped">
    							<thead>
    								<tr>
    									<th>#</th>
    									<th>产品</th>
    									<th>数量</th>
    									<th>总金额</th>
    									<th>业务员</th>
    								</tr>
    							</thead>
    							<tbody>
    								<tr>
    									<td>1</td>
    									<td>小米</td>
    									<td>100</td>
    									<td>700000</td>
    									<td>小李</td>
    								</tr>
    								<tr>
    									<td>2</td>
    									<td>华为</td>
    									<td>80</td>
    									<td>70000</td>
    									<td>小华</td>
    								</tr>
    								<tr>
    									<td>3</td>
    									<td>魅族</td>
    									<td>50</td>
    									<td>50000</td>
    									<td>小吴</td>
    								</tr>
    							</tbody>
 							</table>	 
						</div>
					</div>				
				</div> <!--col-md-6-->
				<!-- 我的任务 -->
				<div class="col-md-6">
					<div class="panel panel-primary demo-work">
  						<div class="panel-heading">我的任务</div>
  						<div class="panel-body">
							<ul class="list-group">
							  <li class="list-group-item list-group-item-info">
							    <span class="badge">42</span>
							    订单审批
							  </li>
							  <li class="list-group-item list-group-item-info">
							    <span class="badge">29</span>
							    收款确认
							  </li>
							  <li class="list-group-item list-group-item-info">
							    <span class="badge">14</span>
							    付款确认
							  </li>
							</ul> 			 
						</div>
					</div>
					<!-- 工程进度 -->
					<div class="panel panel-primary">
  						<div class="panel-heading">工程进度</div>
  						<div class="panel-body">
  							<a class="text-primary">项目1：进度正常进行</a>
							<div class="progress">
  								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80	" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    								<span class="sr-only">80% Complete</span>
  								</div>
							</div>
  							<a class="text-danger">项目2：进度延后</a>
							<div class="progress">
  								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="	50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
    								<span class="sr-only">50% Complete (danger)</span>
 					 			</div>
							</div>
						</div>
					</div>				
				</div>
			</div> <!--row-->
		</div> <!--col-md-10 -->
	</div> <!--row-->

</div> <!--container-fluid-->


<script src="/thinkphp/Public/Js/jquery-1.11.1.min.js"></script>
<script src="/thinkphp/Public/Js/bootstrap.min.js"></script>
</body>
</html>