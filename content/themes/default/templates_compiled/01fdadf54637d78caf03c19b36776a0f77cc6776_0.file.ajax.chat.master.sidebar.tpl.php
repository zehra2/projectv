<?php
/* Smarty version 4.3.4, created on 2024-02-05 15:00:41
  from 'D:\wamp\www\mediavbay-new\content\themes\default\templates\ajax.chat.master.sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c0f8190f15d0_05735193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01fdadf54637d78caf03c19b36776a0f77cc6776' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\templates\\ajax.chat.master.sidebar.tpl',
      1 => 1707144857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c0f8190f15d0_05735193 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_friends']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
  <div class="chat-avatar-wrapper clickable js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];
}?>" data-link="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" data-bs-toggle="tooltip" data-bs-placement="left" title="<?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {?> <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
 <?php }?>">
    <div class="chat-avatar">
      <img src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="" />
      <i class="online-status fa fa-circle <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_is_online']) {?>online<?php } else { ?>offline<?php }?>"></i>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_status_enabled'] && !$_smarty_tpl->tpl_vars['_user']->value['user_is_online']) {?>
      <div class="last-seen">
        <span class='js_moment' data-time='<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_last_seen'];?>
'><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_last_seen'];?>
</span>
      </div>
    <?php } else { ?>
      <div class="pb10"></div>
    <?php }?>
  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
