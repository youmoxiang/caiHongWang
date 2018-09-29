<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:41:"template/adminblue\Goods\recycleList.html";i:1508473857;s:28:"template/adminblue\base.html";i:1512444889;s:45:"template/adminblue\controlCommonVariable.html";i:1515231611;s:32:"template/adminblue\urlModel.html";i:1510819828;s:34:"template/adminblue\pageCommon.html";i:1515372762;s:34:"template/adminblue\openDialog.html";i:1509523953;}*/ ?>
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
	
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<style type="text/css">
#productTbody td{border: 0;}
.tr-title td{background: #e4f2ff !important;}
.table-title th{padding: 10px;border-bottom: 1px solid #e5e5e5;font-weight: normal;background: #F3F1F1 !important;}
.a-pro-view-img {float: left;}
.thumbnail-img {width: 60px;margin-right: 10px;}
.cell i {display: block;}
.remodal-bg.with-red-theme.remodal-is-opening,.remodal-bg.with-red-theme.remodal-is-opened {filter: none;}
.remodal-overlay.with-red-theme {background-color: #f44336;}
.remodal.with-red-theme {background: #fff;}
input[type="radio"], input[type="checkbox"] {margin: -1px 5px 0;margin-left:0px;}
.edit-group{border-bottom: 1px solid #ebebeb;margin-bottom:10px;}
.edit-group label{font-weight:normal;}
.edit-group-title{height:15px;line-height:15px;width:140px;margin-top:3px;margin-bottom:3px;color:#0072D2;}
.edit-group-button{border-color: #3283fa;border: 1px solid #bbb;height: 26px;line-height: 24px;padding: 0 5px;}
.group-button-bg{background: #3283fa;color: #fff;}
.div-pro-view-name {width: 100%;min-height: 60px;}
i.hot,i.recommend,i.new{font-size:12px;margin-right:5px;font-style:normal;color:#fff;background-color:#E84C3D;border-radius:2px;padding:1px 2px;}
.icon-qrcode:before {content: "\f029";}
[class^="icon-"]:before, [class*=" icon-"]:before {text-decoration: inherit;display: inline-block;speak: none;}
[class^="icon-"], [class*=" icon-"] {font-family: FontAwesome;font-weight: normal;font-style: normal;text-decoration: inherit;-webkit-font-smoothing: antialiased;}
.goodsCategory{width: 218px;height: 300px;border: 1px solid #CCCCCC;position: absolute;z-index: 100;background: #fff;right: 530px;display: none;overflow-y: auto;top: 44px;}
.goodsCategory::-webkit-scrollbar{width: 3px;} 
.goodsCategory::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);border-radius: 10px;background-color: #f5f5f5;}
.goodsCategory::-webkit-scrollbar-thumb{height: 20px;border-radius: 10px;-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);background-color: #ddd;}
.goodsCategory ul{height: 280px;margin-top: -2px;margin-left: 0;}
.goodsCategory ul li{text-align: left;padding:0 15px;line-height: 30px;}
.goodsCategory ul li i{float: right;line-height: 30px;}
.goodsCategory ul li:hover{cursor: pointer;}
.goodsCategory ul li:hover,.goodsCategory ul li.selected{background: #00C0FF;color: #fff;}
.two{right: 311px;border-left:0;}
.three{right: 112px;width: 198px;border-left:0;}
.selectGoodsCategory{width: 218px;height: 45px;border:1px solid #CCCCCC;position: absolute;z-index: 100;right: 530px;margin-top: 302px;border-collapse: collapse;background: #fff;display: none;}
.selectGoodsCategory a{display: block;height: 30px;width: 100px;text-align: center;color: #fff;line-height: 30px;margin:8px;background: #00C0FF;text-decoration:none;}
input[type=number] {-moz-appearance:textfield;}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}
.table th, .table td {vertical-align: middle;}
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
			
<div class="js-mask-category" style="display:none;background: rgba(0,0,0,0);position:fixed;width:100%;height:100%;top:0;left:0;right:0;bottom:0;z-index:90;"></div>
<table class="mytable">
	<tr>
		<th style="line-height:33px;position:relative;">
			商品分类：
			<input type="text" placeholder="请选择商品分类" id="goodsCategoryOne" is_show="false" class="input-common">
			<div class="goodsCategory one">
				<ul>
					<?php if(is_array($oneGoodsCategory) || $oneGoodsCategory instanceof \think\Collection || $oneGoodsCategory instanceof \think\Paginator): $i = 0; $__LIST__ = $oneGoodsCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="js-category-one" category_id="<?php echo $vo['category_id']; ?>">
						<span><?php echo $vo['category_name']; ?></span>
						<?php if($vo['is_parent'] == 1): ?>
							<i class="fa fa-angle-right fa-lg"></i>
						<?php endif; ?>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="goodsCategory two" style="border-left:0;">
				<ul id="goodsCategoryTwo"></ul>
			</div>
			<div class="goodsCategory three">
				<ul id="goodsCategoryThree"></ul>
			</div>
			<div class="selectGoodsCategory">
				<a href="javascript:;" id="confirmSelect" style="float:right;">确认选择</a>
			</div>
			<input type="hidden" id="category_id_1">
			<input type="hidden" id="category_id_2">
			<input type="hidden" id="category_id_3">
			商品名称：<input id="goods_name" class="input-medium input-common" type="text" value="<?php echo $search_info; ?>" placeholder="要搜索的商品名称" >
			<input type="button" onclick="searchData()" value="搜索" class="btn-common"/>
			<div style="width:216px;display:inline-block;"></div>
		</th>
	</tr>
</table>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane active">
		<table class="table table-striped table-main" border="0">
			<colgroup>
				<col width="3%">
				<col width="25%">
				<col width="12%">
				<col width="9%">
				<col width="8%">
				<col width="7%">
				<col width="7%">
				<col width="15%">
			</colgroup>
			<tbody>
				<tr class="table-title">
					<th></th>
					<th style="padding-right: 166px;">商品名称</th>
					<th>价格（元）</td>
					<th style="padding-right: 35px;">总库存</th>
					<th style="padding-right: 30px;">销量</th>
					<th></th>
					<th style="padding-right: 35px;">排序</th>
					<th style="text-align: center;">操作</th>
				</tr>
				<tr class="trcss">
					<td colspan="5">
						<label style="display: inline-block;vertical-align: middle;">
							<input onclick="CheckAll(this)" type="checkbox" id="chek_all">
							<span style="display: inline-block; margin-left: 0px; margin-right: 10px;font-weight: 400;">全选</span>
						</label>
						<a class="btn btn-small" href="javascript:batchDelete()">批量删除</a>
						<a class="btn btn-small" href="javascript:batchRegainDelete()">批量恢复</a> 
						<input type='hidden' id='goods_type_ids'/>
					</td>
				</tr>
			</tbody>
			<tbody id="productTbody" style="border: 0px;"></tbody>
		</table>
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
function searchData(){
	LoadingInfo(1);
}

//隐藏商品分组
function hideEditGroup(){
	$("#editGroup").popover("hide");
}

function hideSetRecommend(){
	$("#setRecommend").popover("hide");
}

function LoadingInfo(page_index) {
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	var state = $("#state").val();
	var goods_name =$("#goods_name").val();
	var category_id_1 = $("#category_id_1").val();
	var category_id_2 = $("#category_id_2").val();
	var category_id_3 = $("#category_id_3").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/goods/recyclelist'); ?>",
		data : {
			"page_index" : page_index,
			"page_size" : $("#showNumber").val(),
			"start_date":start_date,
			"end_date":end_date,
			"state":state,
			"goods_name":goods_name,
			"category_id_1" : category_id_1,
			"category_id_2" : category_id_2,
			"category_id_3" : category_id_3
		},
		success : function(data) {
			var html = '';
			if (data["data"].length > 0) {
				for (var i = 0; i < data["data"].length; i++) {
					html += '<tr class="tr-title" style=" width: 1502px;"><td class="td-'+ data["data"][i]["goods_id"]+'"><label><input value="'
						+ data["data"][i]["goods_id"]
						+ '" tj="" name="sub" data-state="'+data["data"][i]["state"]+'" type="checkbox"></label></td>';
					html += '<td colspan="7" style="width: 97%;"><div style="display: inline-block; width: 100%;" class="pro-code"><span>商家编码：'
						+ data["data"][i]["code"] + '</span>';
					/* if(data["data"][i]["state"] == 1){
						html += '<span class="pro-code" style="color: #f35252; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已上架';
					}else{
						html += '<span class="pro-code" style="color: #27A9E3; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已下架';
					} */
					html += '<span class="pro-code" style="margin-left:10px;"><i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>创建时间：'+timeStampTurnTime(data["data"][i]["create_time"]);
					html += '</span></div></td></tr>';
					html += '<tr><td colspan="2" style="background: white;"><div><a class="a-pro-view-img" href="#" target="_blank"><img class="thumbnail-img"src="'+__IMG(data["data"][i]["pic_cover_micro"])+'">';
					html += '<div class="div-pro-view-name"><span style="color: #13A5D5;" class="thumbnail-name title='+ data["data"][i]["goods_name"]+'"><a target="_blank" href="">'
						+ data["data"][i]["goods_name"]
						+ '</a></span>';
					//html += '<div class="div-flag-style"><span class="" title=""><i class="icon-tablet"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span><span onmouseover="mouseover(this)" onmouseout="mouseout(this)"style="display: inline-block;"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span>';
					//html += '<div class="QRcode" style="display: none; position: absolute;"id="qrcode"><p><img src=""></p></div></div>';
					html += '</div><div style="margin-top:10px;">';
					html += data["data"][i]["is_hot"] == 1 ? '<i class="hot">热</i>' : '';
					html += data["data"][i]["is_recommend"] == 1 ? '<i class="recommend">荐</i>' : '';
					html += data["data"][i]["is_new"] == 1 ? '<i class="new">新</i>' : '';
					html += '<span  class="div-flag-style" style="display: inline-block;"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span>';
					html += '<div class="QRcode" style="display: none; position: absolute;"id="qrcode"><p><img src="'+ __IMG(data["data"][i]["QRcode"])+'" style="width:110px;"></p></div>';
					html += '</div></div></td>';
					html += '<td style="background: white;"><div class="priceaddactive"><span class="price-lable">原&nbsp;&nbsp;&nbsp;价：</span><span class="price-numble" style="color: #666;"id="moreChangePrice'+ data["data"][i]["goods_id"]+'"  >'
						+ data["data"][i]["price"]
						+ '</span></div>';
					html += '<div><span class="price-lable" >销售价：</span><span class="price-numble"id="moreChangePrice'+ data["data"][i]["goods_id"]+'" style="color:red;">'
						+ data["data"][i]["promotion_price"]
						+ '</span>';
					html += '</td>';
					html += '<td style="background: white;"><div class="cell"><span class="pro-stock" style="color: #666;"id="moreChangeStock'+ data["data"][i]["goods_id"] + '">'
						+ data["data"][i]["stock"]
						+ '</span></div></td>';
					html += '<td style="background: white;"><div class="cell"><span class="pro-stock" style="color: #666;"id="moreChangeStock'+ data["data"][i]["goods_id"]+'">'
						+ data["data"][i]["real_sales"]
						+ '</span></div></td>';
// 					if(data["data"][i]["state"] == 1){
// 						html += '<td style="background: white;">已上架</td>';
// 					}else{
// 						html += '<td style="background: white;">已下架</td>';
// 					}
					html += '<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>';
					html += '<td style="background: white;"><div class="cell"><span class="price-numble" onclick="oneChangeSort(this)">'
						+ data["data"][i]["sort"]
						+ '</span><input class="input-mini" pid="'
						+ data["data"][i]["goods_id"]
						+ '" style="display: none"value="'
						+ data["data"][i]["sort"]
						+ '" onblur="changeSort(this)" oldsort="'
						+ data["data"][i]["sort"]
						+ '" type="number"></div></td>';
					html += '<td style="background: white;"><div class="cell"><div class="bs-docs-example tooltip-demo"style="text-align: center;">';
					html += '<a href="javascript:;" data-placement="bottom" data-original-title="删除"><span class="edit" style="display: inline-block; width: 19%;" onclick="deleteGoods('
						+ data["data"][i]["goods_id"]
						+ ')">删除</span></a>';
					html += '<a href="javascript:void(0)" data-placement="bottom"onclick="regainGoodsDeleted('
						+ data["data"][i]["goods_id"]
						+ ')" data-original-title="恢复"><span class="del" style="display: inline-block; width: 19%;">恢复</span></a></div></div></td></tr>';
				}
			} else {
				html += '<tr align="center"><td colspan="8" style="text-align: center;font-weight: normal;color: #999;">暂无符合条件的数据记录</td></tr>';
			}
			$("#productTbody").html(html);
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
			code();
		}
	});
}

//二维码显示
function code(){
	$(".div-flag-style").mouseover(function(){
		$(this).siblings('.QRcode').show();
	});
	$(".div-flag-style").mouseout(function(){
		$(this).siblings('.QRcode').hide();
	});
}

//全选
function CheckAll(event){
	var checked = event.checked;
	$("#productTbody input[type = 'checkbox']").prop("checked",checked);
}

//批量删除回收站数据
function batchDelete() {
	var goods_ids= new Array();
	$("#productTbody input[type='checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			goods_ids.push($(this).val());
		}
	});
	if(goods_ids.length ==0){
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			contentText:"请选择需要操作的记录",
			title:"消息提醒",
		});
		return false;
	}
	deleteGoods(goods_ids);
}

//单个删除回收站数据
function deleteGoods(goods_ids){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$.ajax({
					type : "post",
					url : "<?php echo __URL('ADMIN_MAIN/goods/emptydeletegoods'); ?>",
					data : { "goods_ids" : goods_ids.toString() },
					dataType : "json",
					success : function(data) {
						if(data["code"] > 0 ){
							LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
							$("#dialog").dialog({
								buttons: {
									"确定": function() {
										$(this).dialog('close');
									}
								},
								modal: true,
								contentText:data["message"],
								title:"消息提醒",
								time:1
							});
							$("#chek_all").prop("checked", false);
						}
					}
				});
				$(this).dialog('close');
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定要从回收站彻底删除吗？",
	});
}

//批量恢复
function batchRegainDelete(){
	var goods_ids= new Array();
	$("#productTbody input[type='checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			goods_ids.push($(this).val());
		}
	});
	if(goods_ids.length ==0){
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			contentText:"请选择需要操作的记录",
			title:"消息提醒",
		});
		return false;
	}
	regainGoodsDeleted(goods_ids);
}

