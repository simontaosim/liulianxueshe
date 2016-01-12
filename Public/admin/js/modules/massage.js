//处理提示消息
var massage = $.trim($(".ui.success.message").find(".header").html());
if( massage!=''){
	$('.message .close')
	  .on('click', function() {
	    $(this)
	      .closest('.message')
	      .transition('fade', 500)
	    ;
	  });
	$(".ui.success.message").transition('fade', 5000);
}
if (massage=='') {
	$(".ui.success.message").hide();
}
