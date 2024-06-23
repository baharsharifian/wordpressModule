<?php
add_action('wp_ajax_nopriv_wp_lr_change_password', 'wp_lr_change_password');
function wp_lr_change_password()
{
    if (isset($_POST['_nonce']) && !wp_verify_nonce($_POST['_nonce'])) {
        die('Access Denied!!!');
    }
    $new_password = sanitize_text_field($_POST['new_password']);
    $repeat_new_password = sanitize_text_field($_POST['repeat_new_password']);
    $token = sanitize_text_field($_POST['token']);
    wp_lr_validate_password($new_password, $repeat_new_password);
    $user_ID = wp_lr_find_user_id($token);
    $reset_password = wp_set_password($new_password, $user_ID);
    if(!is_wp_error($reset_password)){
        delete_recover_password_token( $token);
        wp_send_json([
            'success' => true,
            'message' => 'کلمه عبور با موفقیت تغیر کرد.'
        ], 200);
    }else{
        wp_send_json([
            'error' => true,
            'message' => 'خطایی در تغیر کلمه عبور شما زخ داده است!'
        ], 403);
    }
}

function wp_lr_validate_password($new_password, $new_repeat_password)
{
    if ($new_password == '' || $new_repeat_password == '') {
        wp_send_json([
            'error' => true,
            'message' => 'کلمه عبور و تکرار آن را وارد نمایید!'
        ], 403);
    } elseif ($new_password != $new_repeat_password) {
        wp_send_json([
            'error' => true,
            'message' => 'کلمه عبور با تکرار آن یکسان نیست!'
        ], 403);
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%^&*])(?=.{8,})/', $new_password)) {
        wp_send_json([
            'error' => true,
            'message' => 'کلمه عبور باید شامل حداقل 8 کارکتر و ترکیبی از حروف کوچک, بزرگ, اعداد و کارکترهای ویژه باشد!'
        ], 403);
    }
}

function wp_lr_find_user_id($token)
{
    global $wpdb;
    $table = $wpdb->prefix . 'lr_recover_password_verify';
    $stmt = $wpdb->get_row($wpdb->prepare("SELECT email FROM {$table} WHERE token ='%s'", $token));
    $user = get_user_by_email($stmt->email);
    return $user->ID;
}

function delete_recover_password_token($token){
    global $wpdb;
    $table = $wpdb->prefix . 'lr_recover_password_verify';
    $where =['token'=>$token];
    $where_format = ['%s'];
    
    $wpdb->delete($table,$where,$where_format);
}