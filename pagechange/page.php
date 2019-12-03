<?php
	header("content-type:text/html;charset=utf-8");
	@mysql_connect("localhost","root","123456789") or die("连接失败");
	mysql_select_db("news");
	mysql_query("set names utf8");

	if(isset($_REQUEST["page"])){
	 	$curpage=$_REQUEST["page"];
	}else{
	  	$curpage=1;
	}
	$size=3;

	$rs="select * from articlelist";
	$sql=mysql_query($rs);
	$num=mysql_num_rows($sql);
	$pages=ceil($num/$size);

	$start=($curpage-1)*$size;	
	$rs.=" limit {$start},{$size}";
	$arr=mysql_query($rs);
	
	while($crr=mysql_fetch_assoc($arr)){
		$brr[]=$crr;
	}
	$result=array($pages,$brr);

	echo json_encode($result);

	mysql_close();
?>