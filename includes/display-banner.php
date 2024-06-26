<?php

// Display banner
function ab_display_banner()
{
    $text = get_option('ab_text', 'Default announcement text');
    $link = get_option('ab_link', '#');
    echo '<div id="announcement-banner">
            <p>' . esc_html($text) . '</p>
            <a href="' . esc_url($link) . '">Learn more</a>
          </div>';
}
add_action('wp_footer', 'ab_display_banner');
