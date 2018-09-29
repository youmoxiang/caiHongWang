<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"template/adminblue\Wchat\addMedia.html";i:1510282064;s:28:"template/adminblue\base.html";i:1512444890;s:45:"template/adminblue\controlCommonVariable.html";i:1515231612;s:32:"template/adminblue\urlModel.html";i:1510819828;s:34:"template/adminblue\pageCommon.html";i:1515372762;s:34:"template/adminblue\openDialog.html";i:1509523954;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
	<link rel="shortcut  icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
	<style>
	.Switch_FlatRadius.On span.switch-open{background-color: #0072D2;border-color: #0072D2;}
	#copyright_meta a{color:#333;}
	</style>
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
	<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
	<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
	<script src="__STATIC__/js/common.js"></script>
	<script src="__STATIC__/js/seller.js"></script>
	<script src="__STATIC__/js/load_task.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<script src="ADMIN_JS/jquery-ui.min.js"></script>
	<script src="ADMIN_JS/ns_tool.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
	<script>

	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var ADDONS = "__ADDONS__";
	var STATIC = "__STATIC__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
</script>
	
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<script type="text/javascript" charset="utf-8" src="ADMIN_JS/ueditor/ueditor.config.common.js"></script>
<script type="text/javascript" charset="utf-8" src="ADMIN_JS/ueditor/ueditor.all.common.js"></script>
<style>
.media {max-width: 800px;margin: 0 auto;}
.media:after {content: "";display: table;clear: both;}
.img-text {display: block;width: 100%;line-height: 120px;background: #ececec;text-align: center;font-size: 22px;color: #c0c0c0;font-weight: 400;}
.media-left {width: 30%;margin-right: 2%;}
.media-right {width: 60%;background: #f8f8f8;border: 1px solid #d3d3d3;border-radius: 5px;padding: 15px;}
.media-left, .media-right {float: left;}
.media-border {padding: 10px;border: 1px solid #d3d3d3;border-radius: 5px;}
.media-border-title {padding: 10px;border: 1px solid #d3d3d3;border-top-left-radius: 5px;border-top-right-radius: 5px;position: relative;}
.media-body {padding: 10px;border-bottom: 1px solid #d3d3d3;border-left: 1px solid #d3d3d3;border-right: 1px solid #d3d3d3;position: relative;}
.media-body:after {content: "";display: table;clear: both;}
.media-body p {width: 65%;float: left;overflow: hidden;text-overflow: ellipsis;}
.media-body .media-body-div {width: 30%;float: right;}
.media-body .media-body-div span {font-size: 16px;line-height: 62px;}
.media-body .media-plus {font-size: 22px;line-height: 62px;text-align: center;display: block;}
.actions{position: absolute;bottom: 0;right: 0;width: 100%;height: 100%;background-color: #e5e5e5;opacity: 0.4;color: #fff;text-align: right;z-index: 49;display: none;}
.actions span{display: inline-block;background-color: rgba(0, 0, 0, 0.8);padding: 0 5px;color: #fff;z-index: 50;margin-left: 5px;}
.edit, .del {cursor: pointer;}
.check-box{width: 10%;float: left;}
.editting{display:none;}
.action .editting{display:block;color:red;text-align:right;}
</style>

	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
	if(url == ''|| url == null){
		return 'SHOP_MAIN';
	}else{
		var str=url.substring(0, 1);
		if(str=='/' || str=="\\"){
			url=url.substring(1, url.length);
		}
		if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
			return 'SHOP_MAIN/'+url;
		}
		var action_array = url.split('?');
		//检测是否是pathinfo模式
		url_model = $("#niushop_url_model").val();
		if(url_model==1 || url_model==true){
			var base_url = 'SHOP_MAIN/'+action_array[0];
			var tag = '?';
		}else{
			var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
			var tag = '&';
		}
		if(action_array[1] != '' && action_array[1] != null){
			return base_url + tag + action_array[1];
		}else{
			return base_url;
		}
	}
}

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<article class="ns-base-article">

	<aside class="ns-base-aside">
		<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';"></div>
		<div class="ns-main-block">
			<header>
				<article class="ns-base-user">
					<div class="ns-head-portrait">
						<?php if($user_headimg != ''): ?>
						<img src="<?php echo __IMG($user_headimg); ?>"/>
						<?php else: ?>
						<img src="__STATIC__/blue/img/head_portrait_default.png"/>
						<?php endif; ?>
					</div>
					<div class="ns-base-info">
						<span>欢迎您：<?php echo $user_name; ?></span>
						<span>角色：<?php echo $group_name; ?></span>
					</div>
				</article>
				<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
				<a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>" title="安全退出">安全退出</a>
			</header>
			<nav>
				<ul>
					<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			<div style="height:50px;"></div>
			<div id="bottom_copyright">
				<footer>
					<img id="copyright_logo"/>
					<p>
						<span id="copyright_desc"></span>
						<br/>
						<a id="copyright_companyname" style="color: #333" target="_blank"></a>
						<br/>
						<span id="copyright_meta"></span>
					</p>
				</footer>
			</div>
		</div>
	</aside>
	
	<section class="ns-base-section">
		<header class="ns-base-header">
			<div class="ns-search">
				<img src="__STATIC__/blue/img/nav_menu.png" title="导航管理" class="nav-menu js-nav" />
				<div class="ns-navigation-management">
					<div class="ns-navigation-title">
						<h4>导航管理</h4>
						<span>x</span>
					</div>
					<div style="height:40px;"></div>
					<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
					<dl>
						<dt><?php echo $nav['data']['module_name']; ?></dt>
						<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
						<dd onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>';"><?php echo $nav_sub['module_name']; ?></dd>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</dl>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<i class="ns-vertical-bar"></i>
				<div class="ns-search-block">
					<i class="fa fa-search" title="搜索"></i>
					<span>搜索</span>
					<div class="mask-layer-search">
						<input type="text" id="search_goods" placeholder="搜索" />
						<a href="javascript:search();"><img src="__STATIC__/blue/img/enter.png"/></a>
					</div>
				</div>
			</div>
			<nav>
				<ul>
					<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
						<span><?php echo $per['module_name']; ?></span>
						<?php if($per['module_id'] == 10000): ?>
							<span class="is-upgrade"></span>
						<?php endif; ?>
					</li>
					
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
						<span><?php echo $per['module_name']; ?></span>
						<?php if($per['module_id'] == 10000): ?>
							<span class="is-upgrade"></span>
						<?php endif; ?>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			<div class="ns-base-tool">
				<div class="ns-help">
					<img src="__STATIC__/blue/img/user_admin_blue.png" width="30" >
					<!-- <i class="fa fa-question-circle-o"></i> -->
					<ul>
						<li title="前台首页" onclick="window.open('<?php echo __URL('SHOP_MAIN'); ?>')">
							<img src="__STATIC__/blue/img/home_pc.png"/>
							<a href="javascript:;">前台首页</a>
						</li>
						<li title="加入收藏" onclick="addFavorite()">
							<img src="__STATIC__/blue/img/add_favorites.png" />
							<a href="javascript:;">加入收藏</a>
						</li>
						<li title="清理缓存" onclick="delcache()">
							<img src="__STATIC__/blue/img/clear_the_cache.png"/>
							<a href="javascript:;">清理缓存</a>
						</li>
						<li title="退出登录" onclick="window.location.href='<?php echo __URL('ADMIN_MAIN/login/logout'); ?>'">
							<img src="__STATIC__/blue/img/loout.png"/>
							<a href="javascript:;">退出登录</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		
		
		
		<div style="position:relative;margin:10px 0;">
			<!-- 三级导航菜单 -->
			
			<nav class="ns-third-menu">
				<ul>
				<?php if(!(empty($child_menu_list[0]['superior_menu']) || (($child_menu_list[0]['superior_menu'] instanceof \think\Collection || $child_menu_list[0]['superior_menu'] instanceof \think\Paginator ) && $child_menu_list[0]['superior_menu']->isEmpty()))): ?>
					<li><span class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu_list[0]['superior_menu']['url']); ?>';" style="color: #0072D2;"><?php echo $child_menu_list['0']['superior_menu']['menu_name']; ?></span>&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;<span onmousemove="this.style.color='#333'"><?php echo $child_menu_list['0']['menu_name']; ?></span></li>
				<?php else: if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
						<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
					<?php else: ?>
						<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
			</nav>
			
			
			<div class="right-side-operation">
				<ul>
					
					
					<li <?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?>><a class="js-open-warmp-prompt"><i class="fa fa-info-circle"></i>&nbsp;提示</a></li>
					
				</ul>
			</div>
		</div>
		<!-- 操作提示 -->
		
		<div class="ns-warm-prompt" <?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?>>
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
					<i class="fa fa-info-circle"></i>
					<span>操作提示</span>
				</h4>
				<div style="font-size:12px;text-indent:18px;">
					
						<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
						<span><?php echo $leftitem['module_name']; ?></span>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>
		
		<div class="ns-main">
			
<div class="set-style">
	<dl>
		<dt>消息类型:</dt>
		<dd>
			<label class="check-box"><input type="radio" name="type" id="type1" value="1">&nbsp;文本</label>
			<label class="check-box"><input type="radio" name="type" id="type2" value="2">&nbsp;单图文</label>
			<label class="check-box"><input type="radio" name="type" id="type3" value="3" checked="checked">&nbsp;多图文</label>
		</dd>
	</dl>
</div>
<div class="set-style type1" style="display: none;">
	<dl>
		<dt>描述:</dt>
		<dd>
			<p>
				<textarea id="type1_desc" class="input-common"></textarea>
			</p>
			<p class="error">请输入模块描述</p>
		</dd>
	</dl>
</div>
<div class="type2 media" style="display: none;">
	<div class="media-left">
		<div class="media-border">
			<h5 class="type-title" style="overflow: hidden;text-overflow: ellipsis;">标题</h5>
			<div style="text-align:center;">
				<img class="type2-img" style="max-width:218px;max-height:120px;display:none;">
				<span class="img-text">封面图片</span>
			</div>
		</div>
	</div>
	<div class="media-right">
		<p> <span style="color:red;"> * </span> 标题 </p>
		<input style="width: 98%;" type="text" id="title" class="input-common">
		<p>作者（选填）</p>
		<input style="width: 98%;" type="text" id="author" class="input-common">
		<p><span style="color:red;"> *</span> 封面</p>
		<div>
			<div class="class-logo" style="background: #f8f8f8;">
				<p style="width: 270px; height: 150px;">
					<img id="imgLogo" style="max-width:270px;max-height:150px;">
				</p>
			</div>
			<p class="hint">
				<span style="color: orange;">建议使用宽900像素-高500像素的图片。</span>
			</p>
			<input type="hidden" id="type2-img-hidden" />
			<div class="upload-btn">
				<span>
					<input class="input-file" name="file_upload" id="uploadImg" type="file" onchange="imgUpload(this, 'type2-img', 'type2-img-hidden');">
					<input type="hidden" id="Logo"/>
				</span>
				<p><i class="fa fa-upload"></i>上传图片</p>
			</div>
		</div>
		<p></p>
		<p>
			<input type="checkbox" id="show_cover_pic" style="margin-top: -2px; margin-right: 5px;">
			<label for="show_cover_pic" style="font-weight: normal; display: inline-block;">封面图片显示在正文中</label>
		</p>
		<p><span style="color:red;"> *</span> 摘要</p>
		<p>
			<textarea id="desc" style="width: 98%;" class="input-common"></textarea>
		</p>
		<p class="error">请输入模块描述</p>
		<p><span style="color:red;"> *</span> 正文</p>
		<div class="controls" id="discripContainer">
			<textarea id="tareaProductDiscrip1" name="discripArea" class="input-common" style=" width: 100%; display: none;"></textarea>
			<script id="editor" type="text/plain" style="width: 100%; height: 100px;"></script>
			<span class="help-inline" style="display: none; color: red;">请输入商品描述</span>
		</div>
		<p></p>
		<p>原文链接</p>
		<input style="width: 98%;" type="text" id="content_source_url" >
	</div>
</div>
<div class="type3 media">
	<div class="media-left">
		<div class="media-border-title js-action action" onmouseover="show(this)"
			onmouseout="hide(this)" onclick="edit(this, 0)">
			<div style="position: relative;text-align:center;">
				<img class="type3-img-0" style="max-width:218px;max-height:120px;display:none;">
				<span class="img-text">封面图片</span>
				<h5 class="type3-title-0" style="position: absolute; bottom: 0; width: 100%; background: #bbb; color: #fff; margin: 0; padding: 5px 0;text-align:left;overflow: hidden;text-overflow: ellipsis;">标题</h5>
			</div>
			<div class="actions"><span class="edit">编辑</span></div>
			<span class="editting">编辑中</span>
			<input type="hidden" name="hidden0" id="title0">
			<input type="hidden" name="hidden0" id="author0">
			<input type="hidden" name="hidden0" id="cover0">
			<input type="hidden" name="hidden0" id="show_cover_pic0" value="0">
			<input type="hidden" name="hidden0" id="summary0">
			<input type="hidden" name="hidden0" id="content0">
			<input type="hidden" name="hidden0" id="content_source_url0">
		</div>
		<div class="media-body js-action" onmouseover="show(this)" onmouseout="hide(this)" onclick="edit(this, 1)">
			<p class="type3-title-1">标题</p>
			<div class="media-body-div">
				<img class="type3-img-1" style="max-width:62px;max-height:62px;display:none;">
				<span class="img-text">缩略图</span>
			</div>
			<div class="actions"><span class="edit">编辑</span></div>
			<span class="editting">编辑中</span>
			<input type="hidden" name="hidden1" id="title1">
			<input type="hidden" name="hidden1" id="author1">
			<input type="hidden" name="hidden1" id="cover1">
			<input type="hidden" name="hidden1" id="show_cover_pic1" value="0">
			<input type="hidden" name="hidden1" id="summary1">
			<input type="hidden" name="hidden1" id="content1">
			<input type="hidden" name="hidden1" id="content_source_url1">
		</div>
		<div class="media-body">
			<span class="media-plus"><a href="javascript:;"><i class="fa fa-plus"></i></a></span>
		</div>
	</div>
	<div class="media-right" id="dir" dir="0">
		<p><span style="color:red;"> * </span>标题</p>
		<input style="width: 98%;" type="text" id="form_title" onchange="changeElement('title')" class="input-common">
		<p>
		<p>作者</p>
		<input style="width: 98%;" type="text" id="form_author" onchange="changeElement('author')" class="input-common">
		<p><span style="color:red;"> * </span>
			封面<span></span>
		</p>
		<div>
			<div class="class-logo" style="background: #f8f8f8;">
				<p style="width: 270px; height: 150px;">
					<img id="imgLogo1" style="max-width:270px;max-height:150px;">
				</p>
			</div>
			<p class="hint">
				<span style="color: orange;">建议使用宽900像素-高500像素的图片。</span>
			</p>
			<div class="upload-btn">
				<span>
					<input class="input-file" name="file_upload" id="uploadImg1" type="file" onchange="imgUpload(this, 'type3-img-', 'cover');">
					<input type="hidden" id="Logo1"/>
				</span>
				<p><i class="fa fa-upload"></i>上传图片</p>
			</div>
		</div>
		<p></p>
		<p>
			<input type="checkbox" id="form_show_cover_pic" onchange="changeElement('show_cover_pic')" style="margin-top: -2px; margin-right: 5px;">
			<label for="show_cover_pic" style="font-weight: normal; display: inline-block;">封面图片显示在正文中</label>
		</p>
		<p><span style="color:red;"> * </span>摘要</p>
		<p>
			<textarea id="form_summary" class="input-common" style="width: 98%;" onchange="changeElement('summary')"></textarea>
		</p>
		<p class="error">请输入模块描述</p>
		<p><span style="color:red;"> * </span>正文</p>
		<div class="controls" id="discripContainer">
			<textarea id="tareaProductDiscrip" name="discripArea" class="input-common" style=" width: 100%; display: none; "></textarea>
			<script id="editor1" type="text/plain" style="width: 100%; height: 100px;"></script>
			<span class="help-inline" style="display: none; color: red;">请输入商品描述</span>
		</div>
		<p></p>
		<p>原文链接</p>
		<input style="width: 98%;" type="text" id="form_content_source_url" onchange="changeElement('content_source_url')">
	</div>
</div>
<div style="width:200px;margin:20px auto;">
<button class="btn-common btn-big" onclick="save();">提交</button>
</div>
<!-- 用 ，加载数据-->
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<!-- 我的图片 -->
<script src="ADMIN_JS/material_managedialog.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
UE.getEditor('editor1').addListener("selectionchange",function(){
	changeElement('content');
});
function changeElement(name){
	var dir = $("#dir").attr('dir');
	if(name == 'show_cover_pic'){
		if($("#form_"+name).prop("checked")){
			var form_show_cover_pic = 1;
		}else{
			var form_show_cover_pic = 0;
		}
		$("#"+name+dir).val(form_show_cover_pic);
	}else if(name == 'content'){
		var content = UE.getEditor('editor1').getContent();
		$("#"+name+dir).val(content);
	}else{
		$("#"+name+dir).val($("#form_"+name).val());
	}
	if(name == 'title'){
		if($("#form_"+name).val() == ''){
			$(".type3-title-"+dir).html('标题');
		}else{
			$("#form_"+name).val($("#form_"+name).val().substr(0,70));
			$(".type3-title-"+dir).html($("#form_"+name).val());
		}
	}
}
function edit(event, num){
	$(".js-action").removeClass('action');
	$(event).addClass('action');
	$("#dir").attr('dir',num);
	//获取 隐藏域中的值
	var title = $("#title"+num).val();
	var author = $("#author"+num).val();
	var cover = $("#cover"+num).val();
	var show_cover_pic = $("#show_cover_pic"+num).val();
	var summary = $("#summary"+num).val();
	var content = $("#content"+num).val();
	var content_source_url = $("#content_source_url"+num).val();
	//把 form 的值填进去
	$("#form_title").val(title);
	$("#form_author").val(author);
	$("#imgLogo1").attr('src','');	
	if(cover != ""){
		$("#imgLogo1").attr('src',__IMG(cover));
	}
	if(show_cover_pic == 1){
		$("#form_show_cover_pic").prop("checked","checked");
	}else{
		$("#form_show_cover_pic").prop("checked","");
	}
	
	$("#form_summary").val(summary);
	UE.getEditor('editor1').setContent(content);
	$("#form_content_source_url").val(content_source_url);
}
function save(){
	var type = $("input[type='radio'][name='type']:checked").val();
	if(type == 1){
		//文本提交
		var title = $("#type1_desc").val();
		var content = '';
		if(title == ''){
			showMessage('error', '内容不能为空');
			return false;
		}
	}else if(type == 2){
		// 单图文 提交
		var title = $("#title").val();
		var author = $("#author").val();
		var cover = $("#type2-img-hidden").val();
		if($("#show_cover_pic").prop("checked")){
			var show_cover_pic = 1;
		}else{
			var show_cover_pic = 0;
		}
		var summary = $("#desc").val();
		var content = UE.getEditor('editor').getContent();
		var content_source_url = $("#content_source_url").val();
		var contents = title+'`|`'+author+'`|`'+cover+'`|`'+show_cover_pic+'`|`'+summary+'`|`'+content+'`|`'+content_source_url;
		if(title == ''){
			showMessage('error', '标题不能为空');
			return false;
		}else if(cover == ''){
			showMessage('error', '请上传封面图片');
			return false;
		}else if(summary == ''){
			showMessage('error', '摘要不能为空');
			return false;
		}else if(content == ''){
			showMessage('error', '正文不能为空');
			return false;
		}
	}else if(type == 3){
		// 多图文提交
		var title = $("#title0").val();
		var contents = '';
		var num = $(".js-action").length;
		for(var i=0; i<num; i++){
			var content_new = '';
			$("input[name='hidden"+i+"']").each(function(){
				if($("input[name='hidden"+i+"']").eq(0).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的标题不能为空');
					return false;
				}else if($("input[name='hidden"+i+"']").eq(2).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的封面图片不能为空');
					return false;
				}else if($("input[name='hidden"+i+"']").eq(4).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的摘要不能为空');
					return false;
				}else if($("input[name='hidden"+i+"']").eq(5).val() == ""){
					showMessage('error', '第'+(i+1)+'篇文章的正文不能为空');
					return false;
				}else{
					content_new = content_new +'`|`'+ $(this).val();
				}
			});
			content_new = content_new.substring(3);
			contents = contents +'`$`'+ content_new;
		}
		contents = contents.substring(3);
	}else{
		showMessage('error', '请选择消息类型');
		return false;
	}
	//类型,标题,content
	//content = 标题,作者,封面图片,显示在正文,摘要,正文,链接地址;标题,作者,封面图片,显示在正文,摘要,正文,链接地址
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/wchat/addmedia'); ?>",
		data : { "type" : type, "title" : title, "content" : contents },
		success : function(data) {
			if(data['code'] > 0){
				showMessage('success', data['message'], "<?php echo __URL('ADMIN_MAIN/wchat/materialmessage'); ?>");
			}else{
				showMessage('error', data['message']);
			}
		}
	});
}

$(".media-plus").click(function() {
	var num = $(this).parents(".media-left").find(".media-body").length;
	if (num > 7) {
		showMessage('error', '最多只可以加入8条图文消息。');
		return false;
	}
	var html = '';
	html += '<div class="media-body js-action" onmouseover="show(this)" onmouseout="hide(this)" onclick="edit(this, '+num+')">';
	html += '<p class="type3-title-'+num+'">标题</p><div class="media-body-div"><img class="type3-img-'+num+'" src="" style="max-width:62px;max-height:62px;display:none;"><span class="img-text">缩略图</span></div>';
	html += '<div class="actions"><span class="edit">编辑</span><span class="del" onclick="removeMedia(this)">删除</span></div>';
	html += '<span class="editting">编辑中</span>';
	html += '<input type="hidden" name="hidden'+num+'" id="title'+num+'">';
	html += '<input type="hidden" name="hidden'+num+'" id="author'+num+'">';
	html += '<input type="hidden" name="hidden'+num+'" id="cover'+num+'">';
	html += '<input type="hidden" name="hidden'+num+'" id="show_cover_pic'+num+'" value="0">';
	html += '<input type="hidden" name="hidden'+num+'" id="summary'+num+'">';
	html += '<input type="hidden" name="hidden'+num+'" id="content'+num+'">';
	html += '<input type="hidden" name="hidden'+num+'" id="content_source_url'+num+'">';
	html += '</div>';
	$(this).parents(".media-left").find(".media-body").eq(num - 2).after(html);
});

function removeMedia(event){
	$(event).parents(".media-body").remove();
}

//图片上传
function imgUpload(event, imgsrc, imghidden) {
	if(imghidden == 'cover'){
		var dir = $("#dir").attr('dir');
		imgsrc = imgsrc+dir;
		imghidden = imghidden+dir;
	}
	var fileid = $(event).attr("id");
	var str = $(event).next().attr("id");
	var url = 'UPLOAD_URL';
	var path = '__UPLOAD__';
	var result='';
	var imgpath = "#img"+str;
	var imgval = "#"+str;
	var data = { 'file_path' : UPLOADCOMMON };
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("."+imgsrc).attr("src",__IMG(res.data));
			$("."+imgsrc).show();
			$("."+imgsrc).next(".img-text").hide();
			$("#"+imghidden).val(res.data);
			$(imgpath).attr("src",__IMG(res.data));
			$(imgval).val(res.data);
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
}

$("#title").keyup(function(){
	
	if($(this).val() == ''){
		$(this).parents(".media").find("h5.type-title").html('标题');
	}else{
		$(this).val($(this).val().substr(0,70));
		$(this).parents(".media").find("h5.type-title").html($(this).val());
	}
});

$("#author").keyup(function(){
	$(this).val($(this).val().substr(0,45));
});

//回调显示图片
function PopUpCallBack(id, src) {
	var idArr, srcArr;
	if (id.indexOf(",")) {
		idArr = id.split(',');
		srcArr = src.split(',');
	} else {
		idArr = new Array(id);
		srcArr = new Array(src);
	}
	//商品详情
	for (var i = 0; i < srcArr.length; i++) {
		var description = "<img src='"+__IMG(srcArr[i])+"' />";
		if($("input[name = type]:checked").val() == 3){
			ue1.setContent(description, true);
		}else if($("input[name = type]:checked").val() == 2){
			ue.setContent(description, true);
		}
	}
}
//点击消息类型  切换表单
$("input[type=radio][name='type']").click(function(){
	var type = $(this).val();
	$(".type1").hide();
	$(".type2").hide();
	$(".type3").hide();
	$(".type"+type).show();
});
var ue = UE.getEditor('editor',{scaleEnabled:false});
var ue1 = UE.getEditor('editor1',{scaleEnabled:false});
function show(event) {
	$(event).children('.actions').show();
}
function hide(event) {
	$(event).children('.actions').hide();
}
</script>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
 	//console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
 			//console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

 		//console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
//		console.error(e);
 		//console.log("当前页面没有分页，进行还原操作");
 		//console.log($.cookie('page_cookie'));
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
</article>
	
<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="inner"></div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;top:50%;margin-top:-180.5px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0" style="width: 160px;"><span class="color-red">*</span>原密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1" style="width: 160px;"><span class="color-red">*</span>新密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2" style="width: 160px;"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $web_popup_title; ?>';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#51A351": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
$(function(){
	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	//搜索展开
	$(".ns-search-block").hover(function(){
		if($(this).children(".mask-layer-search").is(":hidden")) $(this).children(".mask-layer-search").fadeIn(300);
	},function(){
		if($(this).children(".mask-layer-search").is(":visible")) $(this).children(".mask-layer-search").fadeOut(300);
	});
	
	$(".ns-base-tool .ns-help").hover(function(){
		if($(this).children("ul").is(":hidden")) $(this).children("ul").fadeIn(250);
	},function(){
		if($(this).children("ul").is(":visible")) $(this).children("ul").fadeOut(250);
	});
	
});

function addFavorite() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
}

</script>

</body>
</html>