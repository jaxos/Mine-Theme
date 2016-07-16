<div id="sidebar">
<?php $blog_name = get_bloginfo();?>
<h2><?php echo "$blog_name"?></h2>
<?php wp_nav_menu(array('container' => 'div', 'container_id' => 'sidebarmenu')); ?>

<h2 ><?php _e('Categories'); ?></h2>
<ul >
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>