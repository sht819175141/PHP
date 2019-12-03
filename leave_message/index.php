<?php 
	header("content-type:text/html;charset='utf-8'");
	@mysql_connect('localhost','root','123456789') or die("连接失败");
	mysql_select_db('1501d');
	mysql_query('set names utf8');
	

	//接收数据
	if(isset($_GET['content'])){
		$user=$_GET['title'];
		$area=$_GET['content'];
		$imgSrc=$_GET['src'];
		$date=$_GET['time'];
		//echo $user.','.$area.','.$imgSrc.','.$date;#判断值是否接收成功;
		if(!empty($user)){
			//插入服务器
			$sql="insert into comment(title,content,src,time) values('{$user}','{$area}','{$imgSrc}','{$date}')";
			mysql_query($sql);
			echo mysql_affected_rows();
			
		}else{
			$sqlR="delete from comment where content='{$area}'";
			mysql_query($sqlR);
			echo mysql_affected_rows();
			
		}
	}else{
			//查询
	
			$all=mysql_query('select * from comment');
			
			while($a=mysql_fetch_assoc($all)){
				$arr[]=$a;
			}
			echo json_encode($arr);
			//echo 1;
	}
		//关闭
		mysql_close();
?>