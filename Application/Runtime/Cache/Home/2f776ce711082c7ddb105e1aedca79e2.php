<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>留联学社</title>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="/Public/css/index.css" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="/Public/css/index_for_handheld.css" media="handheld" title="no title" charset="utf-8">
   <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

   <!-- Bootstrap -->
   <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
   <script data-main="/Public/js/main.js" src="/Public/js/lib/require.js"></script>
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>
  <body style='font-family: "Microsoft yahei" !important; margin-left:-5%;'>
      <nav class="navbar navbar-default  navbar-fixed-top  custom-header"  style="margin-left: -6%";>
        <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand custom-banner" href="/">
            <img src="/Public/images/index_logo.png" alt="" style="" />
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="custom-nav-bar-item"><a href="/">首页 <span class="sr-only">(current)</span></a></li>
          <li class="dropdown custom-nav-bar-item">
            <a href="/home/work/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">作品辅导</a>
            <ul class="dropdown-menu custom-dropdown">
              <li><a href="/home/work">线上辅导</a></li>
              <li role="separator" class="divider" style="margin: 0 !important; width: 80% !important; text-align:center; margin-left: 10% !important;"></li>
              <li><a href="/home/work">线下教学</a></li>
            </ul>
          </li>
          <li class="custom-nav-bar-long-item"><a href="/home/teacher/">师资展示</a></li>
          <li class="custom-nav-bar-long-item"><a href="/home/work/showworks">作品展示</a></li>
          <li class="custom-nav-bar-long-item"><a href="#">干活分享</a></li>
          <li class="custom-nav-bar-long-item"><a href="#">问答专区</a></li>
          <li class="custom-nav-bar-long-item"><a href="#">精品素材</a></li>
          <li class="custom-nav-bar-item"><a href="#">帮助</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
  <br><br><br>
<style>
  .lac-padding{
    /*padding:0 ! important;*/
    padding-left: 5px;
    padding-right: 5px;
  }
  .lac-row{
    margin-bottom: 10px;
  }
</style>
 <script data-main="/Public/js/main.js" src="/Public/js/lib/jquery.min.js"></script>
<div class="container" style="margin-left: 30% !important; width: 55%;max-width: 1200px;">
    <ol class="breadcrumb" style="background-color:rgb(255, 255, 255) !important; margin-top:14pt; margin-left:-1%;">
				<li class="active">师资展示</li>
			</ol>
    <div class="row">
        <h3  class="title-little" style="margin-top:0pt; margin-left:-16%; font-size:20pt; margin-bottom:35pt;">作品集导师</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-sm-6">
          <dl class="index_item_block">
            <dt>团队介绍</dt>
            <dd style="width:70%;">我们搭建开放性设计类平台,联合全球顶尖院校的建筑师,设计师,关注行业前端发展,传承设计经验,为设计专业学生提供灵活,专业,精准化的出国及竞赛作品集指导
                </dd>
          </dl>
        </div>

        <div class="col-xs-12 col-md-6 col-sm-6">
            <dl class="index_item_block">
           <dt>&nbsp;</dt>
            <dd style="width:70%;"><strong>
                我们的导师团队皆来自哈佛 MIT，GSD，Cornell，AA，<br>UCL，Pennsylvania等世界顶级建筑院校</strong>, 能够针对目标学校的风格提供专业指导
            </dd>
            </dl>
        </div>
    </div>
    <div class="container" id="teachers_panel" style="width: 90%;min-width: 890px; margin-left:-14%;">
        <div class="row lac-row">

        </div>





    </div>



