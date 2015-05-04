window.onload = function() {
	jQuery(".another-imgs .img-frame").hover(function(e){ 
		var main_img = jQuery(".main-img img");
		var little_images = jQuery('.img-frame');
		little_images.each(function(){
			jQuery(this).css('opacity','1');
		});
		var img = jQuery(this).find('img'); 
		jQuery(this).css('opacity', 0.5);
		var src = img.attr('src'); 
		main_img.attr('src', src); 
	} );

	jQuery(".arrow-left").click(function(e){
		var last = jQuery('.slides-container').children(".img-frame").last(); 
		var offset = last.width() + parseInt(last.css("margin-left"))+parseInt(last.css("margin-right"));
		var container_width = jQuery('.slides-container').width();
		var left = parseInt(jQuery('.slides-container').css('left'));
		console.log("left: "+left+" container_width: "+Math.abs(container_width - offset*4));
		if( Math.abs(left) >= Math.abs(container_width - offset*4) ){
			jQuery('.slides-container').animate({left: "0px"},1000);	
		} else {
			jQuery('.slides-container').animate({left: "-="+offset+"px"},500);
		}

	});
	jQuery(".arrow-right").click(function(e){
		var last = jQuery('.slides-container').children(".img-frame").last(); 
		var offset = last.width() + parseInt(last.css("margin-left"))+parseInt(last.css("margin-right"));
		var container_width = jQuery('.slides-container').width();
		var left = parseInt(jQuery('.slides-container').css('left'));
		if( left >= 0 ){
			jQuery('.slides-container').animate({left: -Math.abs(container_width - offset*4)+"px"},1000);	
		} else {
			jQuery('.slides-container').animate({left: "+="+offset+"px"},500);
		}

	});

	jQuery("input").focus(function(e){
		jQuery(this).attr('aria-invalid','false');
	});

	

	
}