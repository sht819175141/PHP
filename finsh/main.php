<?php
	header("content-type:text/html;charset=utf-8");
	@mysql_connect("localhost","root","123456789") or die("连接失败");
	mysql_select_db("admin");
	mysql_query("set names utf8");
	echo "111";
	//点击登录，查询账号密码
	if(isset($_GET["user"]) ){
		$name=$_GET["user"];
		$pwd=$_GET["pwd"];
		echo "1111";
		$rs="select * from user where userName='{$name}' and uPwd='{$pwd}'";
		$sql=mysql_query($rs);		
		if(mysql_num_rows($sql)){
			echo "ok";
		}else{
			echo "失败";
		}

		if($(this).data-id="")
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>

	<form action="main.php" method="get">
		<label for=""></label><input type="text" name="user" id="user"/><br />
		<label for=""></label><input type="password" name="pwd" id="pwd"/><br />
		<input type="submit" name="sub" id="sub"/>
	</form>

	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/main.js"></script>
	<script>
		$("#sub").on("click",function(){
			if($("#user").val()=="" || $("#pwd").val()==""){
				alert("账号密码不能为空")
				return false;
			}
		})	
		
	</script>
</body>
</html>