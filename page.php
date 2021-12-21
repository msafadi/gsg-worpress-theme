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
            <h2 class="blog-post-title"><?php the_title() ?></h2>
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