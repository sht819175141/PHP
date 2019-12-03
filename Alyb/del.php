<?php
@mysql_connect("localhost","root","123") or die("连接失败");
@mysql_select_db("student") or die("选择数据库失败");
mysql_query("set names utf8");
if(isset($_POST["id"])){
	$id=$_POST["id"];
	mysql_query("delete from lyb where id=$id");
	if(mysql_affected_rows()>0){
		echo 1;
	}else{
		echo 0;
	}
}

?>