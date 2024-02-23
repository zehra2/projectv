<?php
/* Smarty version 4.3.4, created on 2024-02-05 14:57:55
  from 'D:\wamp\www\mediavbay-new\content\themes\default\templates\_sign_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c0f773b75a78_84203551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e5c82df6d308ff718b6a49377065defa87b4ff8' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\templates\\_sign_form.tpl',
      1 => 1707144858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_65c0f773b75a78_84203551 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card card-register">

  <!-- signin -->
  <div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>x-hidden<?php }?>">
    <div class="card-header">
      <h4 class="card-title"><?php echo __("Sign In to your Account");?>
</h4>
      <p><?php echo __("Welcome back! please enter your detail");?>
</p>
    </div>
    <div class="card-body pt0">
      <?php if ((isset($_smarty_tpl->tpl_vars['highlight']->value))) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div><?php }?>
      <form class="js_ajax-forms" data-url="core/signin.php" method="POST">
        <!-- username or email -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-text bg-transparent"><i class="fas fa-envelope fa-fw"></i></span>
            <input type="text" class="form-control" placeholder='<?php echo __("Email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
' name="username_email" required>
          </div>
        </div>
        <!-- username or email -->
        <!-- password -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-text bg-transparent"><i class="fas fa-lock fa-fw"></i></span>
            <input type="password" class="form-control" placeholder='<?php echo __("Password");?>
' name="password" required>
          </div>
        </div>
        <!-- password -->
        <!-- remember me -->
        <div class="row">
          <div class="col-12 col-lg-6 mb10">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="remember">
              <label class="form-check-label" for="remember"><?php echo __("Remember me");?>
</label>
            </div>
          </div>
          <div class="col-12 col-lg-6 mb10">
            <a class="float-end" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"><?php echo __("Forgotten password?");?>
</a>
          </div>
        </div>
        <!-- remember me -->
        <!-- submit -->
        <div class="form-group d-grid">
          <button type="submit" class="btn btn-lg btn-primary"><?php echo __("Sign In");?>
</button>
        </div>
        <!-- submit -->
        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
          <div class="hr-heading mt5 mb10">
            <div class="hr-heading-text">
              <?php echo __("or");?>

            </div>
          </div>
          <div class="text-center">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
                <i class="fab fa-google"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                <i class="fab fa-twitter"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                <i class="fab fa-linkedin"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                <i class="fab fa-vk"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/wordpress" class="btn btn-sm btn-rounded btn-social-icon btn-wordpress">
                <i class="fab fa-wordpress"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['sngine_login_enabled']) {?>
              <a href="https://<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_domain'];?>
/api/oauth?app_id=<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_appid'];?>
" class="btn btn-sm btn-rounded btn-social-icon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_icon'];?>
" width="30" height="30" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_name'];
$_prefixVariable1 = ob_get_clean();
echo __($_prefixVariable1);?>
">
              </a>
            <?php }?>
          </div>
        <?php }?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>
        <div class="mt30 text-center">
          <?php echo __("Don’t have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup" class="js_toggle-panel text-link"><?php echo __("Sign Up");?>
</a>
        </div>
      <?php }?>
    </div>
  </div>
  <!-- signin -->

  <!-- signup -->
  <div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value != 'up') {?>x-hidden<?php }?>">
    <div class="card-header">
      <h4 class="card-title"><?php echo __("Sign Up for an Account");?>
</h4>
    </div>
    <div class="card-body pt0">
      <form class="js_ajax-forms" data-url="core/signup.php" method="POST">
        <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>
          <!-- invitation code -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-handshake fa-fw"></i></span>
              <input name="invitation_code" type="text" class="form-control" placeholder='<?php echo __("Invitation Code");?>
' value="<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value;?>
" required>
            </div>
          </div>
          <!-- invitation code -->
        <?php }?>
        <!-- first name -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-text bg-transparent"><i class="fas fa-user fa-fw"></i></span>
            <input name="first_name" type="text" class="form-control" placeholder='<?php echo __("First name");?>
' required>
          </div>
        </div>
        <!-- first name -->
        <!-- last name -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-text bg-transparent"><i class="fas fa-user fa-fw"></i></span>
            <input name="last_name" type="text" class="form-control" placeholder='<?php echo __("Last name");?>
' required>
          </div>
        </div>
        <!-- last name -->
        <!-- username -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-text bg-transparent"><i class="fas fa-globe fa-fw"></i></span>
            <input name="username" type="text" class="form-control" placeholder='<?php echo __("Username");?>
' required>
          </div>
        </div>
        <!-- username -->
        <!-- email -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-text bg-transparent"><i class="fas fa-envelope fa-fw"></i></span>
            <input name="email" type="email" class="form-control" placeholder='<?php echo __("Email");?>
' required>
          </div>
        </div>
        <!-- email -->
        <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>
          <!-- phone -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-phone fa-fw"></i></span>
              <input name="phone" type="text" class="form-control" placeholder='<?php echo __("Phone number (e.g: +1234567890)");?>
' required>
            </div>
          </div>
          <!-- phone -->
        <?php }?>
        <!-- password -->
        <div class="form-group">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-key fa-fw"></i></span>
              <input name="password" type="password" class="form-control" placeholder='<?php echo __("Password");?>
' required>
            </div>
          </div>
        </div>
        <!-- password -->
        <!-- custom fields -->
        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
        <?php }?>
        <!-- custom fields -->
        <div class="js_hidden-section x-hidden">
          <?php if (!$_smarty_tpl->tpl_vars['system']->value['genders_disabled']) {?>
            <!-- genders -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-venus-mars fa-fw"></i></span>
                <select class="form-select" name="gender" id="gender" required>
                  <option value="none"><?php echo __("Select Sex");?>
:</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_name'];?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>
            <!-- genders -->
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>
            <!-- birthdate -->
            <div class="form-group">
              <label class="form-label"><?php echo __("Birthdate");?>
</label>
              <div class="row">
                <div class="col">
                  <select class="form-select" name="birth_month">
                    <option value="none"><?php echo __("Month");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                  </select>
                </div>
                <div class="col">
                  <select class="form-select" name="birth_day">
                    <option value="none"><?php echo __("Day");?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                      <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                    <?php }
}
?>
                  </select>
                </div>
                <div class="col">
                  <select class="form-select" name="birth_year">
                    <option value="none"><?php echo __("Year");?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2023+1 - (1905) : 1905-(2023)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                      <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                    <?php }
}
?>
                  </select>
                </div>
              </div>
            </div>
            <!-- birthdate -->
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
            <div class="form-group">
              <!-- reCAPTCHA -->
              <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
              <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
              <!-- reCAPTCHA -->
            </div>
          <?php }?>
                    <input type="text" name="field1" style="display:none !important" tabindex="-1" autocomplete="off">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['newsletter_consent']) {?>
            <!-- newsletter consent -->
            <div class="form-check mb10">
              <input type="checkbox" class="form-check-input" name="newsletter_agree" id="newsletter_agree">
              <label class="form-check-label" for="newsletter_agree">
                <?php echo __("I expressly agree to receive the newsletter");?>

              </label>
            </div>
            <!-- newsletter consent -->
          <?php }?>
          <!-- privacy & terms consent -->
          <div class="form-check mb10">
            <input type="checkbox" class="form-check-input" name="privacy_agree" id="privacy_agree">
            <label class="form-check-label" for="privacy_agree">
              <?php echo __("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/terms" target="_blank"><?php echo __("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/privacy" target="_blank"><?php echo __("Privacy Policy");?>
</a>
            </label>
          </div>
          <!-- privacy & terms consent -->
        </div>
        <!-- submit -->
        <div class="form-group d-grid">
          <button type="submit" class="btn btn-lg btn-primary"><?php echo __("Sign Up");?>
</button>
        </div>
        <!-- submit -->
        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
          <div class="hr-heading mt5 mb10">
            <div class="hr-heading-text">
              <?php echo __("or");?>

            </div>
          </div>
          <div class="text-center">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
                <i class="fab fa-google"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                <i class="fab fa-twitter"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                <i class="fab fa-linkedin"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                <i class="fab fa-vk"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/wordpress" class="btn btn-sm btn-rounded btn-social-icon btn-wordpress">
                <i class="fab fa-wordpress"></i>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['sngine_login_enabled']) {?>
              <a href="https://<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_domain'];?>
/api/oauth?app_id=<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_appid'];?>
" class="btn btn-sm btn-rounded btn-social-icon">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_icon'];?>
" width="30" height="30" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['system']->value['sngine_app_name'];
$_prefixVariable2 = ob_get_clean();
echo __($_prefixVariable2);?>
">
              </a>
            <?php }?>
          </div>
        <?php }?>
      <?php }?>
      <div class="mt20 text-center">
        <?php echo __("Already have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin" class="js_toggle-panel text-link"><?php echo __("Sign In");?>
</a>
      </div>
    </div>
  </div>
  <!-- signup -->
</div><?php }
}
