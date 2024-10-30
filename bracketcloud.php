<?php
/*
Plugin Name: BracketCloud
Plugin URI: http://bracketcloud.com
Description: Implements a shortcode for embedding BracketCloud tournaments in post content.
Version: 1.0.2
Author: BracketCloud
Author URI: http://bracketcloud.com
*/

// [bracketcloud tid="123" width="600" height="500"]
function bracketcloud_embed( $atts ) {
  extract( shortcode_atts( array(
    'tid' => '627',
    'width' => '600',
    'height' => '500',
  ), $atts ) );

  return "<iframe src=\"http://bracketcloud.com/embed/{$tid}\" width=\"{$width}\" height=\"{$height}\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\" title=\"BracketCloud Tournament\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><br/><small><span style=\"color:#a3a3a3\">Updates every minute - </span><a href=\"http://bracketcloud.com/tournament/{$tid}\" style=\"color:#0088cc;text-align:left\">View full tournament</a></small>";
}

add_shortcode( 'bracketcloud', 'bracketcloud_embed' );

?>
