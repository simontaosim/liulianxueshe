<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>留联学设后台管理</title>
  <link rel="stylesheet" type="text/css" href="/Public/semantic/dist/semantic.min.css">
    <script src="/Public/admin/js/lib/jquery.min.js"></script>
  		<script src="/Public/semantic/dist/semantic.min.js"></script>

</head>
<body>
  <div class="ui secondary  menu fixed" style="background: white;">
    <a class="item" href="/admin/">
      <h3>留联学设后台管理</h3>
    </a>
    <a class="item">
      我的资料
    </a>
    <a class="item" data-content="敬请期待">
      我的设置
    </a>
    <a class="item" href="/" target="blank">
      首页预览
    </a>
        <a class="item" href="/admin/page/work/newwork">
      添加新作品<i class="flag icon"></i>
    </a>
    <br /><br /><br /><br /><br />
    <div class="right menu">
      <div class="item">
        <div class="ui search category focus">
            <input class="prompt" type="text" placeholder="搜索：作品／教师／文章" 　autocomplete="on">
        <div class="results"></div></div>
      </div>
      <a class="ui item" href="/admin/page/login/logout">
        安全登出
      </a>
    </div>
  </div>
<br /><br /><br /><br /><br />
  <div class="ui divided grid">
    <div class="row">
      <div class="three wide column">
        <div class="ui vertical pointing menu fixed" style="top:100px;left:20px;">
          <a class="item active" href="/admin/index">
            我的工作台
          </a>
          <a class="item" href="/admin/page/work/">
            作品管理
          </a>
          <a class="item" href="/admin/page/teacher/">
            师资管理
          </a>
          <a class="item" data-content="敬请期待" href="">
            学生管理
          </a>
          <a class="item">
            干货管理
          </a>
          <a class="item" data-content="敬请期待">
            文章管理
          </a>

          <a class="item" data-content="敬请期待">
            栏目管理
          </a>
          <a class="item" data-content="敬请期待">
            系统设置
          </a>
          <a class="item">
            管理员设置
          </a>
        </div>
      </div>
					<script type="text/javascript" charset="utf-8">
					$('a')
						.popup({
						  inline: true,
						  position : 'bottom right'
						})
						;
      				$(".pointing  .menu").ready(function(){
      					//更改菜单的激活样式
      					$(this).find("a").each(function(){
      					$(this).removeClass("active");
      					});
      					$(this).find("a:eq(0)").addClass("active");
      					var active_item =$(this).find("a:eq(<?php echo ($menu_number); ?>)");
      					active_item.addClass("active");
      					active_item.wrap("<u></u>");



      							});
  				</script>
      <div class="thirteen wide column">
        <div class="container">
							<script src="/Public/admin/js/lib/angular.min.js"></script><script src="/Public/admin/js/lib/jquery.form.min.js"></script><div class="ui segment"><div class="ui small breadcrumb">  <a class="section" href="/admin">管理员首页</a>  <i class="right chevron icon divider"></i>  <a class="section"  href="/admin/page/work/">作品管理</a>  <i class="right chevron icon divider"></i>  <div class="active section">新增作品</div></div></div><div class="container" ng-app="newWorkApp" ng-controller="newWorkCtrl">  <form action="/admin/api/work/upLoadPic" enctype="multipart/form-data" method="post" class="ui form" id="uploadPicForm">    <div class="field ui image rounded">    <img id='previewImag' src="" alt="" />    </div>    <div class="field">      <label>上传作品图片</label>      <input type="file" name="photo" id="picString"  />    </div>  </form>  <div class="ui form">      <input type="hidden" name="cover" id="coverStringHidden" ng-model="cover" />      <input type="hidden" name="thumbnail" id="thumbnailStringHidden" ng-model="thumbnail"  />    <div class="field">      <label>作品名称</label>      <input type="text" ng-model="title">    </div>    <div class="field">      <label>作品描述</label>      <textarea rows="2" ng-model="content"></textarea>    </div>    <div class="field">      <label>作者名字</label>      <input type="text" ng-model="author">    </div>    <div class="field">      <input type="button" ng-click="createNewWork(cover, thumbnail, title, content, author)" class="ui button default" value="提交">      <a href="/admin/page/work" class="ui button warning">返回 </a>    </div>  </div></div><div class="ui basic modal load" id="loader">    <div class="ui active">        <div class="ui medium text loader"> 数据载入中，请稍后</div>    </div>    <div class="actions">        <div class="ui approve button">停止载入</div>    </div></div><script src="/Public/admin/js/modules/new_work.js"></script>
        </div>
    </div>
  </div>
 </div>
</body>
</html>