<?php
/* Smarty version 4.3.4, created on 2024-02-07 11:47:06
  from 'D:\wamp\www\mediavbay-new\content\themes\default\templates\admin.users_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c36dba913a38_98031004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd78095665628f1339888c1e680caf34144442f90' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\templates\\admin.users_groups.tpl',
      1 => 1707144857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c36dba913a38_98031004 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users_groups/add" class="btn btn-md btn-primary">
          <i class="fa fa-users mr5"></i><?php echo __("Add New Group");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users_groups" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-users mr10"></i><?php echo __("Users Groups");?>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['user_group_title'];
}?>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Group");
}?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="card-body">
      <!-- System Groups (Admins/Mods/Users) -->
      <h6 class="card-title mb20"><?php echo __("System Groups");?>
</h6>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Title");?>
</th>
              <th><?php echo __("Permissions");?>
</th>
              <th><?php echo __("Users Count");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <!-- Admins -->
            <tr>
              <td>1</td>
              <td><?php echo __("Admins");?>
</td>
              <td><?php echo __("Admins Permissions");?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['counters']->value['admins_count'];?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo __("List Accounts");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/admins" class="btn btn-sm btn-icon btn-rounded btn-info">
                  <i class="fa fa-users"></i>
                </a>
              </td>
            </tr>
            <!-- Admins -->
            <!-- Moderators -->
            <tr>
              <td>2</td>
              <td><?php echo __("Moderators");?>
</td>
              <td><?php echo __("Moderators Permissions");?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['counters']->value['moderators_count'];?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo __("List Accounts");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/moderators" class="btn btn-sm btn-icon btn-rounded btn-info">
                  <i class="fa fa-users"></i>
                </a>
              </td>
            </tr>
            <!-- Moderators -->
            <!-- Users -->
            <tr>
              <td>3</td>
              <td><?php echo __("Users");?>
</td>
              <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/users">
                  <?php echo __("Users Permissions");?>

                </a>
              </td>
              <td><?php echo $_smarty_tpl->tpl_vars['counters']->value['users_count'];?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo __("List Accounts");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users?ncug=true" class="btn btn-sm btn-icon btn-rounded btn-info">
                  <i class="fa fa-users"></i>
                </a>
              </td>
            </tr>
            <!-- Users -->
          </tbody>
        </table>
      </div>
      <!-- System Groups (Admins/Mods/Users) -->

      <div class="divider"></div>

      <!-- Custom Groups -->
      <h6 class="card-title mb20"><?php echo __("Custom Groups");?>
</h6>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Title");?>
</th>
              <th><?php echo __("Permissions");?>
</th>
              <th><?php echo __("Users Count");?>
</th>
              <th><?php echo __("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_group_id'];?>
</td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['row']->value['user_group_title'];?>

                </td>
                <td>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['permissions_group_id'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['permissions_group_title'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['users_count'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo __("List Accounts");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users?cug=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-info">
                    <i class="fa fa-users"></i>
                  </a>
                  <a data-bs-toggle="tooltip" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users_groups/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="user_group" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_group_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
      <!-- Custom Groups -->
    </div>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

    <form class="js_ajax-forms" data-url="admin/users_groups.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Group Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Group Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="none"><?php echo __("Select permissions group");?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions_groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo __("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups"><?php echo __("Permissions Groups");?>
</a>
            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/users_groups.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_group_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Group Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_group_title'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Group Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="none"><?php echo __("Select permissions group");?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['permissions_groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['permissions_group_id'] == $_smarty_tpl->tpl_vars['group']->value['permissions_group_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo __("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/permissions_groups"><?php echo __("Permissions Groups");?>
</a>
            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
