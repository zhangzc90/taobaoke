{include file='../tpl/header.tpl' title="{$archive['post_title']}"}
<link rel="stylesheet" type="text/css" href="{$smarty.const.THEME}assets/css/topic.css">
<div class='container'>
	<!-- banner -->
	<div class='thumbnail'>
		<img src="{$smarty.const.HOME}{$archive['post_thumbnail']}">
	</div>
	<!-- 标题 -->
	<div class='title'>
		<h3>{$archive['post_title']}</h3>
	</div>
	<!-- 发布时间作者 -->
	<div class='time'>
		<div class='time-flex'>{$archive['post_date']}发布</div>
		<div class='author'>{$archive['user_nickname']}</div>
	</div>
	<!-- 内容 -->
	<div class='content'>
		{$archive['post_content']}
	</div>
	<div class='footer'>@好物推荐</div>
</div>
{include file='../tpl/footer.tpl'}