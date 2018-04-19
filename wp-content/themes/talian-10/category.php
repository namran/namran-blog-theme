<?php get_header(); ?>
<div id="content_talia">

    <div class="right-content-talia">

        <div id="left-post">

            <div id="put-image-here"></div>

            <div id="post-entry">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="post-meta" id="post-<?php the_ID(); ?>">

                            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                            <div class="posted-aut-cat">Posted in <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', '&#124; ', ''); ?></div>

                            <div class="posted-aut-cat">by <?php the_author_posts_link(); ?> in <strong><?php the_category(', ') ?></strong></div>

                            <div class="post-content">
                                <?php the_excerpt(','); ?>
                                <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                                        read more from this topic.....</a></p>
                            </div>

                            <div class="post-commented">

                                <div class="post-box"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>

                            </div>

                        </div>

                        <div class="post-fixed"></div>

                    <?php endwhile; ?>


                    <?php comments_template(); ?>


                    <div class="post-fixed"></div>

                    <div class="post-navs">
                        <?php if (function_exists('wp_pagenavi')): ?> <?php wp_pagenavi(); ?><?php else : ?><?php posts_nav_link(); ?><?php endif; ?>
                    </div>

                    <div class="post-fixed"></div>

                <?php else: ?>

                    <h3>Sorry The Category Have Been Removed</h3>

                <?php endif; ?>

            </div>

        </div>

        <?php get_sidebar(); ?>

        <?php get_leftbar(); ?>

        <?php get_footer(); ?>