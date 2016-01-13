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

<div class="container">
  <form class="ui form">
<h4 class="ui dividing header">Shipping Information</h4>
<div class="field">
  <label>Name</label>
  <div class="two fields">
    <div class="field">
      <input type="text" name="shipping[first-name]" placeholder="First Name">
    </div>
    <div class="field">
      <input type="text" name="shipping[last-name]" placeholder="Last Name">
    </div>
  </div>
</div>
<div class="field">
  <label>Billing Address</label>
  <div class="fields">
    <div class="twelve wide field">
      <input type="text" name="shipping[address]" placeholder="Street Address">
    </div>
    <div class="four wide field">
      <input type="text" name="shipping[address-2]" placeholder="Apt #">
    </div>
  </div>
</div>
<div class="six fields">
  <div class="field">
    <label>State</label>
    <select class="ui fluid dropdown">
      <option value="">State</option>
      <option value="AL">Alabama</option>
    </select>
  </div>
  <div class="field">
    <label>State</label>
    <select class="ui fluid dropdown">
      <option value="">State</option>
      <option value="AL">Alabama</option>
    </select>
  </div>
  <div class="field">
    <label>State</label>
    <select class="ui fluid dropdown">
      <option value="">State</option>
      <option value="AL">Alabama</option>
    </select>
  </div>
  <div class="field">
    <label>State</label>
    <select class="ui fluid dropdown">
      <option value="">State</option>
      <option value="AL">Alabama</option>
    </select>
  </div>
  <div class="field">
    <label>State</label>
    <select class="ui fluid dropdown">
      <option value="">State</option>
      <option value="AL">Alabama</option>
    </select>
  </div>
  <div class="field">
    <label>State</label>
    <select class="ui fluid dropdown">
      <option value="">State</option>
      <option value="AL">Alabama</option>
    </select>
  </div>
</div>
<h4 class="ui dividing header">Billing Information</h4>
<div class="field">
  <label>Card Type</label>
  <div class="ui selection dropdown">
    <input type="hidden" name="card[type]">
    <div class="default text">Type</div>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item" data-value="visa">
        <i class="visa icon"></i>
        Visa
      </div>
      <div class="item" data-value="amex">
        <i class="amex icon"></i>
        American Express
      </div>
      <div class="item" data-value="discover">
        <i class="discover icon"></i>
        Discover
      </div>
    </div>
  </div>
</div>
<div class="fields">
  <div class="seven wide field">
    <label>Card Number</label>
    <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
  </div>
  <div class="three wide field">
    <label>CVC</label>
    <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
  </div>
  <div class="six wide field">
    <label>Expiration</label>
    <div class="two fields">
      <div class="field">
        <select class="ui fluid search dropdown" name="card[expire-month]">
          <option value="">Month</option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </div>
      <div class="field">
        <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
      </div>
    </div>
  </div>
</div>
 <h4 class="ui dividing header">Receipt</h4>
 <div class="field">
  <label>Send Receipt To:</label>
  <div class="ui fluid multiple search selection dropdown">
    <input type="hidden" name="receipt">
    <i class="dropdown icon"></i>
    <div class="default text">Saved Contacts</div>
    <div class="menu">
      <div class="item" data-value="jenny" data-text="Jenny">
        <img class="ui mini avatar image" src="/images/avatar/small/jenny.jpg">
        Jenny Hess
      </div>
      <div class="item" data-value="elliot" data-text="Elliot">
        <img class="ui mini avatar image" src="/images/avatar/small/elliot.jpg">
        Elliot Fu
      </div>
      <div class="item" data-value="stevie" data-text="Stevie">
        <img class="ui mini avatar image" src="/images/avatar/small/stevie.jpg">
        Stevie Feliciano
      </div>
      <div class="item" data-value="christian" data-text="Christian">
        <img class="ui mini avatar image" src="/images/avatar/small/christian.jpg">
        Christian
      </div>
      <div class="item" data-value="matt" data-text="Matt">
        <img class="ui mini avatar image" src="/images/avatar/small/matt.jpg">
        Matt
      </div>
      <div class="item" data-value="justen" data-text="Justen">
        <img class="ui mini avatar image" src="/images/avatar/small/justen.jpg">
        Justen Kitsune
      </div>
    </div>
  </div>
</div>
 <div class="ui segment">
  <div class="field">
    <div class="ui toggle checkbox">
      <input type="checkbox" name="gift" tabindex="0" class="hidden">
      <label>Do not include a receipt in the package</label>
    </div>
  </div>
</div>
<div class="ui button" tabindex="0">Submit Order</div>
</form>
</div>

        </div>
    </div>
  </div>
 </div>
</body>
</html>