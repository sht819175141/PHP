<?php
	header("content-type:text/html;charset=utf-8");
	mysql_connect("localhost","root","root") or die("连接出错");
	mysql_select_db("test");
	mysql_query("set names utf8");

	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<?php
		if(empty($_SESSION["user"])){
		echo '<form action="">
				<label for="">账号：</label><input type="text" name="user" id="user"/><br />
				<label for="">密码：</label><input type="password" name="pwd" id="pwd"/><br />
				<input type="radio" id="btn" name="btn" /><label for="btn">记住密码！</label><br />
				<input type="button" value="登陆" name="btn1" id="btn1"/>
			 </form>';
		}else{
			echo $$_SESSION["user"]."请登录账号密码！！";
		}
	?>
	<?php
		if(isset($_POST["btn1"])){
			$user=$_POTS["user"];
			$pwd=$_POST["pwd"];

			if(empty($user)){
				echo '<script>document.getElementById("user").focus()</script>)';
				exit("请输入用户名");

			}
		}
	?>
</body>
</html>