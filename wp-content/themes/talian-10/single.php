<?php get_header(); ?>
<div id="content_talia">
<div class="right-content-talia">
<div id="left-post">
<div id="put-image-here"></div>
<div id="put-ads-here"><?php adsensem_ad('leaderboard'); ?></div>
<div id="post-entry">

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>


<?php if(function_exists('the_ratings')) { the_ratings(); } ?>  

<div class="post-meta" id="post-<?php the_ID(); ?>">

<h1><div class="calendar"><?php the_time('M'); ?>
<div class="calday"><?php the_time('j'); ?></div>
</div><!-- This is the end of the calendar div --><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

<div class="posted-aut-cat">Posted in <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?></div>

<div class="posted-aut-cat"><span class="author"><?php the_author_posts_link(); ?></span>
<span class="filedto"><?php the_category(', ') ?></span>

<span class="tag"><?php the_tags( '', ', ', ''); ?></span></div>

<div class="posted-aut-cat"><?php if(function_exists('the_views')) { the_views(); } ?> </div>
<div class="fixed"></div>
<div class="post-content"><?php the_content() ;?>



<!-- Adding google adsense into tip -->
<p />
<script type="text/javascript"><!--
google_ad_client = "pub-0486192213670544";
google_ad_slot = "4325381546";
google_ad_width = 468;
google_ad_height = 60;
//--></script>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<p />
</div>
</div> 



<div class="post-fixed"></div>

<div class="post-fixed">
 <div class="alignleft"><?php previous_post_link('<b>&laquo; Post before this:</b> %link') ?><br /></div>
 <div class="alignright"><?php next_post_link('%link <b>&raquo; Post After This</b>') ?></div>
</div>

<?php endwhile; ?>

<div class="post-fixed"></div>

<?php comments_template(); ?>




<?php else: ?>

<h3>Sorry The Topic Have Been Removed</h3>

<?php endif; ?>

</div>

</div>


<?php get_sidebar(); ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>