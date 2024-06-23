<?php
/*
Plugin Name: پلاگین ورود و عضویت
Plugin URI: https://wordpress.org/plugins/wp-login-registration-pl
Description: پلاگین ورود و عضویت
Author: وحید صالحی
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: http://develop-wp.local
*/


if(!session_id()){
    session_start();
}
defined('ABSPATH') || exit;
define('LR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('LR_PLUGIN_URL', plugin_dir_url(__FILE__));
//Register Front Admin Admin Assets
function wp_lr_register_assets()
{
    //CSS
    wp_register_style('lr-slick-style', LR_PLUGIN_URL . 'assets/css/front/slick.css', '', '1.0.0');
    wp_register_style('lr-slick-theme-style', LR_PLUGIN_URL . 'assets/css/front/slick-theme.css', '', '1.0.0');
    wp_register_style('lr-toast', LR_PLUGIN_URL . 'assets/css/front/jquery.toast.css', '', '1.0.0');
    wp_register_style('lr-style', LR_PLUGIN_URL . 'assets/css/front/style.css', '', '1.0.0');
    wp_enqueue_style('lr-slick-style');
    wp_enqueue_style('lr-slick-theme-style');
    wp_enqueue_style('lr-toast');
    wp_enqueue_style('lr-style');
    //JSS
    
    wp_register_script('toast-js', LR_PLUGIN_URL . 'assets/js/front/jquery.toast.js', ['jquery'], '1.0.0', 'true');
    wp_register_script('slick-js', LR_PLUGIN_URL . 'assets/js/front/slick.js', ['jquery'], '1.0.0', 'true');
    wp_register_script('lr-main-js', LR_PLUGIN_URL . 'assets/js/front/main.js', ['jquery'], '1.0.0', 'true');
    
    wp_enqueue_script('lr-ajax-js', LR_PLUGIN_URL . 'assets/js/front/ajax.js', ['jquery'], '1.0.0', 'true');
    wp_localize_script('lr-ajax-js', 'lr_ajax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        '_nonce' => wp_create_nonce()
    ]);
    wp_enqueue_script('toast-js');
    wp_enqueue_script('slick-js');
    wp_enqueue_script('lr-main-js');
}
function wp_lr_register_assets_admin()
{
    //CSS
    wp_register_style('lr-admin-style', LR_PLUGIN_URL . 'assets/css/admin/admin-style.css', '', '1.0.0');
    wp_enqueue_style('lr-admin-style');
    //JS
    wp_register_script('lr_admin_main-js', LR_PLUGIN_URL . 'assets/js/admin/admin-js.js', ['jquery'], '1.0.0', 'true');
    wp_enqueue_script('lr_admin_main-js');
}
add_action('wp_enqueue_scripts', 'wp_lr_register_assets');
add_action('admin_enqueue_scripts', 'wp_lr_register_assets_admin');


//Include Files

include_once LR_PLUGIN_DIR.'view/front/login.php';
include_once LR_PLUGIN_DIR.'_inc/login.php';
include_once LR_PLUGIN_DIR.'_inc/register.php';
include_once LR_PLUGIN_DIR.'_inc/recover-password.php';
include_once LR_PLUGIN_DIR.'_inc/change-password.php';
include_once LR_PLUGIN_DIR.'_inc/sendSms.php';
include_once LR_PLUGIN_DIR.'_inc/sendMail.php';
include_once LR_PLUGIN_DIR.'_inc/helper.php';
include_once LR_PLUGIN_DIR.'_inc/sms_functions.php';
include_once (ABSPATH.'wp-includes/pluggable.php');

//Active And Deactivate settings
function wp_lr_set_setting()
{
    global $wpdb;
    $table_verify_sms = $wpdb->prefix.'lr_sms_verify_code';
    $table_recover_password_verify = $wpdb->prefix.'lr_recover_password_verify';
    $sms_verify_code = "CREATE TABLE IF NOT EXISTS `$table_verify_sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verification_code` varchar(6) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 :unverify 1:verify',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;";
    $recover_password_verify="CREATE TABLE IF NOT EXISTS `sl_lr_recover_password_verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0:unverify 1:verify',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;";
    include_once (ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sms_verify_code);
    dbDelta($recover_password_verify);
    
}
register_activation_hook(__FILE__, 'wp_lr_set_setting');
function wp_lr_delete_setting()
{
 /*   global $wpdb;
    $table_verify_sms = $wpdb->prefix.'lr_sms_verify_code';
    $table_recover_password_verify = $wpdb->prefix.'lr_recover_password_verify';
    $sms_verify_code ="DROP TABLE IF EXISTS `$table_verify_sms`";
    $recover_password_verify ="DROP TABLE IF EXISTS `$table_recover_password_verify`";
    $wpdb->query($sms_verify_code);
    $wpdb->query($recover_password_verify);*/
 
}
register_deactivation_hook(__FILE__, 'wp_lr_delete_setting');

/*function mail_error($wp_error){
    echo '<pre>';
    print_r($wp_error);
    echo '</pre>';
}
add_action('wp_mail_failed','mail_error');*/


