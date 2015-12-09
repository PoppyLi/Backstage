$(function(){
	//表格行，鼠标放上去变色
	$(".tr:odd").css("background", "#FFFCEA");
	$(".tr:odd").each(function(){
		$(this).hover(function(){
			$(this).css("background-color", "#FFE1FF");
		}, function(){
			$(this).css("background-color", "#FFFCEA");
		});
	});
	$(".tr:even").each(function(){
		$(this).hover(function(){
			$(this).css("background-color", "#FFE1FF");
		}, function(){
			$(this).css("background-color", "#fff");
		});
	}); 

	/*ie6,7下拉框美化*/
    if ( $.browser.msie ){
    	if($.browser.version == '7.0' || $.browser.version == '6.0'){
    		$('.select').each(function(i){
			   $(this).parents('.select_border,.select_containers').width($(this).width()+5); 
			 });
    		
    	}
    }
	
	$('input[name="select_all"]').click(function(){
		$('input[type="checkbox"]').each(function(i, e) {
			if ($('input[type="checkbox"]').eq(i).attr('checked')) {
				$('input[type="checkbox"]').eq(i).attr('checked', false);
			} else {
				$('input[type="checkbox"]').eq(i).attr('checked', true);
			}
        });
		if ($(this).val() == '全选') {
			$(this).val('反选');
		} else {
			$(this).val('全选');
		}
	});
});
