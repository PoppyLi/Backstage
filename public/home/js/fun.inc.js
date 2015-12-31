// JavaScript Document

$(function(e) {
	$('.nav-box ul li').mouseover(function(){
		$(this).find('ul').show();
	}).mouseleave(function(){
		$(this).find('ul').hide();
	});
	/*
	$('.nav-box ul li ul').find('li:gt(0)').mouseover(function(){
		$(this).css('background-color','#00873b');
		$(this).find('span').css('color','#ffffff');
	}).mouseleave(function(){
		$(this).css('background-color','#ffffff');
		$(this).find('span').css('color','#333333');
	});
	*/

	len=$('.banmove a').length, cnow=0, cnext=1, time=4500, times=1000, over='', torf=true;
	font='<font class="hover"></font>';
	for(i=1;i<len;i++){
		font=font+'<font></font>';
	}
	$('.banmun').html(font);
	over=setTimeout(function(){
		ple(cnow,cnext);
	},time);
	function ple(now,next){	
		torf=false	;
		$('.banmove a').eq(next).css('z-index','1001');
		$('.banmun font').removeClass('hover');
		$('.banmun font').eq(next).addClass('hover');
		$('.banmove a').eq(now).fadeOut(times,function(){
			$('.banmove a').eq(next).css('z-index','1002');
			$('.banmove a:gt('+next+'),.banmove a:lt('+next+')').css('z-index','1000').fadeIn(0);
			cnow=next;
			cnext=next+1>=len?0:next+1;
			over=setTimeout(function(){
				ple(cnow,cnext)
			},time);
			torf=true;
		})
	}	
	$('.banmun font').each(function(index){
        $(this).click(function(){
			if(index!=cnow){
				while(torf==true){
					clearTimeout(over);
					ple(cnow,index);
				}
			}
		});
    });
	
	move_class = '.pro-move';
	time_clear = '';
	prod_clear = '';
	marg_left = 0;
	now_num = 0;
	nei_num = 4;   //内框显示几个
	len_num = Math.abs($(move_class + ' a').length);
	one_img = Math.abs($(move_class + ' a:eq(0) img').attr('width'));
	one_width = one_img + 30;
	$(move_class).html($(move_class).html()+$(move_class).html()+'<div class="clear"></div>');
	
	move_fun();
	function move_fun(){
		time_clear = window.setTimeout(function(){
			if(now_num == len_num*2-4){				
				now_num = len_num-4;
				move_left(1, one_width*now_num, 1);
				now_num ++;
				move_fun();			
			}else{
				move_left(1, Math.abs($(move_class).css('margin-left').replace('px','')), 1);
				now_num ++;
				move_fun();
			}			
		}, 3000);
	}
	
	function move_left(ic, jc, kc){
		/*$(move_class).animate({marginLeft:-(one_width*kc+jc)});*/
		if(ic <= one_width){
			window.setTimeout(function(){
				$(move_class).css('margin-left', -(ic*kc+jc)+'px');
				ic = ic + 10;
				move_left(ic, jc, kc);		
			}, 1)
		}else{
			$(move_class).css('margin-left', -(one_width*kc+jc)+'px');		
		}
	}
		
    $('.pro-center,.pro-left,.pro-right').mouseover(function(){clearInterval(time_clear);}).mouseout(function(){move_fun();})
	$('.pro-left').click(function(){
		clearTimeout(prod_clear);
		prod_clear = window.setTimeout(function(){
			if(now_num == 0){				
				now_num = len_num;
				move_left(1, one_width*now_num, -1);
				now_num --;	
			}else{
				move_left(1, Math.abs($(move_class).css('margin-left').replace('px','')), -1);
				now_num --;
			}	
		}, 0);
	})
	$('.pro-right').click(function(){
		clearTimeout(prod_clear);
		prod_clear = window.setTimeout(function(){
			if(now_num == len_num*2-4){				
				now_num = len_num-4;
				move_left(1, one_width*now_num, 1);
				now_num ++;	
			}else{
				move_left(1, Math.abs($(move_class).css('margin-left').replace('px','')), 1);
				now_num ++;
			}	
		}, 0);
	})
	
	if($('.pro-move').attr('display')==0){
		$('.pro-move a').each(function(i,e) {
			$(this).find('h3').css('bottom','-40px');
			$(this).mouseover(function(){
				$(this).find('h3').animate({bottom:0});
			}).mouseleave(function(){
				$(this).find('h3').animate({bottom:-40});
			});
		})
	}
	
	con_height  = 0;
	con_height1 = $('.main-con-top:eq(0)').height();
	con_height2 = $('.main-con-top:eq(1)').height();
	con_height3 = $('.main-con-top:eq(2)').height();
	if(con_height1 > con_height) con_height=con_height1;
	if(con_height2 > con_height) con_height=con_height2;
	if(con_height3 > con_height) con_height=con_height3;
	$('.main-con-top').height(con_height);

	$('.sidebar-con-left-nav ul li div strong').click(function(){
		$(this).toggleClass('navdown');
		$(this).parent('div').parent('li').find('ul').slideToggle();
    });
});