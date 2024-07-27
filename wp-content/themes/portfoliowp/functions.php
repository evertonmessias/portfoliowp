<?php

//Functions portfoliowp

define('SITEPATH', '/wp-content/themes/portfoliowp/');

//************* Admin Login Logo
function admin_login_logo()
{ ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <style type="text/css">

    #login {
      background: #fff;
      margin-top: 20px !important;      
      padding: 0% 0 0 !important;
      padding: 20px !important;
      box-shadow: 0 0 15px rgb(0, 0, 0, 0.8) !important;
      border-radius: 5px;
    }

    #login h1 a {
      background-image: url('<?php echo get_option('portal_input_1'); ?>');
      background-size: 100px;
      width: 100%;
      height: 80px;
    }

    .language-switcher, #login .galogin-powered, #login .galogin-or, #login .forgetmenot {
      display: none !important;
    }
    
    #login .request_registration{
      cursor: pointer;
      display: block;
      position: absolute;
      min-height: 32px;
      line-height: 2.30769231;
      padding: 0px 10px 0px 10px !important;
      font-size: 13px;
    }

  </style>

<?php }
add_action('login_enqueue_scripts', 'admin_login_logo');


//************* Admin Login Logo Link URL
function admin_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'admin_login_logo_url');


//************* Admin Login Logo's Title
function admin_login_logo_title($headertext)
{
  $headertext = esc_html__(get_bloginfo('name'), 'plugin-textdomain');
  return $headertext;
}
add_filter('login_headertext', 'admin_login_logo_title');

//************* Admin Login Register
function request_registration(){
  ?>
  <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('portal_input_5'); ?>&text=Contato%20do%20Site%20Portfolio">
    <button type="button" class="btn btn-success request_registration">Solicitar Acesso</button></a>
  <?php
}
add_action( 'login_form', 'request_registration' );


//************* URL from breadcrumbs
function url_active()
{
  return explode("/", $_SERVER['REQUEST_URI']);
}
add_action('url_active', 'url_active');

//************* category_has_parent
function category_has_parent($catid){
  $category = get_category($catid);
  if ($category->category_parent > 0){
      return true;
  }
  return false;
}
add_action('category_has_parent', 'category_has_parent');