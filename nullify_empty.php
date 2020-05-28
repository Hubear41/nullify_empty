<?php
/*
   Plugin Name: Nullify Fields
   Plugin URI: http://my-awesomeness-emporium.com
   description: >- Prevents WordPress from returning `false` for 
      empty fields instead of empty arrays or null. Customized for AAIFF Website.
      Based off of the comment: https://github.com/gatsbyjs/gatsby/issues/4461
   Version: 1.0
   Author: Dennis Hu
   License: GPL2
   */

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
