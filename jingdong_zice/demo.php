<?php
	header("content-type:text/html;charset=utf-8");
	session_start();
	@mysql_connect("localhost","root","123456789") or die("连接失败");
	mysql_select_db("");
	mysql_query("set names utf8");

	if(isset($_GET["sub"])){
		$name=$_GET["user"];
		$pwd=$_GET["pwd"];
	}
	//判断用户名是否为空
	if(empty($name)){
		//显示提示信息，并让该文本框获取焦点
		echo "<script>document.getElementById('name').focus();</script>";
		exit("请输入用户名");
	}
	//判断密码是否为空
	if(empty($pwd)){
		//显示提示信息，并让该文本框获取焦点
		echo "<script>document.getElementById('pwd').focus();</script>";
		exit("请输入密码");
	}
	//根据用户名及密码去数据库查找
	$sql="select * from userpwd where user='".$name."' and pwd='".$pwd."'";
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)){
		echo "<script>document.getElementById('form').className='none';</script>";
		$_SESSION['user']=$name;
		//echo $_SESSION['user']."欢迎您！";
		localhost.hraf="success.html";
	}else{
		echo "用户名或密码有误";
	}
?>