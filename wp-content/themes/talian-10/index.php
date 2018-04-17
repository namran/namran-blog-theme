<?php get_header(); ?>


<div id="content_talia">
    <div class="right-content-talia">
        <div id="left-post">

            <div id="put-image-here"></div>
            <div id="put-ads-here"><?php adsensem_ad('leaderboard'); ?></div>
            <div id="post-entry">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>


                        <div class="post-meta" id="post-<?php the_ID(); ?>">
                            <h1><div class="calendar"><?php the_time('M'); ?>
                                    <div class="calday"><?php the_time('j'); ?></div>
                                </div><!-- This is the end of the calendar div -->
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                            <div class="posted-aut-cat">Posted on <?php the_time('l, F jS, Y \a\t G:i') ?> MYT  (+08 UTC)   <?php edit_post_link('Edit', '&#124; ', ''); ?></div>

                            <div class="posted-aut-cat">by <?php the_author_posts_link(); ?> in <span class="filedto"> <?php the_category(', ') ?></span> </div>
               
                            <div class="wp_plus_one_button" style="margin: 0 8px 8px 0; float:left; "><g:plusone href="<?php the_permalink(); ?>"></g:plusone></div>


                            <div class="post-content"><?php the_content('Continue reading this post...'); ?></div>


                            <div class="posted-aut-cat"> </div>
                            <div class="post-commented">
                                <span class="tag"><?php the_tags('Tags: ', ', ', '</p>'); ?></span>
                                
                                <?php if (function_exists('the_ratings')) { the_ratings(); } ?>

                                <?php if (function_exists('the_views')) { the_views(); } ?>

                                <div><a href="<?php the_permalink(); ?>#comment-area" title="<?php the_title(); ?>"><fb:comments-count href="<?php the_permalink(); ?>"></fb:comments-count> comment(s) via Facebook </a></div>

                                <div class="post-box"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>

                            </div>

                        </div>

                        <div class="post-fixed"></div>

    <?php endwhile; ?>


    <?php comments_template(); ?>


                    <div class="post-fixed"></div>

                    <div class="post-navs">
    <?php adsensem_ad('leaderboard'); ?>
                    <?php if (function_exists('wp_pagenavi')): ?> <?php wp_pagenavi(); ?><?php else : ?><?php posts_nav_link(); ?><?php endif; ?>
                    </div>

                    <div class="post-fixed"></div>

                <?php else: ?>

                    <h3>Sorry The Post Have Been Removed</h3>

<?php endif; ?>

            </div>

        </div>

        <?php //get_sidebar();
        ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>