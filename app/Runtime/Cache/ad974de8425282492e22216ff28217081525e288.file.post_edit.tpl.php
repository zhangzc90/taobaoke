<?php /* Smarty version Smarty-3.1.6, created on 2017-05-11 10:38:21
         compiled from "./ThemeAdmin/default\Archive\post_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66895913ce9d425a45-87527829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad974de8425282492e22216ff28217081525e288' => 
    array (
      0 => './ThemeAdmin/default\\Archive\\post_edit.tpl',
      1 => 1492687923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66895913ce9d425a45-87527829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'id' => 0,
    'userlevel' => 0,
    'result' => 0,
    'category' => 0,
    'selected_cate' => 0,
    'item' => 0,
    'j' => 0,
    'checked' => 0,
    'selected_tag' => 0,
    'tags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5913ce9dd0cb2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5913ce9dd0cb2')) {function content_5913ce9dd0cb2($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['userlevel']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('../tpl/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('username'=>$_tmp1,'id'=>$_tmp2,'level'=>$_tmp3,'title'=>'编辑'), 0);?>

<div class='main'>
	<div class='row'>
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-pencil-square-o"></i> 编辑文章</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="<?php echo @ADMIN;?>
">首页</a></li>
				<li><i class="fa fa-pencil-square-o"></i>编辑文章</li>	
			</ol>
		</div>
		<div class='col-md-12'>
			<div class='error_report'>
				错误：
				<span class='text-danger'></span>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-9'>
			<input id='post_id' type='hidden' value="<?php echo $_GET['aid'];?>
">
			<div class='row'>
				<div class='col-md-12 margin_30'>
					<input id='post_title' class='form-control' type='text' placeholder='在此输入标题' value='<?php echo $_smarty_tpl->tpl_vars['result']->value["post_title"];?>
'>
				</div>
				<div class='col-md-12 margin_30'>
					<textarea id='post_description' class='form-control' rows='3' placeholder='在此输入内容描述' style='resize:none;'><?php echo $_smarty_tpl->tpl_vars['result']->value["post_describe"];?>
</textarea>
				</div>
				<div class='col-md-12'>
					<script id="editor" type="text/plain" style="width:100%;height:500px;"><?php echo stripslashes(htmlspecialchars_decode($_smarty_tpl->tpl_vars['result']->value['post_content']));?>
</script>
				</div>
			</div>
		</div>
		<div class='col-md-3'>
			<!-- 发布 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">发布</h3>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<button id='edit_draft' class='btn btn-default'>保存草稿</button>
						</li>
						<li class="list-group-item">
							<i class='fa fa-bell-o'></i>状态：<b>修改</b>
							<!-- <a href="#">编辑</a> -->
						</li>
						<li class="list-group-item">
							<i class='fa fa-clock-o'></i><b id='date_str'>立即发布</b>
							<a id='date_edit' href="javascript:void(0);">编辑</a>
							<div class='datetime' data-reset='0'>
								<input id='real_time' type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['result']->value["post_date"];?>
'>
								<input id='year' class='y_text' type='text'>-
								<select id='month'></select>-
								<select id='day'></select>@
								<input id='hour' class='s_text' type='text'> :
								<input id='min' class='s_text' type='text'> :
								<input id='sec' class='s_text' type='text'>
								<p class='d_p'>
									<button id='set_time' class='btn btn-sm btn-default'>确定</button>&nbsp;
									<a href="javascript:void(0);" class='cancel'>取消</a>
								</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="panel-footer text-right">
					<a id='delete_art' data-uid='<?php echo $_GET['aid'];?>
' href='javascript:void(0);'>移至回收站</a>
					<button id='post_edit' class='btn btn-danger'>更新</button>
				</div>
			</div>
			<!-- 缩略图 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">缩略图</h3>
				</div>
				<div class="panel-body">
					<div class='thumbnail'>
						<img data-src="<?php echo $_smarty_tpl->tpl_vars['result']->value['post_thumbnail'];?>
" data-root='<?php echo @HOME;?>
' src="<?php echo @HOME;?>
<?php echo $_smarty_tpl->tpl_vars['result']->value['post_thumbnail'];?>
">
					</div>
					<div class='img_edit help-block'>点击图片来修改或更新</div>
					<a id='add_thumb' href="javascript:void(0);">上传缩略图</a>
					<a id='remove_thumb' class='display_hide' href="javascript:void(0);" >移除缩略图</a>
					<div class='help-block'>
						<small>最大上传文件大小：2 MB</small>
					</div>
				</div>
			</div>
			<!-- 分类目录 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">分类目录</h3>
				</div>
				<div class="panel-body">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['term_id']==$_smarty_tpl->tpl_vars['j']->value['term_taxonomy_id']){?>
								<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('checked', null, 0);?>
								<?php break 1?>
							<?php }else{ ?>
								<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
							<?php }?>
						<?php } ?>
						<div class="checkbox">
						    <label>
						    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['level']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php endfor; endif; ?>
						     	<input class='category' data-cate="<?php echo $_smarty_tpl->tpl_vars['item']->value['term_id'];?>
" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

						    </label>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- 标签 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">标签</h3>
				</div>
				<div class="panel-body">
					<div class='form-inline'>
						<div class="form-group">
							<input id='tagname' type="text" class="form-control" placeholder="标签">
							<button id='tag_add' class='btn btn-default'>添加</button>
						</div>
						<div class='help-block tag_err'>
							<small></small>
						</div>
					</div>
					<div id='tags' class='tags'>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_tag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<span class="label label-default reomve_tag" title="点击删除" data-uid="<?php echo $_smarty_tpl->tpl_vars['item']->value['term_taxonomy_id'];?>
"><i class="fa fa-times-circle"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
						<?php } ?>
					</div>
					<div>
						<a href="javascript:void(0);" data-toggle="modal" data-target="#tagModal">从已有标签中选择</a>
					</div>
					<div class='tags'>
						<a href="tags.html">标签管理</a>
					</div>			
				</div>
			</div>
			<!-- 排序 -->
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">排序</h3>
				</div>
				<div class="panel-body">
					<div class='form-group'>
						<i class='fa fa-sort-numeric-asc i'></i>排序
						<input id='sort' type='number' class='control' value='<?php echo $_smarty_tpl->tpl_vars['result']->value["post_seqencing"];?>
'>
						<div class='help-block'>
							<small>数值越大排序越靠前</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 图片上传模态框 -->
<div id='imgModal' class="modal fade " tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">选择缩略图</h4>
			</div>
			<div class="modal-body">
				<div>
					<form id="upload" enctype="multipart/form-data"  method='post'>
						<div class='file_hide'>
							<a class='btn btn-primary btn-lg'>请选择要上传的图片<input type="file" class="imgUpload" name="file"/></a>
						</div>
						<div class='error_file help-block text-center'></div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 标签选择 -->
<div id='tagModal' class="modal fade " tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">标签选择</h4>
			</div>
			<div class="modal-body">
				<div class='help-block'>点击标签可直接选中</div>
				<div class='tag_list'>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<span data-uid='<?php echo $_smarty_tpl->tpl_vars['item']->value["term_id"];?>
' data-value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class='label label-primary selected_tag' title='点击选择'><i class="fa fa-plus-square" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
					<?php } ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/public.css">
<link rel="stylesheet" type="text/css" href="<?php echo @THEMEADMIN;?>
assets/css/archive.css">
<!-- ueditor编辑器 -->
<script type="text/javascript" src='<?php echo @ORG;?>
editor/ueditor/ueditor.config.js'></script>
<script type="text/javascript" src='<?php echo @ORG;?>
editor/ueditor/ueditor.all.min.js'></script>
<script type="text/javascript" src='<?php echo @ORG;?>
editor/ueditor/createEditor.js'></script>
<!-- ueditor编辑器 -->
<!-- jquery.form上传插件 -->
<script type="text/javascript" src='<?php echo @ORG;?>
upload/jquery.form.js'></script>
<!-- 档案操作 -->
<script type="text/javascript" src='<?php echo @JS;?>
ajax.js'></script>
<script type="text/javascript" src='<?php echo @THEMEADMIN;?>
assets/js/archive.js'></script>
<!-- 文件上传 -->
<script type="text/javascript" src='<?php echo @THEMEADMIN;?>
assets/js/file_upload.js'></script>
<script type="text/javascript">
	// $(window).bind('beforeunload',function(){
	// 	return '确定离开此页面吗？';
	// });
</script>
<?php echo $_smarty_tpl->getSubTemplate ('../tpl/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>