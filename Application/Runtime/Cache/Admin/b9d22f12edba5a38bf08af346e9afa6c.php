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
							<div class="ui segment">
    <div class="ui small breadcrumb">
        <a class="section" href="/admin">管理员首页</a>
        <i class="right chevron icon divider"></i>
        <a class="section"  href="/admin/page/teacher/">师资管理</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">新增老师</div>
    </div>
</div>
<script src="/Public/admin/js/lib/angular.min.js"></script>
<script src="/Public/admin/js/lib/jquery.form.min.js"></script>
<div class="container" ng-app="newTeacherApp" ng-controller="newTeacherCtrl">
    <form action="/admin/api/teacher/upLoadPic" enctype="multipart/form-data" method="post" class="ui form" id="uploadPicForm">
    <div class="field ui image rounded">
    <img id='previewImag' src="" alt="" />
    </div>
    <div class="field">
      <label>上传头像</label>
      <input type="file" name="photo" id="picString"  />
    </div>

<hr>
  </form>
  <form class="ui form">
<input type="hidden" name="cover" id="coverStringHidden" ng-model="cover" />
      <input type="hidden" name="thumbnail" id="thumbnailStringHidden" ng-model="thumbnail"  />
<div class="field">
  <label>姓名</label>
    <div class="field">
      <input type="text" name="shipping[first-name]" placeholder="请输入真实姓名" ng-model="truename">
    </div>
</div>
<div class="field">
  <label>用户名</label>
    <div class="field">
      <input type="text" name="shipping[first-name]" placeholder="请输入用户名" ng-blur="checkUsername(name)" ng-model="name">
      
    </div>
</div>
<div class="field">
  <label>qq</label>
    <div class="field">
      <input type="text" name="shipping[first-name]" placeholder="请输入qq" ng-model="qq">
    </div>
</div>
<div class="field">
  <label>mobile</label>
    <div class="field">
      <input type="text" name="shipping[first-name]" placeholder="请输入手机号" ng-model="mobile">
    </div>
</div>
<div class="field">
  <label>email</label>
    <div class="field">
      <input type="text" name="shipping[first-name]" placeholder="请输入邮箱" ng-model="email">
    </div>
</div>
<div class="field">
  <label>专业</label>
  <input type="text" name="photo" id="picString" ng-model="major" />
</div>
<div class="field">
  <label>性别</label>
  <select class="ui fluid dropdown" ng-model="sex">
    <option value="1">男</option>
    <option value="0">女</option>
  </select>
</div>
<div class="field">
  <label>学校</label>
  <input type="text" name="photo" id="picString"  ng-model="school"  />
</div>
<div class="field">
  <label>地点</label>
  <input type="text" name="photo" id="picString"  ng-model="location" />
</div>
<div class="field">
  <label>生日</label>
    <div class="field">
      <input type="date" name="shipping[first-name]" placeholder="生日日期"  ng-model="birth">
    </div>
</div>
<hr>
<h4 class="ui dividing header">能力:</h4>
<div class="six fields">
  <div class="field">
    <label>分析图</label>
    <select class="ui fluid dropdown"  ng-model="charts">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="field">
    <label>3d建模</label>
    <select class="ui fluid dropdown"  ng-model="model_3d">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="field">
    <label>模型表达</label>
    <select class="ui fluid dropdown" ng-model="model_express">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="field">
    <label>效果图</label>
    <select class="ui fluid dropdown" ng-model="effect">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="field">
    <label>参数化</label>
    <select class="ui fluid dropdown" ng-model="parametrize">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="field">
    <label>设计理论</label>
    <select class="ui fluid dropdown" ng-model="design_theory">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
</div>
<hr>
<h4 class="ui dividing header">业绩统计:</h4>
<div class="two fields">
  <div class="field">
    <label>接单数</label>
    <input type="number" name="shipping[first-name]" placeholder="" ng-model="achieved">
  </div>
  <div class="field">
    <label>当前单数</label>
      <input type="number" name="shipping[first-name]" placeholder="" ng-model="achieving">
  </div>

</div>
<div class="field">
  <label>个人简介</label>
  <textarea name="name" rows="8" cols="40" ng-model="profile"></textarea>
</div>
<hr>
<div class="field">
  <label for="">星座</label>
  <select class="ui fluid search dropdown" name="card[expire-month]" ng-model="constellation">
    <option value="白羊座">白羊座</option>
    <option value="金牛座">金牛座</option>
    <option value="双子座">双子座</option>
    <option value="巨蟹座">巨蟹座</option>
    <option value="狮子座">狮子座</option>
    <option value="处女座">处女座</option>
    <option value="天秤座">天秤座</option>
    <option value="天蝎座">天蝎座</option>
    <option value="射手座">射手座</option>
    <option value="摩羯座">摩羯座</option>
    <option value="双鱼座">双鱼座</option>
    <option value="水瓶座">水瓶座</option>
  </select>
</div>


<a class="ui button" tabindex="0" ng-click="createNewTeacher(name, qq, mobile, email, thumbnail,cover,truename,sex,birth,img,location,major, school,constellation,profile, charts, model_3d, effect, model_express, design_theory, achieved, achieving)">确认并提交</a>
<a class="ui button" href="/admin/page/teacher">返回</a>
</form>
<br><br><br><br>
</div>
<div class="ui basic modal load" id="loader">

    <div class="ui active">
        <div class="ui medium text loader"> 数据载入中，请稍后</div>
    </div>
    <div class="actions">
        <div class="ui approve button">停止载入</div>
    </div>
</div>
<script src="/Public/admin/js/modules/new_teacher.js"></script>

        </div>
    </div>
  </div>
 </div>
</body>
</html>