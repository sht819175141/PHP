<?php
	header("content-type:text/html;charset='utf-8'");
	if(isset($_POST["btn"])){
		$user=$_POST["user"];
		$pwd=$_POST["pwd"];
	}
	
	@mysql_connect("localhost","root","shanghaitao5210") or die("链接失败");
	mysql_select_db("test");
	mysql_query("set names 'utf8'");
	mysql_query("select user,pwd from login where user="$user" and pwd="$pwd"")
?>