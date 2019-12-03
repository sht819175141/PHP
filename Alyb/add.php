<?php
	@mysql_connect("localhost","root","123") or die("连接失败");
	@mysql_select_db("student") or die("选择数据库失败");
	mysql_query("set names utf8");
	if(isset($_POST["name"])){
		$name=$_POST["name"];
		$cont=$_POST["cont"];
		$time=$_POST["timer"];
		$src=$_POST["src"];
		mysql_query("insert into lyb(name,cont,time,src) values('$name','$cont','$time','$src')");
		if(mysql_affected_rows()>0){
			echo 1;
		}else{
			echo 0;
		}
	}
?>