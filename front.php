<?php

defined( 'ABSPATH' ) || exit;

add_filter('the_content', function($content){

    global $post;

    
    if( !$post->post_content ) return $content;

    
    preg_match_all( '#\[tagfix\](.*?)\[\/tagfix\]#ms', $post->post_content , $jo );

    if( isset( $jo[0] ) && $jo[0] ){

        $content = strtr( $content , array(
            '<p>[tagfix]' => '[tagfix]',
            '[/tagfix]</p>' => '[/tagfix]',
        ));

        
        preg_match_all( '#\[tagfix\](.*?)\[\/tagfix\]#ms', $content, $in_jo );

        foreach($jo[1] as $key => $val){
            
            $content = str_replace( $in_jo[0][$key], $val, $content );

        }

    }

    return $content;

});
