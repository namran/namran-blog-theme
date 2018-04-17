<?php get_header(); ?>
<div id="content_talia">
<div class="right-content-talia">
<div id="left-post">
<div id="put-image-here"></div>

<div id="post-entry">

<?php
// This also populates the iconsize for the next line
$attachment_link = get_the_attachment_link($post->ID, true, array(450, 800));
// This lets us style narrow icons specially
$_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment';
?>

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>

<div class="post-meta" id="post-<?php the_ID(); ?>">

<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

<div class="post-content" id="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br />
<p>This is an image of <?php the_title(); ?></p>
</div>

</div>

<div class="post-fixed"></div>

<?php endwhile; ?>

<div class="post-fixed"></div>

<?php else: ?>

<h3>Sorry The Attachment Have Been Removed</h3>

<?php endif; ?>

</div>

</div>

<?php get_sidebar(); ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>