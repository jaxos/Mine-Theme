<?php
// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . 'Czytaj dalej &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');
   ?>
