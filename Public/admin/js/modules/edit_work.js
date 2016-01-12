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
                    $('#previewImag').attr("src", '/WorkImages/'+data.cover);
              });
          }
  }

});


var newWorkApp = angular.module('newWorkApp', []);
newWorkApp.controller('newWorkCtrl', function($scope, $http){
  $scope.createNewWork = function(){
      $.post('/admin/api/work/update', { wid: $("#work_wid").val(), cover: $("#coverStringHidden").val(), thumbnail: $("#thumbnailStringHidden").val(), title:  $("#work_title").val(), content:  $("#work_content").val(), author:  $("#work_author").val() }, function (response) {
        loader.modal("show", function(){
            if (response != null | response != undefined) {
               window.location.assign('/admin/page/work?massage=作品更新成功！');
            }
        });
      });
  };

});
