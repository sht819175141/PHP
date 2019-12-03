$(function(){
	//页面刷新时填充评论资料
	function addPage(){
		$.get('index.php',function(data){
			var data=eval("("+data+")");
			addLI(data)
		})
	}
	//判断只运行一次
	if(!$('.list').find('li').length){
		//alert('hello');
		addPage();
	}
	
	//添加li
	function addLI(arr){
		$.each(arr,function(i,obj){
			createLi(obj)
		})
	}
	//创建Li
	function createLi(object){
		//console.log(object)
		var str=object.time,
		  	reg=/^(\d{4})(-|\/)(\d{1,2})\2(\d{1,2})( (\d{1,2}):(\d{1,2}):(\d{1,2}))?$/,
			arr=str.match(reg);
		
		var str='<li>'+
					'<div class="userPic"><img src="'+object.src+'" /></div>'+
	                '<div class="content">'+
	                    '<div class="userName"><a href="javascript:;">'+object.title+'</a>:</div>'+
	                    '<div class="msgInfo">'+object.content+'</div>'+
	                    '<div class="times"><span>'+arr[3]+'月'+arr[4]+'日 '+arr[6]+':'+arr[7]+'</span><a class="del" href="javascript:;">删除</a></div>'+
	                '</div>'+
	             '</li>';
	     $(".list>ul").prepend($(str)); 
	}

	//显示内容
	function inti(){
		//图片滑动点击
		headImg()

		//文本域判断
		conBox()

		//提交按钮
		sendBtn()

		//滑过li时显示删除按钮
		moveC()

	}
	inti();

	//图片滑动点击
		function headImg(){
			var imgs=$('#face').find('img');
				ind=0;	//初始样式图片的下标
			imgs.hover(function(){
				$(this).addClass('current');
			},function(){
				if($(this).index()!=ind){
					$(this).removeClass('current');
				}
			}).click(function(){
				$(this).addClass('current').siblings().removeClass("current");
				ind=$(this).index();
			})
		}

	//文本域判断
		function conBox(){
			var len=$(".maxNum").text();
	
			$('#conBox').on("keyup",function(){
				var val=$.trim($(this).val()).length,
					v=len-val;

				if(v>=0){
					$('.countTxt').html("还能输入")
					$(".maxNum").text(v).css('color','');
				}else if(v<0){
					$('.countTxt').html("已超出")
					$(".maxNum").text(Math.abs(v)).css('color','red');
				}	
			})
		}

	//提交按钮
		function sendBtn(){
			//判断时间	
				function addZero(val) {
					return val < 10 ? "0" + val : val;
				}	

			$('#sendBtn').on('click',function(){
				var imgSrc=$('.current').attr('src'),
				user=$.trim($('#userName').val()),
				area=$.trim($('#conBox').val()),
				y=new Date().getFullYear(),
				m=addZero(new Date().getMonth()+1),//几月
				d=addZero(new Date().getDate()), //几号
				h=addZero(new Date().getHours()),//小时
				n=addZero(new Date().getMinutes()),//分钟
				s=addZero(new Date().getSeconds()),//秒
				date=y+'-'+m+'-'+d+' '+h+":"+n+':'+s,
				value=null;
				//alert(date);
				
				//判断标题框
				if(user=="" || area==""){
					value="请输入内容";
				}else if(user.length<4 || user.length>12){
					value='长度为4-12';
				}	
				if(value){
					alert(value);
					$('#userName').focus();
					return false;
				}

				var obj={"title":user,'content':area,'src':imgSrc,"time":date};
				//console.log(obj)
				//提交给服务器
				$.ajax({
					"type":"get",
					'url':'index.php',
					'data':obj,
					'success':function(data){
						//console.log(data);
						if(data==="1"){
							render(obj)
						}
					},
					'error':function(){
						alert('失败');
					}
				})

				//渲染页面
				function render(o){
					createLi(o)      
				}

			})
		}


	//滑过评论内容
		function moveC(){
			$('.list').on('mousemove','li',function(){
				$(this).find('.del').css('display','block');
				$(this).css('background','#f5f5f5')
			}).on('mouseout','li',function(){
				$(this).find('.del').css('display','none');
				$(this).css('background','#fff')
			}).on('click','a',function(){
				var tet=$(this).parent().prev().text();
				$.get('index.php',{content:tet},function(data){
					console.log(data)
				})
			})
		}	
})