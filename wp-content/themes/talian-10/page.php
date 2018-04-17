<?php get_header(); ?>

<div id="content_talia">

<div class="right-content-talia">

<div id="left-post">

<div id="put-image-here"></div>

<div id="post-entry">

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>




<div class="post-meta" id="post-<?php the_ID(); ?>">

<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

<div class="posted-aut-cat">Posted in <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?></div>

<div class="posted-aut-cat"><?php if(function_exists('the_views')) { the_views(); } ?></div>



<div class="post-content"><?php the_content() ;?></div>
</div>
<div class="post-fixed"></div>

<?php endwhile; ?>

<div class="post-fixed"></div>


<?php else: ?>

<h3>Sorry The Page Have Been Removed</h3>

<?php endif; ?>

</div>

</div>

<?php 
//get_sidebar(); 
?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>