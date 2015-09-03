<?php 
	require "include/inic.php";

	/* 表单提交？ */
	if($_POST)
	{
		/* 注册表单验证 */
		// $registerName=trim($_POST["register-username"]);

		/* 判断用户名是否为空  trim(); 清除两边末端空格     
			/* history.back() : 会保留值，   location.href="url"  不保留值
		if($registerName=="")
		{
			die('<script type="text/javascript">alert("你输入的用户名为空");history.back()</script>');
		}else{
			die('<script type="text/javascript">alert("恭喜你注册成功");location.href="http://127.0.0.1/wengdo/index.php";</script>');
		}
*/
		/* 判断用户名长度是否小于6位数 */
		// if(strlen($registerName)<5)
		// {	
		// 	die('<script type="text/javascript">alert("你输入的用户名小于5位");history.back()</script>');
		// }else{
		// 	die('<script type="text/javascript">alert("恭喜你注册成功");location.href="http://127.0.0.1/wengdo/index.php"</script>');
		// }
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆电子网</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">

	<!-- bootstrapValidator的样式 -->
	<link rel="stylesheet" href="css/bootstrapValidator.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/index.css">
	 <!--兼容各种终端的宽度-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--修正各种终端-->

	<!--[if It IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/htmlshiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="container">
		<!-- 头部 -->
		<div class="header">
			  <div class="navbar"> 
		    	<a href="#" class="btn btn-navbar"  data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
		    	</a>
		      <div class="container"> 
		        <div class="span4">
		       	 <a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a>
		    	</div>
		        <div class="nav-collapse">

		        	<!-- 遍历子菜单 -->
		         <ul class="nav">
		            <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">关于我们<b class="caret"></b>
				          </a>
				           <ul class="dropdown-menu">
					            <li><a href="contact.html">联系我们</a></li>
					            <li><a href="ceo-word.html">CEO致词</a></li>
					            <li><a href="history.html">公司历史</a></li>
					            <li><a href="#">企业文化</a></li>
					            <!-- <li class="divider"></li> 横线-->
					            <li><a href="#">Examples</a></li>
				          </ul>
				      </li>
		            <li><a href="products.html">产品展示</a></li>
		            <li><a href="news.php">新闻中心</a></li>
		            <li><a href="invite-job.html">人才招聘</a></li>
		            <li><a href="guestbook.php">客户留言</a></li>
		        </ul>

		        </div>
		      </div>
		    </div>

			<!-- 登录注册按钮 -->
		    <div class="login">
		    	<!-- 注册 -->
			    	<a href="#register" data-toggle="modal" class="">注册</a>
			    	<a href="#login" data-toggle="modal" class="">登录</a>
			    	<a href="#ctrl-d" data-toggle="modal" class="">收藏本站</a>

			    	 <!-- 收藏本站 -->
					<div class="modal hide fade" id="ctrl-d">
			    	 	 <a href="#ctrl-d" class="close" data-dismiss="modal"> X </a>
			    	 	<div class="modal-body">
			    	 		<h3 align='center'>请按Ctrl+D收藏我们的网站，谢谢！</h3>
			    		 </div>
			    	 </div>

		    	 <div class="modal hide fade" id="register">
				    <div class="modal-header">
				    <a href="#register" class="close" data-dismiss="modal"> X </a>
				      <h4>注册</h4>
				      
				    </div>
				    <div class="modal-body">
<!-- PHP表单注册验证部分 start-->
						<form id="registerForm" method="post" class="form-horizontal"> 
					        <fieldset>
						    <div class="form-group">
						        <label class="control-label" for="register-user">用户名：</label>
						        <input type="text" class="form-control" name="registerUsername" id="register-user"/>
						    </div>
						    <br>
						    <div class="form-group">
						        <label class="control-label" for="register-pass">密码：</label>
						        <input type="password" class="form-control" name="registerPassword" id="register-pass"/>
						    </div>
						    <br>
						    <div class="form-group">
						        <label class="control-label" for="register-conPass">确认密码：</label>
						        <input type="password" class="form-control" name="registerConfirmPassword" id="register-conPass"/>
						    </div>
						    <br>
						    <div class="form-group">
						        <label class="control-label" for="register-email">电子邮箱：</label>
						        <input type="text" class="form-control" name="registerAddEmail" id="register-email"/>
						    </div>
					        </fieldset>
					        <div class="form-actions">
								<button class="btn" type="submit">提交</button>
								<button class="btn" type="reset">重置</button>
							</div>
						</form>
<!-- PHP表单注册验证部分 stop-->
	    			</div>
 				</div>

<!-- PHP表单登录验证部分 strat-->
				 <div class="modal hide fade" id="login">
				    <div class="modal-header">
				    <a href="#login" class="close" data-dismiss="modal"> X </a>
				      <h4>登录</h4>
				    </div>
				    <div class="modal-body">
				     <form id="loginForm" method="post" class="form-horizontal"> 
				        <fieldset>
					    <div class="form-group">
					        <label class="control-label" for="login-user">用户名：</label>
					        <input type="text" class="form-control" name="loginUsername" id="login-user"/>
					    </div>
					    <br>
					    <div class="form-group">
					        <label class="control-label" for="login-pass">密码：</label>
					        <input type="password" class="form-control" name="loginPassword" id="login-pass"/>
					    </div>
				        </fieldset>
				        <div class="form-actions">
							<button class="btn" type="submit">提交</button>
							<button class="btn" type="reset">重置</button>
						</div>
					</form>
<!-- PHP表单登录验证部分 stop-->

	    			</div>
 				</div>

		    </div>
		</div>


		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		    <a href=""><img src="images/ad-img.jpg" alt="文豆1" style="width:1207px"/></a>
		      <div class="carousel-caption">
		        	这是文豆第一张广告
		      </div>
		    </div>
		    <div class="item">
		     <a href=""><img src="images/ad-img.jpg" alt="文豆1" style="width:1207px"/></a>
		      <div class="carousel-caption">
		        这是文豆第一张广告
		      </div>
		    </div>
		    <div class="item">
		     <a href=""><img src="images/ad-img.jpg" alt="文豆1" style="width:1207px"/></a>
		      <div class="carousel-caption">
		        这是文豆第二张广告
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" data-toggle="tooltip" data-placement="left" title="上一张">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" data-toggle="tooltip" data-placement="right" title="下一张">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only"> </span>
		  </a>
		</div>


<!-- 中间重要部分 -->
	<div class="row">
		<div class="span4">

			<!-- 通知  新闻部分 -->
			<div class="news">
				<ul class="nav nav-tabs">
				    <li class="active" ><a href="#tab1" data-toggle="tab">通知</a></li>
				    <li><a href="#tab2" data-toggle="tab">公司新闻</a></li>
				    <div class="more" style="float:right; margin-top:10px;"><a href="" >more</a></div>
				</ul>
				<div class="tab-content">
				  	<div class="tab-pane active" id="tab1">
						<ul>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; web上半年人才录用报告</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; 设立技术研究所网站(大田)</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; web俄罗斯市场扩大</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; 举办座谈会的合作企业网站</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; 举办座谈会的合作企业网站</a></li>
						</ul>
						</div>	
				    <div class="tab-pane" id="tab2">
						<ul>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; web上半年人才录用报告</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; 设立技术研究所网站(大田)</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; web俄罗斯市场扩大</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; 举办座谈会的合作企业网站</a></li>
							<li><div class="news-day">[2014-01-10]</div><a href="#"> &gt; 举办座谈会的合作企业网站</a></li>
						</ul>
				   	</div>
				</div>
				<div class="j-p-q">
					<ul>
						<li><img src="images/job-img.jpg" alt=""><a href="#">人才招聘 <br>Job</a></li>
						<li><img src="images/mulu-img.jpg" alt=""><a href="#">投资程序 <br>Process</a></li>
						<li><img src="images/process.jpg" alt=""><a href="#" style="border:none;">投资咨询 <br>Q&amp;A</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="products">
			<!-- 产品介绍 -->
				<div id="myCarousel1" class="carousel slide">
			  			<!-- Carousel items -->
						<div class="carousel-inner">
					    	<div class="active item"><a href=""><img src="images/ad-img.jpg" alt="文豆1" style="width:1207px;height:150px;"/></a></div>
					    	<div class="item"><a href=""><img src="images/ad-img.jpg" alt="文豆2" style="width:1207px;height:150px;"/></a></div>
					    	<div class="item"><a href=""><img src="images/ad-img.jpg" alt="文豆3" style="width:1207px;height:150px;"/></a></div>
							<div class="item"><a href=""><img src="images/ad-img.jpg" alt="文豆4" style="width:1207px;height:150px;"/></a></div>
						</div>
						  <!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel1" data-slide="prev"></a>
						<a class="carousel-control right" href="#myCarousel1" data-slide="next"></a>
				</div>
				
				<div class="products-list">
					<ul>
						<li><img src="images/mulu-img.jpg" alt=""><a href="#">e -目录<br>持续的企业延伸的《web</a></li>
						<li><img src="images/touzi-img.jpg" alt=""><a href="#" style="border:none;">投资指南 <br>持续的企业延伸的《web</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span4">	
			<!-- 公司历史 -->
			<div class="wendo-history">
				<ul>
					<li>
						<h3>公司历史 <span class="sum"> - </span></h3>
						<div style="display: none;">
							<p><a href="">BUSINESS INFO</a><br>持续的企业延伸的维伯,《介绍我</p>
							<img src="images/history-img.jpg" alt="">
						</div>
					</li>
					<li>
						<h3>公司历史<span class="sum"> + </span></h3>
						<div style="display: none;">
							<p><a href="">BUSINESS INFO</a><br>持续的企业延伸的维伯,《介绍我</p>
							<img src="images/history-img.jpg" alt="">
						</div>
					</li>
					<li>
						<h3>公司历史<span class="sum"> + </span></h3>
						<div style="display: block;">
							<p><a href="">BUSINESS INFO</a><br>持续的企业延伸的维伯,《介绍我</p>
							<img src="images/history-img.jpg" alt="">
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- 顶部 -->
	<footer>
		<div class="row">
			<div class="span6">
				<ul>
					<a href="">法律高地</a>
					<a href="">隐私政策</a>
					<a href="">电子邮件</a>
					<a href="">网站地图</a>
				<br>COPYRIGHT ⓒ WENGDO company. All rights reserved
				</ul>
			</div>
			<div class="span6 friend-links">
				<select name="" id="" style="float:right">
						<option value="">友情链接</option>
						<option value="">Web资源网</option>
						<option value="">知园博客</option>
						<option value="">绿叶学习网</option>
				</select>
			</div>
		</div>
	</footer>
</div>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- bootstrap 表单验证插件 -->
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>

<!--  html前端表单验证js文件  -->
<script type="text/javascript" src="js/formValidator.js"></script>

<script type="text/javascript">
	
	/* ad图片轮播 */
	$('.carousel').carousel({
 		 interval: 2000 // in milliseconds
	})


	// 历史手风琴	
	var wengoHis=$(".wendo-history ul li h3");
	var Sum=wengoHis.find(".sum");
	var wendoHistory=$(".wendo-history ul li").find("div");
    wengoHis.click(function()
    {
    	var wengoHisIndex=$(".wendo-history ul li h3").index($(this));
        wendoHistory.eq(wengoHisIndex).slideDown().parent().siblings().find("div").slideUp();
    })

</SCRIPT>
</body>
</html>