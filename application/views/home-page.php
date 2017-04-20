<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<base href="<?php echo site_url()?>">
		<link rel="stylesheet" href="assets/css/core.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/amazeui.css" />
		<link rel="stylesheet" href="assets/css/component.css" />
		<link rel="stylesheet" href="assets/css/page/form.css" />
		<style>
		.warpper{
			width: 1170px;
			margin: 0 auto;
		}
		.am-slider{
			width: 500px;
			height: 300px;
		}
		.am-slides{
			width: 100%;
			height: 100%;
		}
		</style>
	</head>
	<body>
	<header class="am-topbar am-topbar-inverse">
  <h1 class="am-topbar-brand">
    <a href="#">社区矫正系统</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="#">个人中心</a></li>
      <li><a href="#">项目</a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          下拉 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li class="am-dropdown-header">标题</li>
          <li><a href="#">1. 去月球</a></li>
          <li class="am-active"><a href="#">2. 去火星</a></li>
          <li><a href="#">3. 还是回地球</a></li>
          <li class="am-disabled"><a href="#">4. 下地狱</a></li>
          <li class="am-divider"></li>
          <li><a href="#">5. 桥头一回首</a></li>
        </ul>
      </li>
    </ul>

    <!-- <form class="am-topbar-form am-topbar-left am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
      </div>
    </form> -->

    <div class="am-topbar-right">
      <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
        <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle" data-am-dropdown-toggle>其他 <span class="am-icon-caret-down"></span></button>
        <ul class="am-dropdown-content">
          <li><a href="#">注册</a></li>
          <li><a href="#">随便看看</a></li>
        </ul>
      </div>
    </div>

    <div class="am-topbar-right">
      <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</button>
    </div>
  </div>
</header>
		<div class="warpper">
			<div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{playAfterPaused: 8000,
				  smoothHeight: true}'>
			  <ul class="am-slides">
			      <li>
			        	<img src="assets/carousel/carousel1.jpg">
			      </li>
			      <li>
			        	<img src="assets/carousel/carousel2.jpg">
			      </li>
			      <li>
			        	<img src="assets/carousel/carousel3.jpg">
			      </li>
			      <li>
			        	<img src="assets/carousel/carousel4.jpg">
			      </li>
			      <li>
			        	<img src="assets/carousel/carousel5.jpg">
			      </li>
			  </ul>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js" ></script>
		<script type="text/javascript" src="assets/js/blockUI.js" ></script>
		<script type="text/javascript" src="assets/js/charts/echarts.min.js" ></script>
		<script type="text/javascript" src="assets/js/charts/indexChart.js" ></script>
		<script>
			$('.am-slider').flexslider({
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
		</script>
	</body>
</html>
