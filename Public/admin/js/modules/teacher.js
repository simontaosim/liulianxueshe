


//加载遮罩

var loader = $('#loader').modal('setting', 'closable', false);

var teacherApp = angular.module('teacherApp', []);
teacherApp.controller('workCtrl', function($scope, $http, $compile){

		loader.modal("show");

		//生成分页控件
		$scope.generatePagination = function(p){
			if(p==undefined){p=1;}
			$http.get("/admin/api/work/generatePagination?page="+p).success(function(response){
				$("#pageMark").html("page:"+p);
				$(".ui.right.floated.pagination.menu").html(
					$compile(response)($scope)
				);

			});
		};
		$scope.generatePagination();

	//分页并刷新列表
		$scope.toPage = function(p){
			loader.modal("show");
			$http.get("/admin/api/work/works?page="+p).success(function(response){
				loader.modal("show");
				$scope.works = response;
				loader.modal("hide");
				$scope.generatePagination(p);


			});

		};

		$scope.remove_record = function(wid){
			var delete_warning_window = $('.ui.basic.modal.destroy')
				.modal({
					closable  : false,
					onDeny    : function(){

					},
					onApprove : function() {
						$http.get('/admin/api/work/destroy?wid='+wid).success(function(){
								$("#work_"+wid).remove();
						});
					}
				});
			//初始化弹窗
			delete_warning_window.modal("show");
			//显示弹窗
		};
//开始载入作品列表
		$http.get("/admin/api/work/works").success(function(response){
			loader.modal("show");
		$scope.works = response;
			loader.modal("hide");


		});

	//显示作品详情
		$scope.show = function(wid){
			loader.modal("show");
			$http.get("/admin/api/work/show?wid="+wid).success(function(response){

				$scope.work_details = response;

				$("#work_detail").modal("show", function(){
					//防止modal重载
					loader.modal("hide");
				});

			});
		};
	//获取原始图片大小
		$scope.showOriginSize = function(wid){
			$(".ui.modal.origin-images").modal("show");
			$http.get("/admin/api/work/getCover?wid="+wid).success(function(response){
					$scope.origin = response;
			});

		};
});
