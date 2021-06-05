<?php

use Themosis\Support\Facades\Action;
use Themosis\Support\Facades\Filter;

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
Filter::add('body_class', function ($classes) {
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
});

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
Action::add('wp_head', function () {
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="' . esc_url(get_bloginfo('pingback_url')) . '">';
    }
});

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
Action::add('after_setup_theme', function () {
    $GLOBALS['content_width'] = 640;

    Filter::add('show_admin_bar', function () {
        return false;
    });
}, 0);

Action::remove('wp_head', 'print_emoji_detection_script', 7);
Action::remove('wp_print_styles', 'print_emoji_styles', 10);
Action::remove('admin_print_scripts', 'print_emoji_detection_script', 10);
Action::remove('admin_print_styles', 'print_emoji_styles', 10);

Action::add('wp_enqueue_scripts', function () {
    wp_enqueue_style('dashicons');
});

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        [
            'menu_title' => 'Website',
            'page_title' => 'Website',
            'menu_slug'  => 'website',
            'redirect'   => false
        ]
    );

//    acf_add_options_sub_page(
//        [
//            'menu_title'  => 'Sub Page',
//            'page_title'  => 'Sub Page',
//            'menu_slug'   => 'sub-page',
//            'parent_slug' => 'website',
//        ]
//    );
}

if (function_exists('pll_register_string')) {
    pll_register_string('back_to_home', 'Back to Home');
}

function validateRecaptcha($action, $token)
{
    if (!isset($token)) {
        return false;
    }

    $parameters = ['secret' => get_field('google_recaptcha_secret_key', 'option'), 'response' => $token];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
    $response = curl_exec($ch);
    $response = json_decode($response, true);
    curl_close($ch);

    if ($response['success'] && $response['action'] == $action && $response['score'] >= 0.5) {
        return $response['success'];
    } else {
        return false;
    }
}

Ajax::listen('submit_contact_form', function () {
    if (!wp_verify_nonce($_POST['wp_nonce'], 'wp-nonce')) {
        echo json_encode(['status' => 0, 'message' => 'Invalid nonce.']);
        die();
    }

    if (!validateRecaptcha($_POST['action'], $_POST['recaptcha_token'])) {
        echo json_encode(['status' => 2, 'message' => 'Failed to validate recaptcha.']);
        die();
    }

    $to = [];
    $to[] = get_option('admin_email');
    $subject = 'Enquiry';
    $headers = [];
    $headers[] = 'From: ' . $_POST['name'] . ' <' . $_POST['email'] . '>';
    $recipients = get_field('enquiry_recipients', 'option');
    if (count($recipients)) {
        foreach ($recipients as $recipient) {
            $headers[] = 'Cc: ' . $recipient['name'] . ' <' . $recipient['email'] . '>';
        }
    }

    ob_start();

    echo '<p><strong>Name</strong>: ' . $_POST['name'] . '</p>
<p><strong>Phone</strong>: ' . $_POST['phone'] . '</p>
<p><strong>Email</strong>: ' . $_POST['email'] . '</p>
';

    if (isset($_POST['message'])) {
        echo '<p><strong>Message</strong>: ' . $_POST['message'] . '</p>';
    }

    $message = ob_get_contents();

    ob_end_clean();

    $mail = wp_mail($to, $subject, $message, $headers);

    if (!$mail) {
        echo json_encode(['status' => 3, 'message' => 'Failed to send.']);
        die();
    }

    echo json_encode(['status' => 1, 'message' => 'Sent successfully.']);
    die();
});

Filter::add('wp_mail_content_type', function () {
    return 'text/html';
});

Action::add('wp_mail_failed', function ($wp_error) {
    echo "<pre>" . print_r($wp_error) . "</pre>";
    die();
});
