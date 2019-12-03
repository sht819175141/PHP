<?php
	header("content-type:text/html;charset=utf-8");
	@mysql_connect("localhost","root","root") or die("连接错误");
	mysql_select_db("test");
	mysql_query("set names utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP模糊查询航班</title>
	<link rel="stylesheet" href="css/ticket.css">
</head>
<body>
	<div>
		<h2>PHP模糊查询航班</h2>
		<form action="ticket.php" method="get">
			<label for="keywords">航班:</label>
			<input type="text" id="keywords" name="kw" placeholder="请输入查询的内容">
			<input type="submit" value="查询" name="sub">
		</form>
	</div>
	<?php
		//执行查询
		if(isset($_GET["sub"])){
			$kw=trim($_GET["kw"]);//获取关键字
			if(!$kw){
				exit("请输入查询的内容");
			}
			//根据关键字模糊查询
			$rs=mysql_query("select * from ticket where hb like '%{$kw}%'");
			
			while($rsArr=mysql_fetch_assoc($rs)){
				$rsArr["hb"]=str_replace($kw,"<b style='color:red'>".$kw."</b>",$rsArr["hb"]);
				$arr[]=$rsArr;
			}
			//将查询的结果显示到页面中
			$str='<table><tr><th>航班号</th><th>票价</th><th>余票</th></tr>';
			foreach($arr as $val){
				$str.="<tr><td>".$val["hb"]."</td><td>".$val["price"]."</td><td>".($val["total"]-$val["buy"])."</td></tr>";
			}
			$str.="</table>";
			echo $str;	
		}
	?>
</body>
</html>