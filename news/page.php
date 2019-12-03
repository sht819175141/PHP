<?php
	/*分页显示新闻列表*/
	$sql1="select * from news";//查询全部
	$rs1=mysql_query($sql1);
	$size=6;//每页显示行数
	//计算页数=总行数/每页显示行数
	$pages=ceil(mysql_num_rows($rs1)/$size);//总页数
	//echo $pages;
	//判断地址栏中有没有page参数，如果有把它作为当前页
	if(isset($_GET['page'])){
		$curPage=$_GET['page'];//当前页码=获取地址栏中的page
	}else{
		$curPage=1;//当前页码为1
	}
	
	$start=($curPage-1)*$size;//起始行号
	$sql2="select * from news limit {$start},{$size}";//分页查询
	$rs2=mysql_query($sql2);
	$len=mysql_num_rows($rs2);//获取结果集的长度
	//在页面中显示列表
	for($i=0;$i<$len;$i++){
		$arr=mysql_fetch_assoc($rs2);//转换为数组集
		//print_r($arr);
		echo "<li>
				<span>{$arr['Time']}</span>
				<a href='#'>{$arr['title']}</a>
			 </li>";
	}
	//在页面中显示分页按钮
	$str="<div class='page'>共{$pages}页&nbsp;({$curPage}/{$pages})&nbsp;";
	for($p=1;$p<=$pages;$p++){
		//找到当前页
		if($p==$curPage){
			$str.="<a href='###' class='on'>$p</a>";
		}else{
			$str.="<a href='index.php?page=$p'>$p</a>"; 
		}
		
	}
	$str.="</div>"; 
?>