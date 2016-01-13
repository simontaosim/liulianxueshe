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
							<div class="ui icon message">
  <i class="inbox icon"></i>
  <div class="content">
    <div class="header">
      工作台会不断完善的，欢迎使用
    </div>
    <p>数据无价，请谨慎操作！</p>
  </div>
</div>

        </div>
    </div>
  </div>
 </div>
</body>
</html>