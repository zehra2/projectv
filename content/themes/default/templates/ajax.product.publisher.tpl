<div class="modal-header">
  <h6 class="modal-title">
    {include file='__svg_icons.tpl' icon="products" class="main-icon mr10" width="24px" height="24px"}
    {__("Sell New Product")}
  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label">{__("Product Name")}</label>
      <input name="name" type="text" class="form-control">
    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label class="form-label">{__("Price")} ({$system['system_currency']})</label>
        <input name="price" type="text" class="form-control">
      </div>
    </div>

    <div class="row"> 
      <div class="form-group col-md-12">
        <label class="form-label">{__("Category")}</label>
        <select id="form-category-selector" class="form-select" name="category">
          <option value="">Please select category</option>
          {foreach $product_categories as $category}
            <option value="{__($category['category_id'])}">{__($category['category_name'])}</option>
          {/foreach}
        </select>
      </div>

      <div class="form-group col-md-12">
        <label class="form-label">{__("Sub Category")}</label>
        <select id="form-subcategory-selector" class="form-select" name="sub_category">
          <option value="">Please select subcategory</option>
        </select>
      </div>

    </div>

    <div class="form-group">
      <label class="form-label">{__("Location")}</label>
      <input name="location" type="text" class="form-control js_geocomplete">
    </div>
    
    <div class="form-group">
      <label class="form-label">{__("Description")}</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label class="form-label">{__("Country")}</label>
      <select id="form-country-selector" class="form-select" name="country">
        <option value="">Please select country</option>
         {foreach $countries as $country}
           <option value="{__($country['id'])}">{__($country['country_name'])}</option>
          {/foreach}
      </select>
    </div>

    <div class="form-group">
      <label class="form-label">{__("State")}</label>
      <select id="form-state-selector" class="form-select" name="state">
        <option value="">Please select State</option>
      </select>
    </div>
  
    <div class="form-group">
      <label class="form-label">{__("City")}</label>
      <select id="form-city-selector" class="form-select" name="city">
        <option value="">Please select City</option>
      </select>
    </div>

    <!-- custom fields -->
    {if $custom_fields}
      {include file='__custom_fields.tpl' _custom_fields=$custom_fields _registration=true}
    {/if}
    <!-- custom fields -->

    <div class="form-group">
      <label class="form-label">{__("Select Marketplace")}</label>
      <select id="form-marketplace-type-selector" class="form-select" name="marketplace_type">
        <option value="service">{__("Service")}</option>
        <option value="product">{__("Product")}</option>
      </select>
    </div>

    <div id="available-quantity" class="form-group">
      <label class="form-label">{__("Quantity Available")}</label>
      <input name="quantity" type="text" class="form-control">
    </div>

    <div id="product-size" class="form-group">
      <label class="form-label">{__("Product size")}</label>
      <input name="product_size" type="text" class="form-control">
    </div>

    <div id="unit-of-quantity" class="form-group">
      <label class="form-label">{__("Units of available")}</label>
      <input name="available_unit" type="text" class="form-control">
    </div>


    <div class="form-group">
      <label class="form-label">{__("Select Media")}</label>
      <select id="form-media-type-selector" class="form-select" name="mediatype">
        <option value="media">{__("Select from Media")}</option>
        <option value="facebook">{__("Select from facebook")}</option>
        <option value="youtube">{__("Select from Youtube")}</option>
      </select>
    </div>


    <div id="product-media-upload" class="form-group">
      <label class="form-label">{__("Photos")}</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    
    <div id="facebook-url" class="form-group">
      <label class="form-label">{__("Enter facebook url")}</label>
      <input name="facebookurl" type="text" placeholder="https://fb.watch/mU5XB-DMGU/" class="form-control">
    </div>

    <div id="youtybe-url" class="form-group">
      <label class="form-label">{__("Enter youtube url")}</label>
      <input name="youtubeurl" type="text" placeholder="https://www.youtube.com/embed/a_qREkJ78f4" class="form-control">
    </div>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-product">{__("Publish")}</button>
  </div>
</form>