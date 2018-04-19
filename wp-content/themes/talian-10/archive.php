<?php get_header(); ?>
<div id="content_talia">

    <div class="right-content-talia">

        <div id="left-post">

            <div id="put-image-here"></div>

            <div id="post-entry">

    <?php if (have_posts()) : ?>

                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

                    <?php /* If this is a category archive */ 
                    if (is_category()) {
                        ?>

                        <h2>Archive for the '<?php echo single_cat_title(); ?>'</h2>

                        <?php /* If this is a daily archive */
                    } elseif (is_day()) {
                        ?>
                        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>

                        <?php /* If this is a monthly archive */
                    } elseif (is_month()) {
                        ?>
                        <h2>Archive for <?php the_time('F, Y'); ?></h2>

                        <?php /* If this is a yearly archive */
                    } elseif (is_year()) {
                            ?>
                        <h2>Archive for <?php the_time('Y'); ?></h2>

                        <?php /* If this is a search */
                    } elseif (is_search()) {
                        ?>
                        <h2>Search Results</h2>

                        <?php /* If this is an author archive */
                    } elseif (is_author()) {
                        ?>
                        <h2>Author Archive</h2>

                        <?php /* If this is a paged archive */
                    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
                        ?>
                        <h2>Blog Archives</h2>

              <?php } ?>

              <?php while (have_posts()) : the_post(); ?>

                        <div class="post-meta" id="post-<?php the_ID(); ?>">

                            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                            <div class="posted-aut-cat">
                                Posted in <strong><?php the_time('F jS, Y') ?></strong> <?php edit_post_link('Edit', '&#124; ', ''); ?>
                            </div>

                            <div class="posted-aut-cat">by <?php the_author_posts_link(); ?> in <?php the_category(', ') ?></div>

                            <div class="post-content">
                                <?php the_excerpt(','); ?>
                                <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                                        continue reading.....</a></p>
                            </div>

                            <div class="post-commented">

                                <div class="post-box"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>

                            </div>

                        </div>

                        <div class="post-fixed"></div>

              <?php endwhile; ?>


                    <div class="post-fixed"></div>

                    <div class="post-navs">
                    <?php if (function_exists('wp_pagenavi')): ?> <?php wp_pagenavi(); ?><?php else : ?><?php posts_nav_link(); ?><?php endif; ?>
                    </div>

                    <div class="post-fixed"></div>

    <?php else: ?>

                    <h3>Sorry The Archives Have Been Removed</h3>

    <?php endif; ?>

            </div>

        </div>

<?php get_sidebar(); ?>

<?php get_leftbar(); ?>

<?php get_footer(); ?>