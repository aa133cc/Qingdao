<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();
$query="delete from father where id={$_GET['id']}";
echo $query;
execute($link,$query);
if(mysqli_affected_rows($link)==1){
    exit('删除成功！');
}
?>