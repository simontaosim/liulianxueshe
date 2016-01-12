<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>留联学设后台管理</title>
  <link rel="stylesheet" type="text/css" href="/Public/semantic/dist/semantic.min.css">
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
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
        <a class="item" href="/admin/work/newwork">
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
          <a class="item" href="/admin/page/Work/">
            作品管理
          </a>
          <a class="item">
            师资管理
          </a>
          <a class="item" data-content="敬请期待">
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
<a href="/admin/work/newwork" class="ui blue button" style="float:right;">
  <i class="plus icon"></i>
  添加新的作品
</a>
  <br /><br />

</div>


<table class="ui celled table">
                    <thead>
                    	<tr>
                    		<th colspan="3">
                    			<h3><?php echo ($search_result_title); ?></h3>
                    		</th>
                    	<th colspan="3">
                        <div class="ui right floated pagination menu">
                          <a class="icon item">
                            <i class="left chevron icon"></i>
                          </a>
                          <a class="item"><?php echo ($page+1); ?></a>
                          <a class="item"><?php echo ($page+2); ?></a>
                          <a class="item"><?php echo ($page+3); ?></a>
                          <a class="item"><?php echo ($page+4); ?></a>
                          <a class="icon item">
                            <i class="right chevron icon"></i>
                          </a>
                        </div>
                      </th>
                    </tr>
                      <tr>
                      	<th>作品缩略图</th>
                      <th>作品ID</th>
                      <th>名称</th>
                      <th>作者</th>
                      <th>上传日期</th>
                      <th>操作</th>
                    </tr></thead>
                    <tbody>
                    	<?php $__FOR_START_1228997421__=1;$__FOR_END_1228997421__=20;for($i=$__FOR_START_1228997421__;$i < $__FOR_END_1228997421__;$i+=1){ ?><tr>
                        <td>
                          												这是一张图片
                        </td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>
                        			<span  class="ui small basic icon buttons">
                        				<button class="ui button remove-btn" data-content="删除"><i class="remove icon"></i></button>
  									<button class="ui button" data-content="编辑"><i class="edit icon"></i></button>
                        			</span>
								  
							
						</td>
                      </tr><?php } ?>
                    </tbody>
                    <tfoot>
                      <tr><th colspan="6">
                        <div class="ui right floated pagination menu">
                          <a class="icon item">
                            <i class="left chevron icon"></i>
                          </a>
                          <a class="item"><?php echo ($page+1); ?></a>
                          <a class="item"><?php echo ($page+2); ?></a>
                          <a class="item"><?php echo ($page+3); ?></a>
                          <a class="item"><?php echo ($page+4); ?></a>
                          <a class="icon item">
                            <i class="right chevron icon"></i>
                          </a>
                        </div>
                      </th>
                    </tr></tfoot>
            </table>
				<div class="ui basic modal">
				  <div class="header">警告<i class="warning circle icon"></i></div>
				  <div class="content">
				    <p>是否确认删除该作品?</p>
				  </div>
				  <div class="actions">
				    <div class="ui cancel button">取消</div>
				    <div class="ui approve button">确认</div>
				  </div>
				</div>
           <script src="/Public/admin/js/modules/work.js"></script>
           
        </div>
    </div>
  </div>
 </div>    
</body>
</html>