<?php
	header("content-type:text/html;charset='utf-8'");
	$name=$_POST["user"];
	if(isset($_POST["sub"])){
		if($name==!""){
			echo "恭喜你跳转成功";
		}
	}
	
?>