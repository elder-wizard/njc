<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package njc
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="img-container">
        <div class="bg-img"
            style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
        </div>
    </div>    

    <article class="post-content col-8">
        <h2 class="entry-title post-title"><?php the_title(); ?></h2>


        <?php the_content(); ?>
    </article>

    <section class="blog-posts">
        <div class="container">

            <p class="page-caption"><?php the_field('blog'); ?></p>

            <div class="caption-center">
                <h3 class="h-caption"><?php the_field('blog_header'); ?></h3>
            </div>

            <ul class="list-blog row">
                <?php 
        
        // параметры по умолчанию
        $posts = get_posts( array(
            'numberposts' => 3,
            'category_name'    => 'blog_posts',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, 
        ) );

        foreach( $posts as $post ){
            setup_postdata($post);
            ?>

                <li class="col-xs-12 col-lg-4">
                    <div class="blog-foto">
                        <img src="<?php 
                    if (has_post_thumbnail()) {

                        the_post_thumbnail_url(); 

                    } else {
                        echo get_site_url() . '/wp-content/uploads/2020/08/no-image.png';
                    }

                    ?>" alt="">
                    </div>

                    <div class="blog-info">
                        <h3 class="captions-style-brand">
                            <a class="link-style-brand"
                                href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <p><?php the_field('post_description'); ?>
                        </p>
                    </div>

                    <div class="blog-link">
                        <a class="link-style-brand" href="<?php echo get_post_permalink(); ?>">Více</a>
                    </div>
                </li>

                <?php

            }
                wp_reset_postdata(); // сброс

            ?>
            </ul>
        </div>
    </section>

    <?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation(
		// 		array(
		// 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'njc' ) . '</span> <span class="nav-title">%title</span>',
		// 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'njc' ) . '</span> <span class="nav-title">%title</span>',
		// 		)
		// 	);

		// endwhile; // End of the loop.
		// ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();