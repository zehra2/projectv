<?php
/* Smarty version 4.3.4, created on 2024-02-05 15:00:39
  from 'D:\wamp\www\mediavbay-new\content\themes\default\templates\_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c0f817bf8479_62603135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955c01dde70ba5d31a603662262db7252ba5e140' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\templates\\_no_data.tpl',
      1 => 1707144857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_65c0f817bf8479_62603135 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted mb20">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
