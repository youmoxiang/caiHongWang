<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:47:"template/adminblue\System\albumPictureList.html";i:1510373033;s:28:"template/adminblue\base.html";i:1512444889;s:45:"template/adminblue\controlCommonVariable.html";i:1515231611;s:32:"template/adminblue\urlModel.html";i:1510819828;s:45:"template/adminblue\System\uploadAlbumImg.html";i:1512114660;s:34:"template/adminblue\pageCommon.html";i:1515372762;s:34:"template/adminblue\openDialog.html";i:1509523953;}*/ ?>
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
	
<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/album_list.css"/>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/plugin/jquery.searchableSelect.css"/>
<script src="__STATIC__/js/BootstrapMenu.min.js"></script>
<script src="ADMIN_JS/plugin/jquery.searchableSelect.js"></script>
<style type="text/css">
.album-intro {min-height: 52px;padding: 10px 0 10px 60px;border-bottom: 1px solid #e5e5e5;position: relative;z-index: 1;overflow: hidden;margin:0;}
.album-intro .album-name {font-size: 14px;color: #0072D2;height: 20px;margin:2px 10px;}
.album-intro .album-covers {line-height: 0;background-color: #FFF;text-align: center;vertical-align: middle;display: table-cell;width: 48px;height: 48px;border: solid 1px #e5e5e5;overflow: hidden;position: absolute;z-index: 1;top: 12px;left: 0;}
.album-intro .album-info {font-size: 12px;color: #999;width: 75%;height: 32px;overflow: hidden;}
.album-intro .album-covers img {max-width: 48px;max-height: 48px;margin-top: expression(48-this .height/ 2);}
.search-form {color: #999;width: 100%;border-bottom: solid 1px #e5e5e5;}
.search-form th {font-size: 12px;line-height: 22px;text-align: right;width: 50px;padding: 8px 8px 8px 0;font-weight: normal;}
.search-form td {text-align: left;padding: 8px 0;}
#albumList li dl dt .checkbox {position: absolute;z-index: 2;top: 15px;left: 15px;}
#albumList li dl dt .editInput1 {font-size: 12px;font-weight: bold;line-height: 20px;color: #555;background-color: transparent;width: 140px;height: 20px;border: 0;position: absolute;z-index: 1;top: 180px;left: 15px;}
#albumList li dl dt span {font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 16px;height: 16px;position: absolute;z-index: 2;top: 182px;right: 10px;}
#albumList li dl dd.buttons .upload-btn {width: 85px;height: 25px;display: inline-block;zoom: 1;margin:0;float:left;}
.ncsc-picture-list li dl dd.buttons a {float:left;}
#albumList li{height:294px;width:198.2px;}
.upload-btn .input-file{left:0;}
#albumList li dl{margin:0;}
#albumList li dl dd.buttons{height:initial;left:19px;}
.right-side-operation ul li{position: relative;}
.modal-body{overflow: inherit;}
.dropdown.bootstrapMenu{z-index:4000 !important;}
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
					
<li>
	<a id="open_uploader"><i class="fa fa-cloud-upload"></i>上传图片</a>
	<input type="file" id="fileupload" class="input-file" name="file_upload" multiple="multiple"/>
	<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script> 
<script type="text/javascript" src="__STATIC__/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="__STATIC__/js/jquery.fileupload.js" charset="utf-8"></script>
<div class="upload-con" id="uploader" style="display:none;overflow:auto;height:350px;width:185px;">
	<div class="js-file-msg"></div>
	<div class="upload-pmgressbar js-file-loading"></div>
	<div class="upload-txt"><span>支持Jpg、Png格式，大小不超过1024KB的图片上传；浏览文件时可以按住ctrl或shift键多选。</span></div>
</div>
<script type="text/javascript">
$(function() {
	//鼠标触及区域li改变class
	var album_id = $("#album_id").val();
	var dataAlbum = {
		"album_id" : album_id,
		"type" : "1,2,3,4",
		'file_path' : UPLOADGOODS
	};
	// ajax 上传图片
	var upload_num = 0; // 上传图片成功数量
	$('#fileupload').fileupload({
		url: "<?php echo __URL('APP_MAIN/upload/photoalbumupload'); ?>",
		dataType: 'json',
		formData:dataAlbum,
		add: function (e,data) {
			//显示上传图片框
			if($("#uploader").is(":hidden")){
				$("#uploader").show();
			}
			$.each(data.files, function (index, file) {
				$('<div data-name="' + file.name + '"><p>'+ file.name +'</p><p class="loading"></p></div>').appendTo('.js-file-loading');
			});
			data.submit();
		},
		done: function (e,data) {
			var param = data.result;
			$this = $('div[data-name="' + param.origin_file_name + '"]');
			$this.fadeOut(3000, function(){
				$(this).remove();
				if ($('.js-file-loading').html() == '') {
					$("#uploader").hide();
					LoadingInfo(1);
				}
			});
			if(param.state > 0){
				upload_num++;
				$('.js-file-msg').html('<i class="icon-ok-sign">'+'</i>'+'成功上传'+upload_num+'张图片');
			} else {
				showTip(param.message,"warning");
				$this.find('.loading').html(param.message).removeClass('loading');
			}
		}
	});
});
</script>
</li>

					
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
			
<input type="hidden" id="album_id" value="<?php echo $album_id; ?>" />
<dl class="album-intro">
	<dt class="album-name"><?php echo $album_name; ?></dt>
	<dd class="album-covers">
		<img src="ADMIN_IMG/album/album_cover_default.png" id="album_cover" >
	</dd>
	<dd class="album-info"></dd>
</dl>
<table class="search-form">
	<tbody>
		<tr>
			<th style="width: 70px;">批量处理</th>
			<td>
				<a href="javascript:void(0);" onclick="checkAll()">全选</a>
				<a href="javascript:void(0);" onclick="uncheckAll()">取消</a>
				<a href="javascript:void(0);" onclick="switchAll()">反选</a>
				<a href="javascript:void(0);" onclick="submit_form('del')">删除</a>
				<a href="javascript:void(0);" onclick="submit_form('changealbum')">转移相册</a>
			</td>
			<th>排序方式</th>
			<th>
				<select id="is_use" onchange="LoadingInfo(1);" class="select-common">
					<option value="0">全部</option>
					<option value="1">未使用</option>
				</select>
			</th>
		</tr>
	</tbody>
</table>
<div class="ncsc-picture-list">
	<div class="alert alert-info">
		<strong>注：在使用‘替换上传’功能时，请保持图片的扩展名与被替换图片相同。</strong>
	</div>
	<ul id="albumList"></ul>
</div>
<input type="hidden" id="album_cover_id" value="<?php echo $album_cover; ?>">
<input type="hidden" value="UPLOAD" id="op"/>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<!-- 相册转移  -->
<div class="modal fade hide" id="change_album_class" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>相册转移</h3>
			</div>
			<div class="modal-body">
				<div class="dislog-style">
					<input type="hidden" id="change_pic_id" />
					<ul>
						<li>
							<span>选择相册：</span>
							<select style="display: none;" id="change_album_id"></select>
							<input type="text" id="selected_album_class" style="padding:0;margin:0;opacity: 0;position: absolute;"/>
						</li>
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="changeAlbumClass();">修改</button>
				<button type="button" class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

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

<script type="text/javascript">
//当前可搜索的下拉选项框
var curr_searchable_select = null;
$(function(){

	getAlbumClassListByAlbumPicture();
	curr_searchable_select = $('#change_album_id').searchableSelect();
	$(".searchable-select-input").live("keyup",function(){
		if($(this).val().length>100){
			showTip("查询限制在100个字符以内","warning");
			return;
		}
		if($(this).attr("data-value") != $(this).val()){
			$(this).attr("data-value",$(this).val());
			getAlbumClassListByAlbumPicture($(".searchable-select-holder").text(),$(this).val());
		}
	});

	//右键复制选择的相册
	var menu = new BootstrapMenu('.searchable-select-holder', {
		actions: [{
		name: '复制',
		onClick: function() {
			var brand_name = $('#change_album_id option:selected').text();
			$("#selected_album_class").val(brand_name);
			var copy_content = document.getElementById('selected_album_class');
			copy_content.select();
			document.execCommand("Copy");
			showTip("复制成功",'success');
		}
		}]
	});

});

function LoadingInfo(page_index) {
	var album_id = $("#album_id").val();
	var album_cover = $("#album_cover_id").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/system/albumpicturelist'); ?>",
		data : { "page_index" : page_index, "page_size" : $("#showNumber").val(), "album_id" : album_id, "is_use" : $("#is_use").val() },
		success : function(data) {
			var html = '';
			if (data["data"].length > 0) {
				for (var i = 0; i < data["data"].length; i++) {
					if(album_cover == "" ){
						if(i == 0) $("#album_cover").attr("src",__IMG(data["data"][i]["pic_cover"]));
					}else if(data["data"][i]["pic_id"] == album_cover){
						$("#album_cover").attr("src",__IMG(data["data"][i]["pic_cover"]));
					}
					if(i==0||i%8==0){
						html += '<li style="opacity: 1;border-width:0 1px 1px 1px;"><dl><dt><div class="picture"><a href="javascript:void(0);"> <img id="img_'+data["data"][i]["pic_id"]+'" src="'+__IMG(data["data"][i]["pic_cover"])+'"></a></div>';
					}else{
						html += '<li style="opacity: 1;border-width:0 1px 1px 0;"><dl><dt><div class="picture"><a href="javascript:void(0);"> <img id="img_'+data["data"][i]["pic_id"]+'" src="'+__IMG(data["data"][i]["pic_cover"])+'"></a></div>';
					}
					html += '<input id="C'+data["data"][i]["pic_id"]+'" name="id[]" value="'+data["data"][i]["pic_id"]+'" type="checkbox" class="checkbox">';
					html += '<input id="' + data["data"][i]["pic_id"] + '" class="editInput1" readonly="" ondblclick="$(this).unbind();_focus($(this));" value="'+data["data"][i]["pic_name"]+'" title="双击名称可以进行编辑" style="cursor:pointer;">';
					html += '<span ondblclick="_focus($(this).prev());" title="双击名称可以进行编辑"><i class="icon-pencil"></i></span></dt><dd class="date"><p>上传时间：'
							+ data["data"][i]["upload_time"]
							+ '</p><p>原图尺寸：'
							+ data["data"][i]["pic_size"]
							+ '</p></dd>';
					html += '<dd class="buttons"><a href="javascript:void(0);">';
					html += '<input accept="image/*" type="file" name="file_upload" id="file_'+data["data"][i]["pic_id"]+'" class="input-file" size="1" data-pic_id = "'+data["data"][i]["pic_id"]+'" onchange="change_photo(this);" style="left:0;">';
					html += '<div class="upload-button">替换上传</div></a>';
					html += '<a href="javascript:;" nc_type="dialog" dialog_title="转移相册" uri="rfghfdg" onclick="changeAlbumClassBox('+ data["data"][i]["album_id"]
						+ ','+ data["data"][i]["pic_id"]+ ')">转移相册</a> <a href="javascript:;" onclick="changeAlbumClassCover('
							+ data["data"][i]["pic_id"]+ ')">设为封面</a> <a href="javascript:;" onclick="deletePicture('+data["data"][i]["pic_id"]+')" >删除图片</a> <a href="JavaScript:void(0);" onclick="JScopy('+data["data"][i]["pic_id"]+');" style="width:75px;">复制图片路径</a> <input type="text" style = "width:146px;margin-top: 10000px;border: 0px;" id="hidden_img_'+data["data"][i]["pic_id"]+'" value="'+__IMG(data["data"][i]["pic_cover"])+'"/></dd></dl></li>';
				}
			} else {
				html += '暂无符合条件的数据记录';
			}
			$("#albumList").html(html);
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}

//查询相册
function getAlbumClassListByAlbumPicture(album_name,search_name) {
	var page_index = 1;
	var page_size = 20;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/system/getAlbumClassListByAlbumPicture'); ?>",
		data : { "page_index" : page_index, "page_size" : page_size, "album_name" : album_name, "search_name" : search_name },
		success : function(res){
			var html = "";
			if(res.total_count>0){
				for(var i=0;i<res['data'].length;i++){
					html += '<option value="' + res['data'][i].album_id + '">' + res['data'][i].album_name + '</option>';
				}
			}else{
				html += '<option value="-1">暂无相册</option>';
			}
			$("#change_album_id").html(html);
			//更新搜索结果
			$(".searchable-select-items .searchable-select-item").remove();
			curr_searchable_select.buildItems();
		}
	});
}

//全选
function checkAll() {
	$('input[type="checkbox"]').each(function() {
		$(this).attr('checked', true);
	});
}

// 取消
function uncheckAll() {
	$('input[type="checkbox"]').each(function() {
		$(this).attr('checked', false);
	});
}

// 反选
function switchAll() {
	$('input[type="checkbox"]').each(function() {
		$(this).attr('checked', !$(this).attr('checked'));
	});
}

//批量操作
function submit_form(type) {
	var id = '';
	$('input[type=checkbox]:checked').each(function() {
		if (!isNaN($(this).val())) {
			id = $(this).val() + "," + id;
		}
	});
	if (id == '') {
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			contentText:"请选择图片"
		});
		return false;
	} else {
		id = id.substring(0, id.length - 1);
	}
	if (type == 'del') {
		deletePicture(id);
	}else if(type == "changealbum"){
		var album_id = $("#album_id").val();
		changeAlbumClassBox(album_id,id);
	}
}

//删除图片
function deletePicture(pic_id_array) {
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				$.ajax({
					type : "post",
					url : "<?php echo __URL('ADMIN_MAIN/system/deletepicture'); ?>",
					data : { "pic_id_array" : pic_id_array.toString() },
					success : function(data) {
						if (data['code'] > 0) {
							$( "#dialog" ).dialog({
								buttons: {
									"确定": function() {
										$(this).dialog('close');
									}
								},
								contentText:data["message"],
								time:3
							});
							LoadingInfo(getCurrentIndex(pic_id_array,'#albumList'));
						}else{
							$( "#dialog" ).dialog({
								buttons: {
									"确定,#e57373": function() {
										$(this).dialog('close');
									}
								},
								time:3,
								contentText:"部分图片正在商品中使用，没有被删除"
							});
							LoadingInfo(getCurrentIndex(pic_id_array,'#albumList'));
						}
					}
				})
			},
			"取消,#e57373":function() {
				$(this).dialog('close');
			}
		},
		contentText:"您确定要删除已选中图片吗?<br/>提示：已使用图片将不会被删除!"
	});
}

