<?php

defined( 'ABSPATH' ) || exit;

function tagfix_add_quicktag() {

    global $hook_suffix;

    if ( ( 'post.php' == $hook_suffix || 'post-new.php' == $hook_suffix ) && wp_script_is('quicktags')){
        ?>
        <script>
            　QTags.addButton('tagfix','<?php echo esc_attr_x('TagFix for Shortcodes', 'quicktag','tagfix'); ?>','[tagfix]','[/tagfix]','j','<?php esc_attr_e('Disables the automatically inserted p and br tags.','tagfix'); ?>');
        </script>
        <?php
    }

}

add_action('admin_print_footer_scripts', 'tagfix_add_quicktag',20);


