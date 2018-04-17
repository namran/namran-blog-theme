<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>
<div id="content_talia">
<div class="right-content-talia">
<div id="left-post">
<div id="put-image-here"></div>

<div id="post-entry">

<?php if(have_posts()) : ?>

<div class="post-meta" id="archives-sitemap">

<h1>All internal pages:</h1>

<div class="post-content">
<ul>
<?php wp_list_pages('title_li='); ?>
</ul>
</div>

<div class="post-fixed"></div>

<h1>All internal blog posts:</h1>

<div class="post-content">
<ul>
<?php $archive_query = new WP_Query('showposts=1000');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> (<?php comments_number('0', '1', '%'); ?>)</li>
<?php endwhile; ?>
</ul>
</div>

<div class="post-fixed"></div>

<h1>Available RSS Feeds:</h1>

<div class="post-content">
<ul>
<li><a href="<?php bloginfo('rdf_url'); ?>" title="RDF/RSS 1.0 feed"><acronym title="Resource Description Framework">RDF</acronym>/<acronym title="Really Simple Syndication">RSS</acronym> 1.0 feed</a></li>
					<li><a href="<?php bloginfo('rss_url'); ?>" title="RSS 0.92 feed"><acronym title="Really Simple Syndication">RSS</acronym> 0.92 feed</a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 feed"><acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed</a></li>
					<li><a href="<?php bloginfo('atom_url'); ?>" title="Atom feed">Atom feed</a></li>
</ul>
</div>

</div>


<?php endif; ?>

</div>

</div>

<?php get_sidebar(); ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>