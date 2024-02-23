<div class="modal-header">
  <h6 class="modal-title">
    {include file='__svg_icons.tpl' icon="products" class="main-icon mr10" width="24px" height="24px"}
    {__("Edit Product")}
  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label">{__("Product Name")}</label>
      <input name="name" type="text" class="form-control" value="{$post['product']['name']}">
    </div>
    <div class="row">
       <div class="form-group col-md-4">
        <label class="form-label">{__("Price")} ({$system['system_currency']})</label>
        <input name="price" type="text" class="form-control" value="{$post['product']['price']}">
      </div>
    </div>
    
    <div class="row"> 
      <div class="form-group col-md-12">
        <label class="form-label">{__("Category")}</label>
        <select id="form-category-selector" class="form-select" name="category">
          <option value="">Please select category</option>
          {foreach $product_categories as $category}
            <option {if $post['product']['category_id'] == $category['category_id']}selected{/if} value="{__($category['category_id'])}">{__($category['category_name'])}</option>
          {/foreach}
        </select>
      </div>

      <div class="form-group col-md-12">
        <label class="form-label">{__("Sub Category")}</label>
        <select id="form-subcategory-selector" class="form-select" name="sub_category">
          {foreach $sub_categories as $sub_category}
           <option {if $post['product']['sub_category_id'] == $sub_category['sub_category_id']}selected{/if} value="{__($sub_category['sub_category_id'])}">{__($sub_category['sub_category_name'])}</option>
          {/foreach}
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label">{__("Location")}</label>
      <input name="location" type="text" class="form-control js_geocomplete" value="{$post['product']['location']}">
    </div>

    <div class="form-group">
      <label class="form-label">{__("Description")}</label>
      <textarea name="message" rows="5" dir="auto" class="form-control">{$post['text_plain']}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label">{__("Country")}</label>
      <select id="form-country-selector" class="form-select" name="country">
          {foreach $countries as $country}
           <option {if $post['product']['country'] == $country['id']}selected{/if} value="{__($country['id'])}">{__($country['country_name'])}</option>
          {/foreach}
      </select>
    </div>

    <div class="form-group">
      <label class="form-label">{__("State")}</label>
      <select id="form-state-selector" class="form-select" name="state">

          {foreach $states as $state}
           <option {if $post['product']['state'] == $state['id']}selected{/if} value="{__($state['id'])}">{__($state['state_name'])}</option>
          {/foreach}
        
      </select>
    </div>

    <div class="form-group">
      <label class="form-label">{__("City")}</label>
      <select id="form-city-selector" class="form-select" name="city">
        
        {foreach $cities as $city}
           <option {if $post['product']['city'] == $city['id']}selected{/if} value="{__($city['id'])}">{__($city['city_name'])}</option>
          {/foreach}
      </select>
    </div>


    <!-- custom fields -->
    {if $custom_fields['basic']}
      {include file='__custom_fields.tpl' _custom_fields=$custom_fields['basic'] _registration=false}
    {/if}
    <!-- custom fields -->

     <div class="form-group">
      <label class="form-label">{__("Select Marketplace")}</label>
      <select id="form-marketplace-type-selector" class="form-select" name="marketplace_type">
        <option value="service" {if $post['product']['marketplace_type'] == 'service'}selected{/if} >{__("Service")}</option>
        <option value="product" {if $post['product']['marketplace_type'] == 'product'}selected{/if}>{__("Product")}</option>
      </select>
    </div>
    
    <div id="available-quantity" class="form-group">
      <label class="form-label">{__("Quantity Available")}</label>
      <input name="quantity" type="text" value="{if $post['product']['quantity']}{$post['product']['quantity']}{/if}" class="form-control">
    </div>

    <div id="product-size" class="form-group" style="{if $post['product']['marketplace_type'] == 'product'}display:block;{else}display:none;{/if}">
      <label class="form-label">{__("Product size")}</label>
      <input name="product_size" type="text" value="{if $post['product']['product_size']}{$post['product']['product_size']}{/if}" class="form-control">
    </div>

    <div id="unit-of-quantity" class="form-group" style="{if $post['product']['marketplace_type'] == 'product'}display:block;{else}display:none;{/if}">
      <label class="form-label">{__("Units of available")}</label>
      <input name="available_unit" type="text" value="{if $post['product']['available_unit']}{$post['product']['available_unit']}{/if}" class="form-control">
    </div>

    <div class="form-group">
      <label class="form-label">{__("Select Media")}</label>
      <select id="form-media-type-selector" class="form-select" name="mediatype">
        <option value="media" {if $post['product']['mediatype'] == 'media'}selected{/if} >{__("Select from Media")}</option>
        <option value="facebook" {if $post['product']['mediatype'] == 'facebook'}selected{/if} >{__("Select from facebook")}</option>
        <option value="youtube" {if $post['product']['mediatype'] == 'youtube'}selected{/if}>{__("Select from Youtube")}</option>
      </select>
    </div> 

    <div id="product-media-upload" class="form-group" style="{if $post['product']['mediatype'] == 'media'}display:block;{else}display:none;{/if}">
      <label class="form-label">{__("Photos")}</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    <div id="facebook-url" class="form-group" style="{if $post['product']['mediatype'] == 'facebook'}display:block;{/if}">
      <label class="form-label">{__("Enter facebook url")}</label>
      <input name="facebookurl" type="text" value="{if $post['product']['facebook_url']}{$post['product']['facebook_url']}{/if}" placeholder="https://fb.watch/mU5XB-DMGU/" class="form-control">
    </div>

    <div id="youtybe-url" class="form-group" style="{if $post['product']['mediatype'] == 'youtube'}display:block;{/if}>
      <label class="form-label">{__("Enter youtube url")}</label>
      <input name="youtubeurl" type="text" value="{if $post['product']['youtube_url']}{$post['product']['youtube_url']}{/if}" placeholder="https://www.youtube.com/embed/Lz5UTnraddE" class="form-control">
    </div> 

    
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="product">
    <input type="hidden" name="id" value="{$post['post_id']}">
    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{__("Cancel")}</button>
    <button type="submit" class="btn btn-primary">{__("Save")}</button>
  </div>
</form>