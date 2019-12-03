<?php
	header("content-type:text/html;charset='utf-8'");
	if(isset($_POST["btn"])){
		$name=$_POST["user"];
		$sex=$_POST["sex"];
		$sge=$_POST["age"];
		$god=$_POST["god"];
		if($name==!""){
			if($sex=="man"){
				echo "尊降的{$name}先生，您好";
			}else{
				echo "尊降的{$name}女士，您好";
			}

			foreach($god as $key){
				$god.=$key.",";
			}

			if($age=="0"){
				echo "欢迎您参加小朋友{$god}运动会";
			}else if($age=="1"){
				echo "欢迎您参加青年人{$god}运动会";
			}else if($age=="2"){
				echo "欢迎您参加中年人{$god}运动会，请注意身体健康";
			}else if($age=="3"){
				echo "欢迎您参加老年人{$god}运动会，请注意身体健康";
			}
		}else{
			echo "请输入您的姓名！！！";
		}

		/*$(".god").each(function(){
			$god+=$("input[type="checkbox"]:checked");
			echo $god;
		})*/

			/*$god=$_POST["god"];
			foreach($god as $key){
				echo $value;
			}*/

			/*$check=$_POST["check"];
			foreach ($check as $value) {
				echo "$value ";
			}*/

			//<input type="checkbox" name="check[]" value="排球">排球		
	}
?>