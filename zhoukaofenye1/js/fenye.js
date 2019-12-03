$(function(){ 
	var ind=1;
	function getDon(n){
		$.post('fenye.php',{'page':n},function(json){
			if ($('#a').children().length==0){btn(json[0],n);}
			lian(json[1]);

		},'json')

		w=$("#a").find("a").outerWidth(true);
		len=$('#a a').length;
    }
    getDon(1);

	function btn(num,n){
		var str='';				
		for (var i=1;i<=num;i++){
			if (i==n){
				str+='<a href="javascript:;" class="on">'+i+'</a>';
			}else{				
				str+='<a href="javascript:;">'+i+'</a>';
			}
		}		
		$('#a').html(str);
	}
    
	function lian(obj){
		 var str1='';
         $.each(obj,function(i,val){
            str1+='<li>'+val.nTtitle+'</li>';
         })
         $('#list').html(str1)
	}

	$('#a').on('click','a',function(){
		//当前点击的内容
       	 var curpage=$(this).text();
       	 //点击过后加样式
        $(this).addClass('on').siblings().removeClass('on'); 
       //判断点击的内容
        if(curpage>3 && curpage%2==0 && curpage<len-1){	
        	//点击以后向左移动的距离
			var go=-(curpage-2)*w;
			//点击以后，向右，返回的距离
			var back=-(curpage-4)*w;
			var ml=parseInt($("#a").css("margin-left"));
			if(ml!=go){
				if(curpage==len-2){
					$("#a").stop().animate({"margin-left":-(curpage-3)*w})
				}else{
					$("#a").stop().animate({"margin-left":-(curpage-2)*w})
				}
			}else{
				$("#a").stop().animate({"margin-left":-(curpage-4)*w})
			}
        }else if(curpage<3){
			$("#a").stop().animate({"margin-left":0})
		}else if(curpage>len-2){
			$("#a").stop().animate({"margin-left":-(len-5)*w})
		}
		else{
			$("#a").stop().animate({"margin-left":-(curpage-3)*w})
		}
       	getDon(curpage);
	})

    //点击右键
	   $('#right').on('click',function(){
	    	var btns=$("#a").find("a");
	    	var nth=$(".on").text()*1;
	    	if(nth==btns.length) return false;
	    	btns.eq(nth).trigger("click");
	    })
	    //点击左键
	    $('#left').on('click',function(){
	    	var btns=$("#a").find("a");
	    	var nth=$(".on").text()*1;
	    	if(nth==1) return false;
	    	btns.eq(nth-2).trigger("click");
	    })
   
    function auto(num){
		if(num<=3){
			$("#a").stop().animate({"margin-left":0});
		}else if(num>=len-3){   
			$("#a").stop().animate({"margin-left":-w*(len-5)});
		}else{
			$("#a").stop().animate({"margin-left":-w*(num-2)});
		}
	}
})