//图片上传
function imgUpload(event) {
	var fileid = "uploadImg";
	var album_id = $("#album_id").val();
	var data = {
		"album_id" : album_id,
		"type" : "1,2,3,4",
		'file_path' : UPLOADGOODS
	};
	uploadFile(fileid,data,function(res){
		if(res.code>0){
			showTip(res.message,"success");
			LoadingInfo(getCurrentIndex(album_id,'#albumList'));
		}else{
			showTip(res.error,"success");
		}
	});
}

/**
 * 上传图片弹出框信息
 */
function addImgBox() {
	if ($("#uploader").is(":hidden")) {
		$("#uploader").show();
	} else {
		$("#uploader").hide();
	}
}

//替换上传
function change_photo(event){
	var fileid = $(event).attr("id");
	var pic_id = $(event).data("pic_id");
	var album_id = Number($("#album_id").val());
	var data = {
		"album_id" : album_id,
		"type" : "1,2,3,4",
		"pic_id":pic_id,
		'file_path' : UPLOADGOODS
	};
	uploadFile(fileid,data,function(res){
		if(res.code>0){
			LoadingInfo(getCurrentIndex(album_id,'#albumList'));
			showTip(res.message,"success");
		}else{
			showTip(res.error,"success");
		}
	});
}

//控制图片名称input焦点可编辑
function _focus(o){
	var name;
	obj = o;
	name=obj.val();
	obj.removeAttr("readonly");
	obj.attr('class','editInput2');
	obj.select();
	obj.blur(function(){
		if(name != obj.val()){
			_save(this);
		}else{
			obj.attr('class','editInput1');
			obj.attr('readonly','readonly');
		}
	});
}

