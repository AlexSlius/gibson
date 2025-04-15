<?php

add_action('wp_ajax_send_contact_form', 'handle_send_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'handle_send_contact_form');

function handle_send_contact_form()
{
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    $to = get_option('admin_email');
    $subject = 'New message from form';
    $headers = ['Content-Type: text/html; charset=UTF-8'];
    $body = "
        <strong>Name:</strong> $name <br>
        <strong>Email:</strong> $email <br>
        <strong>Phone:</strong> $phone <br>
        <strong>Message:</strong><br> $message
    ";

    $sent = wp_mail($to, $subject, $body, $headers);

    wp_send_json_success(['sent' => $sent]);
}
