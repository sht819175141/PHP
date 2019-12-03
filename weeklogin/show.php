<?php 
	header("content-type:text/html;charset=utf-8");
	session_start();
	mysql_connect("localhost","root","123456789") or die("连接失败");
    mysql_select_db("cms");
	mysql_query("set names utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<META http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Document</title>
	<style>
		#table{border:1px solid #000;}
		#table td{border:1px solid #000;}
	</style>
</head>
<body>
	<?php
		$rs=mysql_query("select * from category order by no asc");
		
		while($arr=mysql_fetch_assoc($rs)){
			$rsArr[]=$arr;
		}
		if(empty($rsArr)==1){
			exit("暂时没有内容");
		}
	?>
	<table id="table">
		<tr>
			<td>编号</td>
			<td>栏目名称</td>
			<td>子栏目</td>
			<td>操作</td>
		</tr>
		<?php
			foreach($rsArr as $val){
		?>
			<tr>
				<td><?echo $val["no"]?></td>
				<td><?echo $val["name"]?></td>
				<td><?echo $val["child"]?></td>
				<td><a href="del.php?no=<?php echo $val['no'];?>">删除</a></td>
			</tr>
		<?php
			}
		?>
	</table>
</body>
</html>