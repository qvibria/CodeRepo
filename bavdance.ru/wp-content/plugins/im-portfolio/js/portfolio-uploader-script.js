jQuery(document).ready(function(jQuery){
	var _custom_media = true,
	_orig_send_attachment = wp.media.editor.send.attachment;
	jQuery("#uploader").css('height','200px');

	jQuery('.uploader .button-up').click(function(e) {
	
		tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		window.send_to_editor = function(html) {
			var imgurl = jQuery('img',html).attr('src');
			var classes = jQuery('img',html).attr('class');
			if(typeof classes != 'undefined')  // OTW Bugfix
                    id = classes.replace(/(.*?)wp-image-/, '');
			console.log(id);

			var val = jQuery("#uploader_text").val();
			if(val == ""){
				val = imgurl+"_DEL_"+id;
			} else {
				val += ";"+imgurl+"_DEL_"+id;
			}
			jQuery("#uploader_text").val( val );
			tb_remove();
			jQuery('.uploader .uploaded').append("<img src='"+imgurl+"' style='float:left; margin:10px 5px; width:100px' />");
		}
		return false;
	});

	jQuery('.add_media').on('click', function(){
		_custom_media = false;
	});

	jQuery("#_delete_button").click(function(e){
		var id = jQuery('.uploader .button-up').attr('id').replace('_button', '');
		console.log(id);
		jQuery("#"+id+"_text").val("");
		jQuery("form#post").submit();
	});

	jQuery("#save_button").click(function(e){
		jQuery("form#post").submit();
	});
});