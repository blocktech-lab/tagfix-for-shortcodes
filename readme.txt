=== TagFix for Shortcodes ===
Contributors: blocktech-lab
Tags: p,br,shortcode
Requires at least: 4.8.9
Tested up to: 6.5
Stable tag: 0.5.2
Requires PHP: 5.6.0

WP automatically inserts <p> and <br> tags, but disables this functionality within shortcodes.

## Description

When you enter HTML code directly, WordPress automatically inserts `<p>` and `<br>` tags, which can alter your layout.

To prevent this, you can use:
remove_filter('the_content', 'wpautop');

However, this disables all auto-inserted `<p>` and `<br>` tags, which is not user-friendly.

This plugin offers a more flexible solution by allowing partial disabling of auto-inserted tags.

Simply wrap the HTML code you want to exclude with the shortcode:
[tagfix]your HTML code[/tagfix]
