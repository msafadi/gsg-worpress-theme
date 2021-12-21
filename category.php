<?php
get_header();
?>

    <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    <?php single_cat_title() ?>
                </h3>

                <?php
                // The Loop
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); // $post
                ?>

                <article class="blog-post">
                    <div>
                        <?php the_category(', ') ?>
                    </div>
                    <h2 class="blog-post-title"><?php the_title() ?></h2>
                    <p class="blog-post-meta"><?php echo get_the_date('d F') ?> by <?php the_author_link() ?></p>
                    
                    <?php if (is_home() || is_front_page() || is_archive() || is_category()) :  ?>
                    
                        <p><?php the_excerpt() ?></p>
                        <p><a href="<?php the_permalink() ?>">Continue reading</a></p>

                    <?php else : ?>
                    
                        <p><?php the_content() ?></p>

                    <?php endif ?>
                </article>

                <?php
                    endwhile;
                endif;
                ?>

                <nav class="blog-pagination" aria-label="Pagination">
                    <?php next_posts_link('Older') ?>
                    <?php previous_posts_link('Newer') ?>
                </nav>

                <?php the_posts_pagination() ?>
                
            </div>

            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div>
        </div>

    </main>

<?php
get_footer();
?>