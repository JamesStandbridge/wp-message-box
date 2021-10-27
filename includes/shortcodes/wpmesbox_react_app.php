<?php

add_shortcode( 'wpmesbox_react_app', 'wpmesbox_react_app' );

function wpmesbox_react_app($atts = array(), $content = null , $tag = 'wpmesbox_react_app')
{
    ob_start();
    ?>
        <div id="app-wpmesbox">WPmesbox application</div>
        <?php wp_enqueue_script( 
            'wpmesbox-app', 
            plugins_url('build/index.js', WPMB_PLUGIN), 
            array('wp-element'), 
            time(), 
            true 
        ); ?>
    <?php return ob_get_clean();
}