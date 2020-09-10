<?php
/**
 * The template for displaying privacy policy
 *
 * @package njc
 */

get_header();
?>

<main id="primary" class="site-main">

    <article class="post-content col-8">
        <h2 class="entry-title post-title"><?php the_title(); ?></h2>


        <?php the_content(); ?>
    </article>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();