<?php 
	header("content-type:text/html;charset='utf-8'");
	@mysql_connect("localhost","root","root") or die("连接错误");
	mysql_select_db("test");
	mysql_query("set names 'utf8'");

	if(isset($_POST["btn"])){
		$user=$_POST["user"];
		$pwd=$_POST["pwd"];

		$rs=mysql_query("select * from login where user='".$user."' and pwd='".$pwd."'");
		if(mysql_num_rows($rs)){
			echo "<script>
				location.href='index.html';
			</script>";
		}else{
			echo "<script>
				alert('您的帐号或者密码有误，请重新输入')
			</script>";
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="" method="post" name="myform">
		<label for="">账号：</label><input type="text" name="user"/><br />
		<label for="">密码：</label><input type="password" name="pwd"/><br />
		<button id="btn" name="btn">登陆</button>
	</form>
	
</body>
</html>