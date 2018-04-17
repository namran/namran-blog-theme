<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="content_talia">
<div class="right-content-talia">
<div id="left-post">
<div id="put-image-here"></div>

<div id="post-entry">

<?php if(have_posts()) : ?>



<div class="post-meta" id="<?php _e('Archives by Category') ?>">

<h1><?php _e('Archives by Category') ?></h1>

<div class="post-content">
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&feed=RSS') ?>
</ul>
</div>

<div class="post-fixed"></div>

<h1><?php _e('Archives by Month') ?></h1>

<div class="post-content">
<ul>
<?php wp_get_archives('type=monthly&show_post_count=1') ?>
</ul>
</div>

<div class="post-fixed"></div>

<h1>Last Twelve Months</h1>

<div class="post-content">
<ul>
<?php get_archives('postbypost', 20); ?>
</ul>
</div>

</div>




<?php endif; ?>

</div>

</div>

<?php get_sidebar(); ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>