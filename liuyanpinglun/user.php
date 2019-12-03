<?php
	header("comtenta-type:text/html;charset=utf-8");
	mysql_connect("localhost","root","123456789") or die("连接失败");
	mysql_select_db("1501d");
	mysql_query("set names utf8");

	$rs=mysql_query("select * from admin");
	
?>