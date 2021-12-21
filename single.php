<?php
get_header();
?>

    <main class="container">
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
            
            <p><?php the_content() ?></p>

        </article>

        <?php
            endwhile;
        endif;
        ?>
    </main>

<?php
get_footer();
?>