var module = (function($) {
	//滑入滑出
	var move = function() {
		$("#pic li").click(function() {
			$(this).addClass("libg").siblings().removeClass("libg");
		})
		$("#cont").on("mouseenter", ".past", function() {
			$(this).addClass("mark").siblings().removeClass("mark");
			$(this).find("a").show();
		})
		$("#cont").on("mouseleave", ".past", function() {
			$(this).removeClass("mark");
			$(this).find("a").hide();
		})
	};
	var len = function() {
			len = $(".textarea").find("span").text();
			$("#textarea").keyup(function() {
				size = $(this).val().length;
				num = len - size;
				$(".textarea").find("span").text(num);
			})
		}
		//读取数据
	var gain = function() {
			$.get("index1.php",function(data) {
				var data = JSON.parse(data);
				var html="";
				$("#cont").html("");
				for(var i = 0; i < data.length; i++) {
					html+= "<div class='past'>"+"<dl>" +"<dt><img src=" + data[i]['src'] + "></dt>" +"<dd><p>" + data[i]['name'] + "：</p><i>" + data[i]['cont'] + "</i><br /><span>" + data[i]['time'] + "</span></dd>"
					+"</dl>" +"<a href='javascript:;;' onclick='return del(" + data[i]['id'] + ")'>删除</a>"
					+
					"</div>";	
				}
				$(html).prependTo($("#cont"));
			});
			del = function(p) {
				$.post("del.php", {
					id: p
				}, function(data) {
					if(data == 1) {
						gain();
						alert("删除成功")

					} else {
						alert("删除失败");
					}
				})
			};

		}
		//添加数据
	var messages = function() {
		$("#comment").on("click", function() {
			var str = "";
			var src = "";
			var val = $.trim($("#txt").val());
			var tval = $.trim($("#textarea").val());
			if(val == "" ) {
				alert("请输入用户名");
				return false;
			} else {
				if(tval == "") {
					alert("请输入留言内容");
					return false;
				} else {
					var time = new Date();
					var year = time.getFullYear();
					var mon = time.getMonth() + 1;
					var day = time.getDate();
					var hour = time.getHours();
					var min = time.getMinutes();
					str = year + "年" + mon + "月" + day + "日"+" " + hour + ":" + min;
					$.each($("#pic li"), function(){
						if($(this).hasClass("libg")){
							src = $(this).find("img").attr("src")
						}
					});
					$.post(
						"add.php",

					{
						name: val,
						cont: tval,
						timer: str,
						src: src
					}, 
					function(data) {
						if(data == 1) {
							gain();
							$("#txt").val("");
							$("#textarea").val("");
						} else {
							alert("留言失败");
						}
					})
				}
			}
		})
	};
	return {
		one: function() {
			move();
			gain();
			messages();
			len();
		}
	}
})(jQuery);