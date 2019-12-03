<?php 
    header('content-type:text/html;charset=utf-8');
    @mysql_connect('localhost','root','123456789') or die("连接失败");
    mysql_select_db('news');
    mysql_query('set names utf8');
    
    if (isset($_POST['page'])){
    	$curpage=$_POST['page'];
    }else{
    	$curpage=1;
    }
    
    $size=5;
    $ss=mysql_query('select * from articleList');
    
    $len=mysql_num_rows($ss);

    $pages=ceil($len/$size);
    
    $start=($curpage-1)*$size;

    $rs=mysql_query('select * from articleList limit '.$start.','.$size);
    
    
    for ($i=0;$i<$size;$i++) { 
    	$arr1[]=mysql_fetch_assoc($rs);
    }

    $arr=array($pages,$arr1);

    echo json_encode($arr);
?>