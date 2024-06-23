<?php
add_action('wp_ajax_nopriv_wp_lr_auth_login','wp_lr_auth_login');
function wp_lr_auth_login(){
    if(isset($_POST['_nonce']) && !wp_verify_nonce($_POST['_nonce'])){
        die('Access Denied!!!');
    }
    $email = sanitize_text_field($_POST['email']);
    $password = sanitize_text_field($_POST['password']);
    $remember_me  = rest_sanitize_boolean($_POST['remember_me']);
    wp_lr_validate_input($email,$password);
    $user_login = get_user_by_email($email);
    $user_login = $user_login->user_login;
    $creds = [
        /*'user_login'=>sanitize_user($_POST['user_name']),*/
        'user_login'=>sanitize_user($user_login),
        'user_password'=>$password,
        'remember'=>$remember_me
    ];
    $user = wp_signon($creds,false);
   if(!is_wp_error($user)){
//       wp_clear_auth_cookie();
       wp_set_current_user($user-ID,$user->user_login);
      /*wp_set_auth_cookie($user-ID);*/

       wp_send_json([
           'success'=>true,
           'message'=>'ورود شما موفقیت آمیز بود در حال انتقال ...'
       ],200);
  /*    wp_redirect(site_url());*/
   }else{
       wp_send_json([
           'error'=>true,
           'message'=>'نام کاربری یا کلمه عبور اشتباه است!'
       ],403);
   }
    
    
}

function wp_lr_validate_input($email,$password){
    if(empty($email) && empty($password)){
        wp_send_json([
            'error'=>ture,
            'message'=>'لطفا ایمیل و کلمه عبور خود را وارد نمایید.'
        ],403);
    }
    if(empty($email)){
        wp_send_json([
        'error'=>ture,
        'message'=>'لطفا ایمیل خود را وارد نمایید.'
        ],403);
    }
    if(empty($password)){
        wp_send_json([
            'error'=>ture,
            'message'=>'لطفا کلمه عبور خود را وارد نمایید.'
        ],403);
    }
  
    if(!is_email($email)){
        wp_send_json([
            'error'=>ture,
            'message'=>'لطفا ایمیل معتبر وارد نمایید'
        ],403);
    }

}

//Set expired Auth Cookie
add_filter('auth_cookie_expiration','wp_lr_set_cookie',1);
function wp_lr_set_cookie($expiration){
    return $expiration = 60*60*48;
}

