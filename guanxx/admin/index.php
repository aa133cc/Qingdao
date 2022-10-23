<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();



$template['title']='首页';
$template['css']=array('style/public1.css','style/index.css');
?>

<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
<link rel="stylesheet" type="text/css" href="style/index.css" />
</head>
<body>
	<div class="header_wrap">
		<div id="header" class="auto">
			<div class="logo">sifangku</div>
			<div class="nav">
				<a class="hover">首页</a>
			</div>
			<div class="serarch">
				<form>
					<input class="keyword" type="text" name="keyword" placeholder="搜索其实很简单" />
					<input class="submit" type="submit" name="submit" value="" />
				</form>
			</div>
			<div class="login">
				<a>登录</a>&nbsp;
				<a>注册</a>
			</div>
		</div>
	</div>
	<div style="margin-top:55px;"></div>
	<div id="hot" class="auto">
		<div class="title">热门动态</div>
		<ul class="newlist">
			<!-- 20条 -->
			<li><a href="#">[库队]</a> <a href="#">私房库实战项目录制中...</a></li>

		</ul>
		<div style="clear:both;"></div>
		<?php
$query="select * from sfk_father_module order by sort desc";
$result_father=execute($link, $query);
while($data_father=mysqli_fetch_assoc($result_father)){
       $html=<<<A
<div class="box auto">
		<div class="title">
		{$data_father['module_name']}
		</div>
		<div class="classList">
			<div style="padding:10px 0;">暂无子版块...</div>
		</div>
	</div>


A;
 echo $html;
}
?>


	</div>
	<div class="box auto">
		<div class="title">
			国际足球
		</div>
		<div class="classList">
			<div style="padding:10px 0;">暂无子版块...</div>
		</div>
	</div>
	<div class="box auto">
		<div class="title">
			CBA
		</div>
		<div class="classList">
			<div style="padding:10px 0;">暂无子版块...</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<div class="box auto">
		<div class="title">
			NBA
		</div>
		<div class="classList">
			<div class="childBox new">
				<h2><a href="#">私队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div class="childBox old">
				<h2><a href="#">房队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div class="childBox lock">
				<h2><a href="#">库队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div class="childBox new">
				<h2><a href="#">私房库队</a> <span>(今日38)</span></h2>
				帖子：1939539<br />
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<div id="footer" class="auto">
		<div class="bottom">
			<a>私房库</a>
		</div>
		<div class="copyright">Powered by sifangku ©2015 sifangku.com</div>
	</div>
</body>
</html>