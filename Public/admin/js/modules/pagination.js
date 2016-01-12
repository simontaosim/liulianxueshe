workApp.controller('pageCtrl', function($scope, $http, $compile){
  //生成分页控件
  $scope.generatePagination = function(p){
    if(p==undefined){p=1;}
    $http.get("/admin/api/pagination/generatePagination?page="+p).success(function(response){
      $("#pageMark").html("page:"+p);
      $(".ui.right.floated.pagination.menu").html(
        $compile(response)($scope)
      );

    });
  };
  $scope.generatePagination();

});
