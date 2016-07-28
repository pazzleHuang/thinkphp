// 1.不同尺寸n的值不同


$(window).on('load',function(){
	picture();
});


function picture(){
	var $t=$(".pic");
	var w = $t.eq(0).outerWidth();
	// alert(w);
	var w1 = 1.5*w;
	var cols = Math.floor($(window).width()/w); //个数 = 屏幕宽/每个图片的宽
	$('#box').width(w*cols).css('margin','0 auto'); //计算出背景的宽，居中
	if($(window).width() > 1400){
		cols = 5;
	}

	var hArr = []; //定义数组，用于存放图片的高

	var m = 5;

	$t.each(function(index,value){
		var h = $t.eq(index).outerHeight();

		if(index < cols){ 
			hArr[index] = h;
		}else{
			var minH = Math.min.apply(null,hArr); //数组中最小的高
			var minHIndex = $.inArray(minH,hArr); //最小的高的索引值
			$(value).css({
				'position':'absolute',
				'top':minH + 'px',
				'left':minHIndex*w +'px'
			})
			hArr[minHIndex] += $t.eq(index).outerHeight();
		}
		
	})
	// console.log(hArr);
}



