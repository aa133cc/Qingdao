<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(isset($_POST['submit'])){
    $link=connect();
    //验证用户填写的信息

    include 'inc/check_manage.inc.php';
    $query="insert into sfk_manage(name,pw,create_time) values('{$_POST['name']}',({$_POST['pw']}),now() )";
    execute($link,$query);
    if(mysqli_affected_rows($link)==1){
        skip('manage.php','ok','恭喜你，添加成功！');
    }else{
        skip('manage.php','error','对不起，添加失败，请重试！');
    }
}

$template['title']='管理员添加';
$template['css']=array('style/publicold.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
	<div class="title" style="margin-bottom:20px;">添加父版块</div>
	<form method="post">
		<table class="au">
			<tr>
				<td>版块名称</td>
				<td><input name="name" type="text" /></td>
				<td>
				名称不得为空，最大不得超过66个字符
				</td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input name="pw"  type="text" /></td>
				<td>
					填写一个数字即可
				</td>
			</tr>
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>
<?php include 'inc/footer.inc.php'?>
