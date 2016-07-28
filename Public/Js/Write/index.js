
// 南瓜鱼图片预加载
	$(function(){
		var img = new Image();
 		img.src = "Public/Images/logo_05.png";
 		img.onload = function() {
			$('.logo').attr('src',this.src);
		}
	});

