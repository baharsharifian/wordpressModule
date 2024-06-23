<?php
function wp_lr_send_mail( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host = get_option('_lr_email_host');
    $phpmailer->SMTPAuth = true; // Ask it to use authenticate using the Username and Password properties
    $phpmailer->Port = get_option('_lr_email_port');
    $phpmailer->Username = get_option('_lr_email_username');
    $phpmailer->Password = get_option('_lr_email_password');
    $phpmailer->SMTPSecure = false;
    $phpmailer->SMTPAutoTLS = false;
    $phpmailer->From = "info@cafeamoozesh.com";
    $phpmailer->FromName = "لرن آپ";
    // Additional settings…
    //$phpmailer->SMTPSecure = 'tls';
    // Choose 'ssl' for SMTPS on port 465, or 'tls' for SMTP+STARTTLS on port 25 or 587
    //$phpmailer->From = "you@yourdomail.com";
    //$phpmailer->FromName = "Your Name";
    /*    $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true; // Ask it to use authenticate using the Username and Password properties
        $phpmailer->Port = 2525;
        $phpmailer->Username = '2edbefbc620d2e';
        $phpmailer->Password = '5f5ca9aede8b91';
        $phpmailer->From = "info@develop-wp.local";
        $phpmailer->FromName = "Vahid Salehi";*/
    
    // Additional settings…
    //$phpmailer->SMTPSecure = 'tls';
    // Choose 'ssl' for SMTPS on port 465, or 'tls' for SMTP+STARTTLS on port 25 or 587
    //$phpmailer->From = "you@yourdomail.com";
    //$phpmailer->FromName = "Your Name";
}
add_action( 'phpmailer_init', 'wp_lr_send_mail');