function _save(obj){
	var pic_id = obj.id;
	var pic_name = obj.value;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/system/modifyalbumpicturename'); ?>",
		data : { "pic_id" : pic_id, "pic_name":pic_name },
		success : function(data) {
			if (data["code"] > 0) {
				LoadingInfo(1);
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#e57373": function() {
							$(this).dialog('close');
						}
					},
					contentText:data["message"],
					time:3,
				});
			}else{
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#e57373": function() {
							$(this).dialog('close');
						}
					},
					contentText:data["message"]
				});
			}
		}
	})
}

function changeAlbumClassBox(album_id,pic_id){
	$('#change_album_class').modal('show');
	$("#change_album_id").val(album_id);
	$("#change_pic_id").val(pic_id);
}

function changeAlbumClass(){
	var pic_id = $("#change_pic_id").val();
	var album_id = $("#change_album_id").val();
	if(pic_id == null || album_id == null || album_id == -1){
		showTip("缺少数据","warning");
		return;
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/system/modifyalbumpictureclass'); ?>",
		data : { "pic_id" : pic_id, "album_id":album_id },
		success : function(data) {
			if (data["code"] > 0) {
				$('#change_album_class').modal('hide');
				LoadingInfo(1);
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#66BB6A": function() {
							$(this).dialog('close');
						}
					},
					contentText:data["message"],
					time:3,
				});
			}else{
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#66BB6A": function() {
							$(this).dialog('close');
						}
					},
					contentText:data["message"]
				});
			}
		}
	})
}
/**
复制图片路径
*/
function JScopy(id){
	var url = $("#img_"+id).attr('src');
	$("#hidden_img_"+id).val(url); 
	var iurl = document.getElementById('hidden_img_'+id);
	iurl.select();
	document.execCommand("Copy");
	showTip("复制成功",'success');

}
function changeAlbumClassCover(pic_id){
	var album_id = $("#album_id").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/system/modifyalbumclasscover'); ?>",
		data : { "pic_id" : pic_id, "album_id":album_id },
		success : function(data) {
			if (data["code"] > 0) {
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#66BB6A": function() {
							$(this).dialog('close');
						}
					},
					contentText:data["message"],
					time:3,
				});
			}else{
				$( "#dialog" ).dialog({
					buttons: {
						"确定,#66BB6A": function() {
							$(this).dialog('close');
						}
					},
					contentText:data["message"]
				});
			}
		}
	});
}
</script>

</body>
</html>