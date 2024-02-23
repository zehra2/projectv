<?php
/* Smarty version 4.3.4, created on 2024-02-12 08:05:34
  from 'D:\wamp\www\mediavbay-new\content\themes\default\templates\ajax.product.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c9d14ee46243_59077710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f44a084dcd00587548a2a8d93cbc79b2692766' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\templates\\ajax.product.editor.tpl',
      1 => 1707725125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_65c9d14ee46243_59077710 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Edit Product");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label"><?php echo __("Product Name");?>
</label>
      <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
">
    </div>
    <div class="row">
       <div class="form-group col-md-4">
        <label class="form-label"><?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)</label>
        <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>
">
      </div>
    </div>
    
    <div class="row"> 
      <div class="form-group col-md-12">
        <label class="form-label"><?php echo __("Category");?>
</label>
        <select id="form-category-selector" class="form-select" name="category">
          <option value="">Please select category</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo __($_smarty_tpl->tpl_vars['category']->value['category_id']);?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>

      <div class="form-group col-md-12">
        <label class="form-label"><?php echo __("Sub Category");?>
</label>
        <select id="form-subcategory-selector" class="form-select" name="sub_category">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_categories']->value, 'sub_category');
$_smarty_tpl->tpl_vars['sub_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->value) {
$_smarty_tpl->tpl_vars['sub_category']->do_else = false;
?>
           <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['sub_category_id'] == $_smarty_tpl->tpl_vars['sub_category']->value['sub_category_id']) {?>selected<?php }?> value="<?php echo __($_smarty_tpl->tpl_vars['sub_category']->value['sub_category_id']);?>
"><?php echo __($_smarty_tpl->tpl_vars['sub_category']->value['sub_category_name']);?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Location");?>
</label>
      <input name="location" type="text" class="form-control js_geocomplete" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>
">
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Country");?>
</label>
      <select id="form-country-selector" class="form-select" name="country">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
           <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['country'] == $_smarty_tpl->tpl_vars['country']->value['id']) {?>selected<?php }?> value="<?php echo __($_smarty_tpl->tpl_vars['country']->value['id']);?>
"><?php echo __($_smarty_tpl->tpl_vars['country']->value['country_name']);?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("State");?>
</label>
      <select id="form-state-selector" class="form-select" name="state">

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
           <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['state'] == $_smarty_tpl->tpl_vars['state']->value['id']) {?>selected<?php }?> value="<?php echo __($_smarty_tpl->tpl_vars['state']->value['id']);?>
"><?php echo __($_smarty_tpl->tpl_vars['state']->value['state_name']);?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </select>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("City");?>
</label>
      <select id="form-city-selector" class="form-select" name="city">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cities']->value, 'city');
$_smarty_tpl->tpl_vars['city']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->do_else = false;
?>
           <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['city'] == $_smarty_tpl->tpl_vars['city']->value['id']) {?>selected<?php }?> value="<?php echo __($_smarty_tpl->tpl_vars['city']->value['id']);?>
"><?php echo __($_smarty_tpl->tpl_vars['city']->value['city_name']);?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>


    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
    <?php }?>
    <!-- custom fields -->

     <div class="form-group">
      <label class="form-label"><?php echo __("Select Marketplace");?>
</label>
      <select id="form-marketplace-type-selector" class="form-select" name="marketplace_type">
        <option value="service" <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['marketplace_type'] == 'service') {?>selected<?php }?> ><?php echo __("Service");?>
</option>
        <option value="product" <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['marketplace_type'] == 'product') {?>selected<?php }?>><?php echo __("Product");?>
</option>
      </select>
    </div>
    
    <div id="available-quantity" class="form-group">
      <label class="form-label"><?php echo __("Quantity Available");?>
</label>
      <input name="quantity" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['quantity']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['quantity'];
}?>" class="form-control">
    </div>

    <div id="product-size" class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['marketplace_type'] == 'product') {?>display:block;<?php } else { ?>display:none;<?php }?>">
      <label class="form-label"><?php echo __("Product size");?>
</label>
      <input name="product_size" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['product_size']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['product_size'];
}?>" class="form-control">
    </div>

    <div id="unit-of-quantity" class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['marketplace_type'] == 'product') {?>display:block;<?php } else { ?>display:none;<?php }?>">
      <label class="form-label"><?php echo __("Units of available");?>
</label>
      <input name="available_unit" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['available_unit']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['available_unit'];
}?>" class="form-control">
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Select Media");?>
</label>
      <select id="form-media-type-selector" class="form-select" name="mediatype">
        <option value="media" <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['mediatype'] == 'media') {?>selected<?php }?> ><?php echo __("Select from Media");?>
</option>
        <option value="facebook" <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['mediatype'] == 'facebook') {?>selected<?php }?> ><?php echo __("Select from facebook");?>
</option>
        <option value="youtube" <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['mediatype'] == 'youtube') {?>selected<?php }?>><?php echo __("Select from Youtube");?>
</option>
      </select>
    </div> 

    <div id="product-media-upload" class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['mediatype'] == 'media') {?>display:block;<?php } else { ?>display:none;<?php }?>">
      <label class="form-label"><?php echo __("Photos");?>
</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    <div id="facebook-url" class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['mediatype'] == 'facebook') {?>display:block;<?php }?>">
      <label class="form-label"><?php echo __("Enter facebook url");?>
</label>
      <input name="facebookurl" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['facebook_url']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['facebook_url'];
}?>" placeholder="https://fb.watch/mU5XB-DMGU/" class="form-control">
    </div>

    <div id="youtybe-url" class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['mediatype'] == 'youtube') {?>display:block;<?php }?>>
      <label class="form-label"><?php echo __("Enter youtube url");?>
</label>
      <input name="youtubeurl" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['youtube_url']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['youtube_url'];
}?>" placeholder="https://www.youtube.com/embed/Lz5UTnraddE" class="form-control">
    </div> 

    
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="product">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo __("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
  </div>
</form><?php }
}
