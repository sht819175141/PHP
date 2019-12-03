function sort(){
	btn.onclick=function(){
		var btn=document.getElementById('btn');
		var user=document.myform.user.value;
		var pwd=document.myform.pwd.value;
		if(user=="" || pwd==""){
			alert("请输入用户名或密码");
			return false;
		}else{
			//请求Ajax，解决兼容问题
			if(window.XMLHttprequest){
				var xhr=new XMLHttprequest();
			}else{
				var xhr=new ActiveXObject("Microsoft",XMLHTTP)
			}

			xht.open("post","dian.php",true)
			xhr.onreadystatechange=function(){
				if(xhr.readystate==4){ //判断请求是否完成
					if(xhr.status>=200 || xhr.status<300){
						alert("请求成功");
						var result=xhr.responseText;
					}else{
						alert("请求失败");
						return false;
					}
				}
			}

			}
		}
	}
}
sort();	
