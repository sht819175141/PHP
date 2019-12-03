<?php
	header("content-type:text/html;charset='utf-8'");

	$user=$_POST['user'];
	$pwd=$_POST["pwd"];
	//连接数据库
	@mysql_connect("localhost","root","shanghaitao5210") or die("连接失败");
	mysql_select_db("student");
	mysql_query("set names 'utf8'");
	
	$rs=mysql_query("select * from submit where user='{$user}' and pwd='{$pwd}'");
	echo mysql_num_rows($rs);
?>