<?php get_header(); ?>
<div id="content_talia">

<div class="right-content-talia">

<div id="left-post">

<div id="put-image-here"></div>

<div id="post-entry">

<?php if(have_posts()) : ?>

<h3>Search Result For &quot;<?php the_search_query(); ?>&quot;</h3>

<?php while(have_posts()) : the_post(); ?>

<div class="post-meta" id="post-<?php the_ID(); ?>">

<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

<div class="posted-aut-cat">
Posted in <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?>
</div>

<div class="posted-aut-cat">by <?php the_author_posts_link(); ?> in <?php the_category(', ') ?></div>

<div class="post-content">
<?php the_excerpt(','); ?>
<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
read more from this search.....</a></p>

<script type="text/javascript"><!--
google_ad_client = "pub-0486192213670544";
google_ad_slot = "0715863013";
google_ad_width = 468;
google_ad_height = 60;
//--></script>


</div>

<div class="post-commented">

<div class="post-box"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>

</div>

</div>

<div class="post-fixed"></div>

<?php endwhile; ?>


<div class="post-fixed"></div>

<div class="post-navs">
<?php if(function_exists('wp_pagenavi')): ?> <?php wp_pagenavi(); ?><?php else : ?><?php posts_nav_link(); ?><?php endif; ?>
</div>

<div class="post-fixed"></div>

<?php else: ?>

<h3>Sorry We Do Not Found Anything Match Your Search</h3>

  

<form action="https://www.google.com.my/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-0486192213670544:bsi632fo2nu" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="29" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>

<script type="text/javascript" src="https://www.google.com.my/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>


<?php endif; ?>

</div>

</div>

<?php get_sidebar(); ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>