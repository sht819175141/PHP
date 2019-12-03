<?php
	header("content-type:text/html;charset='utf-8'");
	require_once("smarty/Smarty.class.php");
	$smarty=new Smarty();
	$smarty->left_delimiter="<!--{";
	$smarty->right_delimiter="}-->";

	$arr=array();
	$arr[0]=array('0'=>'姓名','1'=>'年龄');
	$arr[1]=array('0'=>'张三','1'=>22);	
	$arr[2]=array('0'=>'李四','1'=>23);	
	$arr[3]=array('0'=>'张三','1'=>24);	

	$smarty->assign("arr",$arr);
	$smarty->display("zhoukaoyi.html");
?>