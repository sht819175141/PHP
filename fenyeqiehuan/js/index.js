$(function(){
	var ind=1

	function getDon(n){
		$.post("index.php",{"page":n},function(json){
			if($('#btn').children().length==0){ 
				
			btn(json[0],n);}

			mian(json[1]);
			
		},"json")

		w=$("#btn").find("a").outerWidth(true);
		len=$('#btn a').length;
	}
	getDon(1)

	function btn(pages,n){
		var str="";	
		for(var i=1;i<=pages;i++){
			if(n==i){
				str+="<a href='javascript:;' class='bg'>"+i+"</a>";
			}else{
				str+="<a href='javascript:;'>"+i+"</a>";
			}
		}
		$("#btn").html(str);
	}

	function mian(arr){
		var str1="";
		$.each(arr,function(i,val){
			str1+="<li>"+val.value+"</li>"
		})
		$("#list").html(str1);
	}

	$('#btn').on('click','a',function(){
       	var curpage=$(this).text();
       	
        $(this).addClass('bg').siblings().removeClass('bg');

        if(curpage>3 && curpage%2==0 && curpage<len-1){	
			var go=-(curpage-2)*w;
			var back=-(curpage-4)*w;
			var ml=parseInt($("#btn").css("margin-left"));
			if(ml!=go){
				if(curpage==len-2){
					$("#btn").stop().animate({"margin-left":-(curpage-3)*w})
				}else{
					$("#btn").stop().animate({"margin-left":-(curpage-2)*w})
				}
			}else{
				$("#btn").stop().animate({"margin-left":-(curpage-4)*w})
			}
        }else if(curpage<3){
			$("#btn").stop().animate({"margin-left":0})
		}else if(curpage>len-2){
			$("#btn").stop().animate({"margin-left":-(len-5)*w})
		}else{
			$("#btn").stop().animate({"margin-left":-(curpage-3)*w})
		}

		getDon(curpage);
	})

	$('#right').on('click',function(){
	    var btns=$("#btn").find("a");
	    var nth=$(".bg").text()*1;
	    if(nth==btns.length) return false;
	    btns.eq(nth).trigger("click");
	})
	 //点击左键
	$('#left').on('click',function(){
	   	var btns=$("#btn").find("a");
	    var nth=$(".bg").text()*1;
	    if(nth==1) return false;
	    btns.eq(nth-2).trigger("click");
	})
})
