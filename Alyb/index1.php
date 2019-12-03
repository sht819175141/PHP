<?php
	//like 模糊查询
	//order by cj desc || order by cj asc 排序 
	//$sel="select xh,xm,cj from student where xm like '%$kw%' order by cj desc";
	//$sel="select xh,xm,cj from student where xm like '%$kw%' order by cj asc";
	@mysql_connect("localhost","root","123") or die("连接失败");
	@mysql_select_db("student") or die("选择数据库失败");
	mysql_query("set names utf8");
	
	$a="select * from lyb order by id desc";
	$re=mysql_query($a);
	$arr=array();
	while($row=mysql_fetch_array($re)){
		$arr[]=$row;
	}
	echo json_encode($arr);
?>