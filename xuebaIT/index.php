<?php
	header("content-type:text/html;charset=utf-8");
	mysql_connect("localhost","root","root");
	mysql_select_db("test");
	mysql_query("set names utf8");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<table action="">
		<thead><tr>网站名称</tr><tr>网址</tr><tr>创建时间</tr></thead>
		<tbody> 
		<?php
			$rs="select * from website";
			$rsa=mysql_query($rs);
			for($i=0;$i<mysql_num_rows($rsa);$i++){
				$arr[]=mysql_fetch_assoc($rsa);
			}
			foreach ($arr as $val){	
		?>
		<tr>
			<td><?php echo $val["user"]; ?></td>
			<td><?php echo $val["src"]; ?></td>
			<td><?php  echo $val["time"]; ?></td>
		</tr>
		
		<?php } ;?>
			</tbody>
		</table>
		<form action="">
			<input type="text" /><input type="button" value="搜索"/>
		</form>
</body>
</html>		

		
		
		
