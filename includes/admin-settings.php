<?php

// Add admin menu
function ab_add_admin_menu() {
    add_options_page('Announcement Banner', 'Announcement Banner', 'manage_options', 'announcement-banner', 'ab_settings_page');
}
add_action('admin_menu', 'ab_add_admin_menu');

// Settings page
function ab_settings_page() {
    ?>
    <div class="wrap">
        <h1>Announcement Banner Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('ab_settings_group');
            do_settings_sections('announcement-banner');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings
function ab_settings_init() {
    register_setting('ab_settings_group', 'ab_text');
    register_setting('ab_settings_group', 'ab_link');
    
    add_settings_section('ab_section', '', null, 'announcement-banner');
    
    add_settings_field('ab_text', 'Banner Text', 'ab_text_field_render', 'announcement-banner', 'ab_section');
    add_settings_field('ab_link', 'Button Link', 'ab_link_field_render', 'announcement-banner', 'ab_section');
}

// Settings fields
add_action('admin_init', 'ab_settings_init');

// Render settings fields
function ab_text_field_render() {
    $text = get_option('ab_text', 'Default announcement text');
    echo '<input type="text" name="ab_text" value="' . esc_attr($text) . '">';
}

function ab_link_field_render() {
    $link = get_option('ab_link', '#');
    echo '<input type="url" name="ab_link" value="' . esc_attr($link) . '">';
}