//单个恢复已删除商品
function regainGoodsDeleted(goods_ids){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$.ajax({
					type : "post",
					url : "<?php echo __URL('ADMIN_MAIN/goods/regaingoodsdeleted'); ?>",
					data : { "goods_ids" : goods_ids.toString() },
					dataType : "json",
					success : function(data) {
						if(data["code"] > 0 ){
							LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
							$("#dialog").dialog({
								buttons: {
									"确定": function() {
										$(this).dialog('close');
									}
								},
								modal: true,
								contentText:data["message"],
								title:"消息提醒",
								time:1
							});
							$("#chek_all").prop("checked", false);
						}
					}
				});
				$(this).dialog('close');
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定要恢复吗？",
	});
}

$("#goodsCategoryOne").click(function(){
	var isShow = $("#goodsCategoryOne").attr('is_show');
	if(isShow == "false"){
		$(".one").show();
		$(".selectGoodsCategory").css({
			'width' : 218,
			'right' : 530
		});
		$(".selectGoodsCategory").show();
		$("#goodsCategoryOne").attr('is_show','true');
		$(".js-mask-category").show();
	}else{
		$(".one").hide();
		$(".two").hide();
		$(".three").hide();
		$(".selectGoodsCategory").css({
			'width' : 218,
			'right' : 530
		});
		$(".selectGoodsCategory").hide();
		$("#goodsCategoryOne").attr('is_show','false');
	}
})

