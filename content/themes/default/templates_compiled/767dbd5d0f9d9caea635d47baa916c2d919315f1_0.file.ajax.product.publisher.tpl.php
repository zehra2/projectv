<?php
/* Smarty version 4.3.4, created on 2024-02-07 07:17:30
  from 'D:\wamp\www\mediavbay-new\content\themes\default\templates\ajax.product.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c32e8a56cb84_91307956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767dbd5d0f9d9caea635d47baa916c2d919315f1' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\templates\\ajax.product.publisher.tpl',
      1 => 1707290242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_65c32e8a56cb84_91307956 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Sell New Product");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label"><?php echo __("Product Name");?>
</label>
      <input name="name" type="text" class="form-control">
    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label class="form-label"><?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)</label>
        <input name="price" type="text" class="form-control">
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
            <option value="<?php echo __($_smarty_tpl->tpl_vars['category']->value['category_id']);?>
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
          <option value="">Please select subcategory</option>
        </select>
      </div>

    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Location");?>
</label>
      <input name="location" type="text" class="form-control js_geocomplete">
    </div>
    
    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo __("Country");?>
</label>
      <select id="form-country-selector" class="form-select" name="country">
        <option value="">Please select country</option>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
           <option value="<?php echo __($_smarty_tpl->tpl_vars['country']->value['id']);?>
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
        <option value="">Please select State</option>
      </select>
    </div>
  
    <div class="form-group">
      <label class="form-label"><?php echo __("City");?>
</label>
      <select id="form-city-selector" class="form-select" name="city">
        <option value="">Please select City</option>
      </select>
    </div>

    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->

    <div class="form-group">
      <label class="form-label"><?php echo __("Select Marketplace");?>
</label>
      <select id="form-marketplace-type-selector" class="form-select" name="marketplace_type">
        <option value="service"><?php echo __("Service");?>
</option>
        <option value="product"><?php echo __("Product");?>
</option>
      </select>
    </div>

    <div id="available-quantity" class="form-group">
      <label class="form-label"><?php echo __("Quantity Available");?>
</label>
      <input name="quantity" type="text" class="form-control">
    </div>

    <div id="product-size" class="form-group">
      <label class="form-label"><?php echo __("Product size");?>
</label>
      <input name="product_size" type="text" class="form-control">
    </div>

    <div id="unit-of-quantity" class="form-group">
      <label class="form-label"><?php echo __("Units of available");?>
</label>
      <input name="available_unit" type="text" class="form-control">
    </div>


    <div class="form-group">
      <label class="form-label"><?php echo __("Select Media");?>
</label>
      <select id="form-media-type-selector" class="form-select" name="mediatype">
        <option value="media"><?php echo __("Select from Media");?>
</option>
        <option value="facebook"><?php echo __("Select from facebook");?>
</option>
        <option value="youtube"><?php echo __("Select from Youtube");?>
</option>
      </select>
    </div>


    <div id="product-media-upload" class="form-group">
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

    
    <div id="facebook-url" class="form-group">
      <label class="form-label"><?php echo __("Enter facebook url");?>
</label>
      <input name="facebookurl" type="text" placeholder="https://fb.watch/mU5XB-DMGU/" class="form-control">
    </div>

    <div id="youtybe-url" class="form-group">
      <label class="form-label"><?php echo __("Enter youtube url");?>
</label>
      <input name="youtubeurl" type="text" placeholder="https://www.youtube.com/embed/a_qREkJ78f4" class="form-control">
    </div>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-product"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
