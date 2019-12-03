<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<script src="jquery-2.1.1.js"></script>
	<form action="rikao9.288.php" method="post">
		<label for="">账号：</label><input type="text" name="user" vlaue="" id="txt"/>
		<input type="submit" value="登陆" name="sub" id="sub"/>
	</form>
	<script>
	$(function(){
		$("#sub").on("click",function(){
			if($("#txt").val().length>6){
				submit();
			}else{
				return false;
			}
		})
		
	})
	</script>
</body>
</html>