<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';

    $link=connect();

    $template['title']='管理员添加';
    $template['css']=array('style/publicold.css');
    ?>

<?php include 'inc/header.inc.php'?>
<?php include 'inc/footer.inc.php'?>
<div id="main">
	<div class="title">父版块列表</div>
	<table class="list">
		<tr>
			<th>名称</th>
			<th>创建日期</th>

		</tr>
		<?php
		$query="select * from sfk_manage";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
$url=urlencode("manage_delete.php?id={$data['id']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除管理员 {$data['name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";

$html=<<<A
			<tr>
				<td>{$data['name']}[id:{$data['id']}]</td>
                <td>{$data['create_time']}</td>
				<td>&nbsp;&nbsp;</a>&nbsp;&nbsp;<a href="{$delete_url}">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>

	</table>
</div>