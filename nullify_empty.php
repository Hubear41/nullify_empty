<?php
/*
   Plugin Name: Nullify Fields
    Plugin URI: https://github.com/Hubear41/nullify_empty
   description: Nullifies empty ACF fields to prevent GraphQL from obscuring the fields.
      Based off of the comment at: https://github.com/gatsbyjs/gatsby/issues/4461
   Version: 1.0
   Author: Dennis Hu
   License: GPL2
   */

// Nullifying Empty ACF Values
// Fixes optional fields being obscured by GraphQL   

function nullify_empty($value, $post_id, $field)
{
   if (empty($value)) {
      return null;
   }

   return $value;
}

add_filter('acf/format_value/type=image', 'nullify_empty', 100, 3);
add_filter('acf/format_value/type=relationship', 'nullify_empty', 100, 3);
add_filter('acf/format_value/type=taxonomy', 'nullify_empty', 100, 3);
add_filter('acf/format_value/type=post_object', 'nullify_empty', 100, 3);
