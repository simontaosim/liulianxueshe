if(window.localStorage){
  console.log('确认允许您的浏览器访问本地数据');
}else{
  console.log('推荐使用chrome访问本离线应用！');
}
var users = [
  {count: 3},
  {user1: {
    username: "simon",
    password: "123666",
    role: "student"
  }
  },
  {
    user2:{
    username: "webmaster",
    password: "liulianxueshe2016",
    role: "webmaster"
  }
},
{
  user3:{
    username: "韩老师",
    password: "123456",
    role: "teacher"
  }
}
]
localStorage.users_count = users[0].count;
console.log(users.length);
for(var i=1;i<users.length; i++ ){
  localStorage["user"+i.toString()] = JSON.stringify(users[i]["user"+i.toString()]);
}



function findUserJsonByLogin(username, password){
//此函数输出示例为{username: xxx, password: xxx}
  var user = null;
  var count= 1;
  if (username == '') {
    alert("用户名不得为空！");
    return null;
  }
  if ( password == '' ) {
    alert("密码不得为为空！");
    return null;
  }
  //以下是为localStorage写的代码，线上环境注释掉
  for (var i = 1; i <= localStorage.getItem("users_count"); i++) {
      user = localStorage.getItem("user"+i.toString());
      if(JSON.parse(user).username == username && JSON.parse(user).password == password ){
          user.username = JSON.parse(user).username;
          user.password = JSON.parse(user).password;
          break;
      }else{
        user = null;
          continue;
      }
  }
//localstorage结束
//访问服务器的代码实现，离线环境注释掉
  // user = $.post(api_url);
//访问服务器的代码实现结束

  if (user == null) {
    alert("用户名或密码错误");
    return user;
  }else {
    return user;
  }


}
