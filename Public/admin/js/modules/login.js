$(".ui .form").ready(function($) {
	$("#loginMasssage").hide();
	var textinput = $(this).find(':text');
	var passinput = $(this).find(":password");
	$(this).bind('submit', function(){
		var username = textinput.val();
		var password = passinput.val();

		$("#loginMasssage").find(".header").html("登录中，请稍后～");
		$("#massageIcon").remove();
		$("#loginMasssage").prepend(' <i class="notched circle loading icon" id="massageIcon"></i>');

		 $("#loginMasssage").show();
		 $(this).find(":submit").hide();
		$.ajax({
		  type: "POST",
		  url: "/admin/api/login/auth",
		  data:{
		  		username: username,
		  		password: $.md5(password)
		  	},
		  dataType: "json",
		  success: function(data){
		  	$("#loginMasssage").hide();
		  	$(".ui .form").find(":submit").show();
		  		if(data=="4100"){
		  				$("#loginMasssage").show();
		  				$("#loginMasssage").find(".header").html("密码或用户名错误！");
					  	$("#massageIcon").remove();
					  	$("#loginMasssage").prepend('<i class="warning sign icon" id="massageIcon"></i>');
		  		}
		  		if(data=="4200"){

		  			$("#loginMasssage").show();
		  				$("#loginMasssage").find(".header").html("登录成功！");
					  	$("#massageIcon").remove();
					  	$("#loginMasssage").prepend('<i class="smile icon"></i>');
		  				window.location.assign("/admin/index");

		  		}
		  },
		  error: function(){
		  	$("#loginMasssage").find(".header").html("请求错误, 请与管理员联系");
		  	$("#massageIcon").remove();
		  	$("#loginMasssage").prepend('<i class="warning sign icon" id="massageIcon"></i>');
		  	$(".ui .form").find(":submit").show();
		  	return false;
		  },
		  	});
		  	return false;

	});
});
