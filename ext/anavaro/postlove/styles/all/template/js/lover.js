(function($) {  // Avoid conflicts with other libraries

"use strict";

phpbb.addAjaxCallback('toggle_love', function(data) {
	if (data.toggle_action == 'add')
	{
		console.log(data.toggle_post);
		$('#likeimg_' + data.toggle_post).removeClass('like').addClass('liked');
		$('#like_' + data.toggle_post).text(parseInt($('#like_' + data.toggle_post).text()) + 1);
		//$('#like_opt_text_' + data.toggle_post).text('bạn và một số người khác đã thích nội dung này');
	}
	else
	{
		$('#likeimg_' + data.toggle_post).removeClass('liked').addClass('like');
		$('#like_' + data.toggle_post).text(parseInt($('#like_' + data.toggle_post).text()) - 1);
		//$('#like_opt_text_' + data.toggle_post).text('một số người khác đã thích nội dung này');
	}
});

})(jQuery); // Avoid conflicts with other libraries