$(".js-mask-category").click(function(){
	$(".one").hide();
	$(".selectGoodsCategory").hide();
	$(".two").hide();
	$(".three").hide();
	$("#goodsCategoryOne").attr('is_show', 'false');
	$(this).hide();
})

$(".js-category-one").click(function(){
	parentId = $(this).attr("category_id");
	category_name = $(this).text();
	$(".one ul li").not($(this)).removeClass("selected");
	$(this).addClass("selected");
	$("#goodsCategoryOne").val($.trim(category_name)+">");
	$("#category_id_1").val(parentId);
	$("#category_id_2").val('');
	$("#category_id_3").val('');
	$.ajax({
		type : 'post',
		url : "<?php echo __URL('ADMIN_MAIN/goods/getcategorybyparentajax'); ?>",
		data : {"parentId":parentId},
		success : function(data){
			if(data.length>0){
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<li class="js-category-two" category_id="'+data[i]['category_id']+'">'+data[i]['category_name'];
						if(data[i]['is_parent'] == 1){
							html += '<i class="fa fa-angle-right fa-lg"></i>';
						}
						html += '</li>';
					}
				$("#goodsCategoryTwo").html(html);
				$(".two").show();
				$(".selectGoodsCategory").css({
					'width' : 437,
					'right' : 311
				});
			}else{
				$(".one").hide();
				$(".two").hide();
				$(".js-mask-category").hide();
				$(".selectGoodsCategory").hide();
				$("#goodsCategoryOne").attr('is_show', 'false');
			}
			$(".three").hide();
		}
	});
	return false;
});

