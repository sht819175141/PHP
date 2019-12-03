<?php
	if(isset($_GET["cb"])){
		$cb=$_GET["cb"];
	}
	$json=file_get_contents("city.json");
	echo "$cb(".$json.")";
?>