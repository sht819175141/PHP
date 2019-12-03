<?php header("content-type:text/html;charset='utf-8'");
	@mysql_connect("localhost","root","shanghaitao5210") or die("链接失败");
	mysql_select_db("test");
	mysql_query("set names 'utf8'");
?>