$(".js-category-two").live("click",function(event){
	var parentId = $(this).attr("category_id");
	var category_name = $(this).text();
	$(".two ul li").not($(this)).removeClass("selected");
	$(this).addClass("selected");
	var goodsCategoryOne = $("#goodsCategoryOne").val();
	$("#goodsCategoryOne").val(goodsCategoryOne+''+category_name+'>');
	$("#category_id_2").val(parentId);
	$("#category_id_3").val('');
	$.ajax({
		type : 'post',
		url : "<?php echo __URL('ADMIN_MAIN/goods/getcategorybyparentajax'); ?>",
		data : {"parentId":parentId},
		success : function(data){
			if(data.length>0){
				var html = '';
				for (var i = 0; i < data.length; i++) {
					html += '<li onclick="goodsCategoryThree(this);" category_id="'+data[i]['category_id']+'">'+data[i]['category_name']+'<i class="fa fa-angle-right fa-lg"></i></li>';
				}
				$("#goodsCategoryThree").html(html);
				$(".three").show();
				$(".selectGoodsCategory").css({
					'width' : 636,
					'right' : 112
				});
			}else{
				$(".one").hide();
				$(".two").hide();
				$(".three").hide();
				$(".selectGoodsCategory").hide();
				$(".js-mask-category").hide();
				$("#goodsCategoryOne").attr('is_show', 'false');
			}
		}
	})
	event.stopPropagation();
});

function goodsCategoryThree(obj){
	var parentId = $(obj).attr("category_id");
	var category_name = $(obj).text();
	$(".three ul li").not($(obj)).removeClass("selected");
	$(obj).addClass("selected");
	var goodsCategoryOne = $("#goodsCategoryOne").val();
	$("#goodsCategoryOne").val(goodsCategoryOne+''+category_name);
	$("#category_id_3").val(parentId);
	$(".one").hide();
	$(".two").hide();
	$(".three").hide();
	$(".selectGoodsCategory").hide();
	$(".selectGoodsCategory").css({
		'width' : 218,
		'right' : 530
	});
	$(".js-mask-category").hide();
	$("#goodsCategoryOne").attr('is_show','false');
}

$("#confirmSelect").click(function(){
	$(".one").hide();
	$(".two").hide();
	$(".three").hide();
	$(".selectGoodsCategory").hide();
	$(".selectGoodsCategory").css({
		'width' : 218,
		'right' : 530
	});
})
</script>

</body>
</html>