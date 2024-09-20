<?php
function theme_enqueue_scripts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    // wp_enqueue_style('theme-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);

    // Enqueue your JavaScript file
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);

    wp_localize_script('custom-ajax-script', 'ajax_object', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function add_additional_class_on_li($classes, $item, $args)
{
    $menu_object = wp_get_nav_menu_object($args->menu);

    if ($menu_object && $menu_object->name === 'primary-navigation') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_link_atts($atts, $item, $args)
{
    $menu_object = wp_get_nav_menu_object($args->menu);

    if ($menu_object && $menu_object->name === 'primary-navigation') {
        $atts['class'] = 'nav-link';  // Add Bootstrap class to <a>
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 3);


function get_first_half_menu_items($menu_name, $isSecond = false, $isAll = false)
{

    $menu = wp_get_nav_menu_object($menu_name);
    if (!$menu) {
        return array();
    }


    $menu_items = wp_get_nav_menu_items($menu->term_id);


    $total_items = count($menu_items);
    $half_items = ceil($total_items / 2);

    return array_slice($menu_items, $isSecond ? $half_items : 0, $isAll ? $total_items : $half_items);
}

add_filter('wpcf7_autop_or_not', '__return_false');

function get_service_by_id()
{
    if (isset($_POST['post_id']) && is_numeric($_POST['post_id'])) {
        $post_id = intval($_POST['post_id']);

        $service = get_post($post_id);

        if ($service && $service->post_type === 'service') {
            // Retrieve the default post fields
            $service_data = array(
                'title' => $service->post_title,
                'content' => $service->post_content,
            );

            $service_name = get_field('service_name', $post_id);
            $service_description = get_field('service_description', $post_id);
            $service_image = get_field('service_image', $post_id);

            $service_data['service_name'] = $service_name;
            $service_data['service_description'] = $service_description;
            $service_data['service_image'] = $service_image;
            $service_link = get_permalink($service->ID);
            $service_data['service_link'] = $service_link;

            wp_send_json_success($service_data);
        } else {
            wp_send_json_error('Post not found or invalid post type.');
        }
    } else {
        wp_send_json_error('Invalid post ID.');
    }
}

add_action('wp_ajax_get_service_by_id', 'get_service_by_id');
add_action('wp_ajax_nopriv_get_service_by_id', 'get_service_by_id');