<?php if (!defined('THINK_PATH')) exit();?><head>
	<title><?php echo ($title); ?></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<link rel="stylesheet" href='/Public/bootstrap/css/bootstrap.css'>
	<script src='/Public/jquery/jquery.min.js'></script>
	<script src='/Public/bootstrap/js/bootstrap.min.js'></script>
	
	<!--
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
</head>

<div id="top">
	<p><?php echo ($title); ?></p>
</div>
<div id="main" style="text-align:center;">
	<table class="table table-striped table-bordered">
	<form action="/index.php/Home/Index/save" method="post" enctype="multipart/form-data">
		<thead>
			<tr class="active">
				<td>基本信息表</td>
			</tr>
		</thead>
		<tbody>
			<tr class="success">
				<td>姓名</td>
			</tr>
			<tr>
				<td><input type="text" name="name"></td>
			</tr>
			<tr class="warning">
				<td>联系方式</td>
			</tr>
			<tr>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr class="danger">
				<td>照片</td>
			</tr>
			<tr>
				<td><input type="file" name="file"></td>
			</tr>
			<tr class="success">
				<td><input type="submit" value="提交"></td>
			</tr>
		</tbody>
	</form>
	</table>
</div>
<div id="foot">
	<p>版权个人所有</p>
</div>
<body>
<script>
	
</script>
</body>