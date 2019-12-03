<?php
	header("content-type:text/html;charset=utf-8");
	@mysql_connect("localhost","root","123456789") or die("连接失败");
	mysql_select_db("1501d");
	mysql_query("set names utf8");

	//mysql_query("insert into news(title,main) values('士大夫了解阿萨德撒','撒地方开始的疯狂上岛咖啡撒地方撒地方稍等')");

	//mysql_query("insert into news(title,main) values('1','2')");
	
	//mysql_query("update news set title='开发稍等付了款大是大非但是' where no=16");
	//mysql_query("delete from news where no like '%4%' ");
	//mysql_query("delete from news where no=20");
	mysql_query("delete * from news limit 30,3");

	echo "<ul>";
		$sql=mysql_query("select * from news");
		for($i=0;$i<mysql_num_rows($sql);$i++){   
			$rs=mysql_fetch_assoc($sql);
			echo '<li style="list-style:none"><b style="color:red">'.$rs["no"].' </b><a href="">'.$rs["title"].'</a><p>'.$rs["main"].'</p><span>'.$rs["time"].'</span></li>';
		}
	echo "</ul>";