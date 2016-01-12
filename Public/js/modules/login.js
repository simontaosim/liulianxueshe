

define(["jquery","user_seed"], function(){
  $(".ui .form").ready(function() {
    var username = $(this).find(":text");
    var password = $(this).find(":password");
      $(this).submit(function(event) {
        var user_to_check = findUserJsonByLogin(username.val(), password.val());
        if (user_to_check == null) {
          return false;
        }
        else {
          alert("登录成功！");
          return user;
        }
      });
  });
});
