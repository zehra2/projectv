<div class="col-md-6 col-lg-4">
  <div class="card product {if $_boosted}boosted{/if}">
    {if $_boosted}
      <div class="boosted-icon" data-bs-toggle="tooltip" title="{__("Promoted")}">
        <i class="fa fa-bullhorn"></i>
      </div>
    {/if}
    {if $post['needs_subscription']}
      <a href="{$system['system_url']}/posts/{$post['post_id']}">
        <div class="ptb20 plr20">
          {include file='_need_subscription.tpl'}
        </div>
      </a>
    {else}
      <div class="product-image">
        <div class="product-price">
          {if $post['product']['price'] > 0}
            {print_money($post['product']['price'])}
          {else}
            {__("Free")}
          {/if}
        </div>

        {if $post['product']['mediatype'] == 'youtube' }
          <iframe id="product-video-iframe" src="{$post['product']['youtube_url']}" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"> </iframe>
        {elseif $post['product']['mediatype'] == 'facebook' }
          <iframe id="product-video-iframe" src="https://www.facebook.com/plugins/video.php?href={$post['product']['facebook_url']}" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"> </iframe>
        {else}
          {if $post['photos_num'] > 0}
          <img src="{$system['system_uploads']}/{$post['photos'][0]['source']}">
          {else}
            <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/blank_product.png">
          {/if}
        {/if}
        
       
      </div>
      <div class="product-info">
        <div class="product-meta title">
          <a href="{$system['system_url']}/posts/{$post['post_id']}" class="title">{$post['product']['name']}</a>
          {if $post['product']['marketplace_type'] == "product"}
            <span class="badge bg-info">{__("Product")}</span>
          {else}
            <span class="badge bg-info">{__("Service")}</span>
          {/if}
        </div>

        <div class="product-meta">
          {include file='__svg_icons.tpl' icon="market" class="main-icon mr5" width="24px" height="24px"}
          {if $post['product']['available']}
            {if $post['product']['quantity'] > 0}
              <span class="badge badge-lg bg-light text-success">{__("In stock")}</span>
            {else}
              <span class="badge badge-lg bg-light text-danger">{__("Out of stock")}</span>
            {/if}
          {else}
            <span class="badge badge-lg bg-light text-danger">{__("SOLD")}</span>
          {/if}
        </div>

        <div class="product-meta">
          {include file='__svg_icons.tpl' icon="saved" class="main-icon mr5" width="24px" height="24px"}
          {if $post['product']['category']}{$post['product']['category']}{else}{__("N/A")}{/if}
        </div>

        <div class="product-meta">
          {include file='__svg_icons.tpl' icon="map" class="main-icon mr5" width="24px" height="24px"}
          {if $post['product']['full_address']}{$post['product']['full_address']}{else}{__("N/A")}{/if}
        </div>

        <div class="read-more">
          <a class="button" href="{$system['system_url']}/posts/{$post['post_id']}">
            {__("Read More")}
          </a>
        </div>

      </div>
    {/if}
  </div>
</div>