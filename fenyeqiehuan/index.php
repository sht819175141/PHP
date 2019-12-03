<?php
	header("content-type:text/html;charset=utf-8");
	//链接数据库
	@mysql_connect("localhost","root","root") or die("连接失败");
	mysql_select_db("test");
	mysql_query("set names utf8");

	//获取当前页数
	if(isset($_POST["page"])){
		$curpage=$_POST["page"];
	}else{
		$curpage=1;
	}

	$size=3;

	$rs="select * from news";
	$sql=mysql_query($rs);
	$nums=mysql_num_rows($sql);
	$pages=ceil($nums/$size);

	$start=($curpage-1)*$size;

	$rs.=" limit {$start},{$size}";

	$rs2=mysql_query($rs);
	$fen=mysql_num_rows($rs2);

	for($i=0;$i<$fen;$i++){
		$arr[]=mysql_fetch_assoc($rs2);
	}
	
	$result=array($pages,$arr);
	echo json_encode($result);
	//关闭数据库
	mysql_close()
?>