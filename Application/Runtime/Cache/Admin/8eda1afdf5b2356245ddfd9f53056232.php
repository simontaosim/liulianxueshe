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
							<div class="ui segment fixed">
<div class="ui category search" style="float:left;">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="搜索作品：Id/名称/描述">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
    <div></div>
<a href="/admin/page/teacher/newteacher" class="ui blue button" style="float:right;">
  <i class="plus icon"></i>
  添加新的作品
</a>
  <br /><br />

</div>
<script src="/Public/admin/js/lib/angular.min.js"></script>

<div id="main-operation"  class="container-fluid" ng-app="teacherApp" ng-controller="teacherCtrl" >
  <div class="ui success message">
    <i class="close icon"></i>
    <div class="header">
      <?php echo ($massage); ?>
    </div>
  </div>
<table class="ui celled table" >
                    <thead>
                    	<tr>
                    		<th colspan="4">
                    			<h3><?php echo ($search_result_title); ?></h3><span class="ui block right floated" id="pageMark">page: 1</span>
                    		</th>
                    	<th colspan="15">

                            <div class="ui right floated pagination menu">


                            </div>
                      </th>
                    </tr>
                    <tr>
                      <th colspan="9">
                        教师资料
                      </th>
                      <th colspan="6">
                        能力评估
                      </th>
                      <th colspan="4">
                        业绩统计
                      </th>
                    </tr>
                      <tr>
                        <th>
                          删除
                        </th>
                        <th>
                          编辑
                        </th>
                        <th>
                          头像
                        </th>
                        <th>
                          教师ID
                        </th>
                        <th>
                          姓名
                        </th>
                        <th>
                          出生日期
                        </th>
                        <th>
                          专业
                        </th>
                        <th>
                          学校
                        </th>
                        <th>
                          地点
                        </th>
                        <th>
                          分析图
                        </th>
                        <th>
                          3d建模
                        </th>
                        <th>
                          模型表达
                        </th>
                        <th>
                          效果图
                        </th>
                        <th>
                          参数化
                        </th>
                        <th>
                          设计理论
                        </th>
                        <th>
                          接单数
                        </th>
                        <th>
                          当前单数
                        </th>
                        <th>
                          创建时间
                        </th>
                        <th>
                          更新时间
                        </th>
                    </tr></thead>
                    <tbody ng-repeat="obj in objs">
                      <tr id="obj_{{obj.wid}}">
                        <td>
                        <span  class="ui small basic icon buttons">
                            <button id="btn_remove{{obj.wid}}" ng-mouseover="myhint(obj.wid)" ng-click="remove_record(obj.wid)" class="ui button remove-btn" data-content="删除"><i class="remove icon"></i></button>

                        </span>


                            </td>
                            <td>
                              <span  class="ui small basic icon buttons">

                                  <a href="/admin/page/work/editwork?wid={{obj.wid}}" class="ui button edit-btn" data-content="编辑"><i class="edit icon"></i></a>
                              </span>
                            </td>
                        <td ng-click="showOriginSize(obj.wid)" width="100px">
                            <span>{{obj.profile}}</span>
                            <!-- <span  class="ui small rounded centered image" style="text-align: center; width:50%;">
                                <a href="#" ng-click="showOriginSize(obj.wid)">
                                    <img src="/Public/thumb/{{obj.thumbnail}}" alt="点击查查原图" width="100">
                                </a>

                            </span> -->
                        </td>
                        <td>{{obj.uid}}</td>
                        <td><a href="#" ng-click="show(obj.wid)">{{obj.truename}}</a></td>
                        <td>{{obj.birth}}</td>
                        <td>
                          {{obj.major}}
                        </td>
                        <td>
                          {{obj.school}}
                        </td>
                          <td>
                              {{obj.location}}
                          </td>
                          <td>
                              {{obj.charts}}
                          </td>
                          <td>
                              {{obj.model_3d}}
                          </td>
                          <td>
                              {{obj.model_express}}
                          </td>
                          <td>
                              {{obj.effect}}
                          </td>
                          <td>
                                {{obj.parametrize}}
                          </td>
                          <td>
                              {{obj.design_theory}}
                          </td>
                          <td>

                          </td>
                          <td>

                          </td>
                        <td>{{obj.createtime}}</td>
                        <td>{{obj.updatetime}}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr><th colspan="19">
                        <div class="ui right floated pagination menu">

                        </div>
                      </th>
                    </tr></tfoot>


</table>
    <div class="ui modal" id="detail">
        <i class="close icon"></i>
        <div class="header">
            {{detail.title}}
        </div>
        <div class="ui items">
            <div class="item">
                <div class="ui medium rounded centered image">
                    <img src="/WorkImages/{{detail.cover}}" alt="点击查查原图" >
                </div>
                <div class="content">
                    <a class="header"> {{detail.title}}</a>
                    <div class="meta">
                        作者:<span>{{detail.author}}</span>
                    </div>
                    <div class="description">
                        <p>{{detail.content}}</p>
                    </div>
                    <div class="extra">创建于:{{detail.createtime}} </div>
                </div>
            </div>

        </div>
        <div class="actions">
            <div class="ui positive button">
                OK
            </div>
        </div>
    </div>
    <div class="ui modal origin-images">
        <i class="close icon"></i>
        <img src="/WorkImages/{{origin.cover}}" alt="点击查查原图" >
        <div class="actions">
            <div class="ui positive button">
                OK
            </div>
        </div>
    </div>
    <div class="ui basic modal destroy">
				  <div class="header">警告<i class="warning circle icon"></i></div>
				  <div class="content">
				    <p>是否确认删除该作品?</p>
				  </div>
				  <div class="actions">
				    <div class="ui cancel button">取消</div>
				    <div class="ui approve button">确认</div>
				  </div>
    </div>
</div>

</div>
<div class="ui basic modal load" id="loader">

    <div class="ui active">
        <div class="ui medium text loader"> 数据载入中，请稍后</div>
    </div>
    <div class="actions">
        <div class="ui approve button">停止载入</div>
    </div>
</div>
<script src="/Public/admin/js/modules/massage.js"></script>
<script src="/Public/admin/js/model/teacher.js"></script>
<script src="/Public/admin/js/modules/index_module.js"></script>

        </div>
    </div>
  </div>
 </div>
</body>
</html>