</div>
<script type="text/javascript">
  $.post("/admin/api/teacher/teachersforindex",{page:1}, function(data){
      for(var i=0; i< (data.length/4); i=i+1){
        //得出行号
        $("#teachers_panel").append('<div class="row lac-row"></div>');
        for(var j=1; j <= 4 && j<= data.length; j++ ){
          //得出列号
          if((i*4+j-1)>=data.length){break;}

          var obj =  data[i*4+j-1];//得出矩阵的指针位置,并指向对象位置
          var sex = '';
        if(obj.sex == "1"){
           sex = "帅哥";
          }
        if(obj.sex == "0"){
           sex = "美女";
         }
          $("#teachers_panel").append('<div class="col-md-3 lac-padding"><div style="border: thin solid #cccccc;text-align:center;padding:0;"><br><img src="/TeacherImages/thumb/14526043101813746860.jpg" style="width:100px;height:100px" alt="..." class="img-circle"><br><br><div style="color:rgba(70, 108, 118, 1)">'+sex+'| '+obj.constellation+'</div><br><div>'+obj.major+'</div><br><div>'+obj.school+'</div><br><div>'+obj.location+'</div><br><div style="text-align:center"><span style="display:inline-block; text-align:center;"><div style="font-size:1px">分析图</div><span style="display:inline-block;list-style-type:none;width:'+3*obj.charts+'px;height:'+3*obj.charts+'px;background-color:rgba(70, 108, 118, 1);border-radius:50%;"></span></span><span style="display:inline-block; text-align:center;"><div style="font-size:1px">3D建模</div><span style="display:inline-block;list-style-type:none;width:'+3*obj.model_3d+'px;height:'+3*obj.model_3d+'px;background-color:rgba(70, 108, 118, 1);border-radius:50%;"></span></span><span style="display:inline-block; text-align:center;"><div style="font-size:1px">模型表达</div><span style="display:inline-block;list-style-type:none;width:'+3*obj.model_express+'px;height:'+3*obj.model_express+'px;background-color:rgba(70, 108, 118, 1);border-radius:50%;"></span></span><span style="display:inline-block; text-align:center;"><div style="font-size:1px">效果图</div><span style="display:inline-block;list-style-type:none;width:'+3*obj.effect+'px;height:'+3*obj.effect+'px;background-color:rgba(70, 108, 118, 1);border-radius:50%;"></span></span><span style="display:inline-block; text-align:center;"><div style="font-size:1px">参数化</div><span style="display:inline-block;list-style-type:none;width:'+3*obj.parametrize+'px;height:'+3*obj.parametrize+'px;background-color:rgba(70, 108, 118, 1);border-radius:50%;"></span></span><span style="display:inline-block; text-align:center;"><div style="font-size:1px">设计理论</div><span style="display:inline-block;list-style-type:none;width:'+3*obj.design_theory+'px;height:'+3*obj.design_theory+'px;background-color:rgba(70, 108, 118, 1);border-radius:50%;"></span></span></div><br><p style="color:rgba(70, 108, 118, 1)">单时咨询&nbsp;&nbsp;&nbsp;辅导套餐</p></div></div>');

        }
        $("#teachers_panel").append('<div class="row lac-row">');

      }
  });
</script>


      </div>
    </div>

    <div class="container-fluid footer">
      <div class="container" style="margin-left: 28%; max-width: 1200px;>
        <div class="row">
          <div class="col-xs-12 col-md-3 col-sm-3">
            <dl class="footer-item">
              <dt>联系我们</dt>
              <dd>联系电话：18616656990  </dd>
              <dd>联系地址：上海市浦东新区浦东大道1093弄 名门滨江苑12号楼803室</dd>
              <dd>电子邮件：lac_consultation@sina.com</dd>
              <dd>商务合作：bailey1990@vip.qq.com</dd>
            </dl>
          </div>
          <div class="col-xs-12 col-md-3 col-sm-3">
            <dl class="footer-item">
            <dt>关注我们</dt>
            <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="/Public/images/qrcode.png" alt="..." width="80pt">
                  </a>
                </div>
                <div class="media-body">
                  <dd>LAC留联学设</dd>
                  <dd>公众平台：</dd>
                  <dd>ID:lac-studio</dd>
                  <dd>官方微博：</dd>
                  <dd>http://weibo.com/5783541605</dd>
                </div>
              </div>
            </dl>
          </div>
          <div class="col-xs-12 col-md-3 col-sm-3">
            <dl class="footer-item">
              <dt>加入我们</dt>
              <dd>联系电话：13764304251</dd>
              <dd>联系地址：上海市浦东新区浦东大道1093弄 名门滨江苑12号楼803室 </dd>
              <dd>电子邮件：214833033@qq.com</dd>
              <dd>老师招募：bailey1990@vip.qq.com</dd>
            </dl>
          </div>
          <div class="col-xs-12 col-md-3 col-sm-3">
            <dl class="footer-item">
              <dt>投诉建议</dt>
              <dd>如果您有好的建议，点击这里告诉我们哦</dd>
            </dl>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-sm-6">
                &nbsp;
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6">
              <p style="color: rbg(136,136,136);font-size:8pt;">
                      备案号
              </p>

            </div>
        </div>
      </div>

    </div>

  </body>
</html>