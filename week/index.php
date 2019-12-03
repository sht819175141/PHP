<?php
	date_default_timezone_set('UTC'); 
	function create(){
		$y=date(Y); //年
		$m=date(m); //月 
		$d=date(d); //日
		$t=date(t); //当前月的总天数
		
		$timer=mktime(0,0,0,$m,1,$y);
		$days=date(w,$timer);//每个月的第一天是星期几
	
		$rows=ceil(($t+$days)/7);//总行数

		$str="<table>";
		$week=array("日","一","二","三","四","五","六");
			//创建头部
			$str.="<thead>";
				foreach($week as $val){
					$str.="<th>$val</th>";
				}
			$str.="</thead>";
			//创建主体;
			$str.="<tbody>";

				for($i=0;$i<$rows;$i++){
					$str.="<tr>";
						for($d=1;$d<=7;$d++){
							$txt=$i*7+$d-$days;
							if($txt<1){
								$str.="<td>&nbsp;</td>";
							}else{
								if($txt>$t){
									$str.="<td>&nbsp;</td>";
								}else{
									if($d==$txt){
										$str.="<td class='bg'>$txt</td>";
									}else{
										$str.="<td>$txt</td>";	
									}	
								}	
							}
						}
					$str.="</tr>";
				} 
			$str.="</tbody>";
		$str.="</table>";
		return $str;
	}
?>