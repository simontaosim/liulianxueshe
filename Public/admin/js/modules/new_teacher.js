//加载遮罩
var loader = $('#loader').modal('setting', 'closable', false);

//处理图片上传
if (!(window.File || window.FileReader || window.FileList || window.Blob)) {
    alert('你妈喊你换Chrome浏览器啦');
}
$("#picString").change(function(){
      var files = $('input[name="photo"]').prop('files');//获取到文件列表
      if(files.length == 0){
          alert('请选择文件');
          return;
      }else{
          var reader = new FileReader();//新建一个FileReader
          reader.readAsText(files[0], "UTF-8");//读取文件
          reader.onload = function(evt){ //读取完文件之后会回来这里
              var fileString = evt.target.result;
              $("#picStringHidden").val(fileString);
              $("#uploadPicForm").ajaxSubmit(function(data){
                    $("#coverStringHidden").val(data.cover);
                    $("#thumbnailStringHidden").val(data.thumb);
                    $('#previewImag').attr("src", '/TeacherImages/'+data.cover);
              });
          }
  }

});

var username_msg = 0;
var newTeacherApp = angular.module('newTeacherApp', []);
newTeacherApp.controller('newTeacherCtrl', function($scope, $http){
  $scope.checkUsername = function(name){
    $.get('/admin/api/teacher/getTeacherByName?name='+$scope.name, function(data){
      if (data != null) {
        username_msg = 0;


      }else{
        username_msg = 1;

      }
    });
  }

  $scope.createNewTeacher = function(name, qq, mobile, email, thumbnail,cover,truename,sex,birth,img,location,major, school,constellation,profile, charts, model_3d, effect, model_express, design_theory, achieved, achieving){
      if (truename == undefined | truename == '' | truename ==null ) {
        alert('真实姓名务必填写!');
        return false;
      }
      if (name == undefined | name == '' | name ==null ) {
        alert('用户名务必填写!');
        return false;
      }
      if (  username_msg == 0 |  username_msg == undefined | username_msg == null) {
        alert('用户名已经被占用!');
        return false;
      }


      var post_data = {
          thumbnail: $("#thumbnailStringHidden").val(),
          cover:$("#coverStringHidden").val(),
          truename: truename,
          sex:sex,
          birth:birth,
          img:img,
          location: location,
          major: major,
          school: school,
          constellation: constellation,
          profile: profile,
          charts: charts,
          model_3d: model_3d,
          effect: effect,
          model_express: model_express,
          design_theory: design_theory,
          achieved: achieved,
          achieving: achieving,
          name: name,
          qq:qq,
          mobile: mobile,
          email: email
      }
      // alert(post_data.truename);
      $.post('/admin/api/teacher/create', post_data, function (response) {

        loader.modal("show", function(){
            if (response != null | response != undefined) {
              window.location.assign('/admin/page/teacher?massage=教师录入成功！');
            }
        });
      });
  };

});
