<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo site_url()?>">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>后台模板</title>
		<link rel="stylesheet" href="assets/css/amazeui.css" />
		<link rel="stylesheet" href="assets/css/core.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/index.css" />
		<link rel="stylesheet" href="assets/css/admin.css" />
		<link rel="stylesheet" href="assets/css/page/typography.css" />
		<link rel="stylesheet" href="assets/css/page/form.css" />
		<link rel="stylesheet" href="assets/css/component.css" />
		<style>
			#information{
				width: 800px;
				height: 600px;
				font-size: 20px;
				margin: 100px 400px;
				border: 1px solid #ccc;
				border-radius: 10px;
			}
			#title{
				/*margin：0 auto;*/
				text-align:center;
				/*margin-left:200px;*/
				font-size: 40px;
			}
		</style>
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
                <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
		</header>
		<!-- end page -->
		
		
		<div class="admin">
			<!--<div class="am-g">-->
		<!-- ========== Left Sidebar Start ========== -->
		<!--<div class="left side-menu am-hide-sm-only am-u-md-1 am-padding-0">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 548px;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 548px;">-->
                  <!-- sidebar start -->
				  <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
				    <div class="am-offcanvas-bar admin-offcanvas-bar">
				    	<!-- User -->
						<div class="user-box am-hide-sm-only">
	                        <div class="user-img">
	                            <img src="assets/img/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
	                        </div>
	                        <h5><a href="#">Mat Helme</a> </h5>
	                        <ul class="list-inline">
	                            <li>
	                                <a href="#">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a>
	                            </li>
	
	                            <li>
	                                <a href="#" class="text-custom">
	                                    <i class="fa fa-cog" aria-hidden="true"></i>
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                    <!-- End User -->
	                     <ul class="am-list admin-sidebar-list">
						    <li><a href="index.html"><span class="am-icon-home"></span> 首页</a></li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-table"></span> 信息 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
						        <li class='basic-information'><a href="html/table_basic.html" class="am-cf"> 基本信息</span></a></li>
						        <li class="crime-information"><a href="html/table_complete.html">犯罪信息</a></li>
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><i class="am-icon-line-chart" aria-hidden="true"></i> 统计图表 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav2">
						        <li><a href="html/chart_line.html" class="am-cf"> 折线图</span></a></li>
						        <li><a href="html/chart_columnar.html" class="am-cf"> 柱状图</span></a></li>
						        <li><a href="html/chart_pie.html" class="am-cf"> 饼状图</span></a></li>
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 表单 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav5">
						        <li><a href="html/form_basic.html" class="am-cf"> 基本表单</a></li>
						        <li><a href="html/form_validate.html">表单验证</a></li>   
						      </ul>
						    </li>
						  </ul>
				</div>
				  </div>
				  <!-- sidebar end -->
    
				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->
		
		
		
	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div id="basic-information-table">
				<h1 id="title">基本信息</h1>
				<div id="information">
					<table class="am-table am-table-bordered am-table-striped am-table-compact">
						  <tbody>
						  <tr>
						    <td>姓名：</td>
						    <td>张三</td>
						  </tr>
						  <tr>
						    <td>性别</td>
						    <td>男</td>
						 
						  </tr>
						  <tr class="am-active">
						    <td>年龄</td>
						    <td>25</td>
						 
						  </tr>
						  <tr>
						    <td>政治面貌</td>
						    <td>团员</td>
						  
						  </tr>
						  <tr>
						    <td>籍贯</td>
						    <td>美国</td>
						    
						  </tr>
						  <tr class="am-active">
						    <td>学历</td>
						    <td>初中</td>
						    
						  </tr>
						  <tr>
						    <td>身高（厘米）</td>
						    <td>175</td>
						    
						  </tr>
						  <tr>
						    <td>体重（千克）</td>
						    <td>70</td>
						    
						  </tr>
						   <tr class="am-active">
						    <td>婚否</td>
						    <td>是</td>
						    
						  </tr>
						   <tr>
						    <td>是否有前科</td>
						    <td>否</td>
						    
						  </tr>
						   
						  </tbody>
						</table>
				</div>
			</div>
			
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>
		
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js" ></script>
		<script type="text/javascript" src="assets/js/blockUI.js" ></script>
		<script type="text/javascript" src="assets/js/charts/echarts.min.js" ></script>
		<script type="text/javascript" src="assets/js/charts/indexChart.js" ></script>
		<script>
			$('#your-slider').flexslider({
				  playAfterPaused: 8000,
				  smoothHeight: true, 
				  before: function(slider) {
				    if (slider._pausedTimer) {
				      window.clearTimeout(slider._pausedTimer);
				      slider._pausedTimer = null;
				    }
				  },
				  after: function(slider) {
				    var pauseTime = slider.vars.playAfterPaused;
				    if (pauseTime && !isNaN(pauseTime) && !slider.playing) {
				      if (!slider.manualPause && !slider.manualPlay && !slider.stopped) {
				        slider._pausedTimer = window.setTimeout(function() {
				          slider.play();
				        }, pauseTime);
				      }
				    }
				  }
			  // 设置其他参数
			});
			$('.basic-information').on('click',function{
				$('').hide();
				$('').show();
			})
		</script>

	</body>
	
</html>

