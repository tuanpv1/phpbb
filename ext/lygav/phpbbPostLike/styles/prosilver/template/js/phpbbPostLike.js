
(function($) {
    phpbb.addAjaxCallback("post_liked", function(response) {
        console.log(response);
        $("#like_opt_text_"+response.postId).prepend(response.message);
    });

    phpbb.addAjaxCallback("unpost_liked", function(response) {
        alert(1);
        $("#like_opt_text_"+response.postId).prepend(response.message);
    });
}(jQuery));