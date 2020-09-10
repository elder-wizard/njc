<?php
    get_header();
?>

<section class="sluzby-info sluzby-bg-yellow" id="start-page">
    <div class="container">
        <div class="caption-center">
            <h3 class="h-caption-other"><?php the_field('tlumoceni_header_1'); ?>
            </h3>
        </div>

        <ul class="tlumaceni-list row">
            <li class="col-sm-4 col-lg-4"><?php the_field('tlumoceni_paragraph_1'); ?>
            </li>

            <li class="col-sm-4 col-lg-4"><?php the_field('tlumoceni_paragraph_2'); ?>
            </li>
        </ul>

        <div class="chuv-style">
            <img src="<?php the_field('tlumoceni_background_image'); ?>">
        </div>
    </div>
</section>

<section class="points-section">
    <div class="container">

        <div class="points-tlumaceni">
            <div class="caption-center">
                <p class="h-caption-other txt-blue">
                <?php the_field('tlumoceni_header_2'); ?>
                </p>
            </div>
            

            <img src="<?php the_field('tlumoceni_image_1'); ?>"/>

            <p class="sm-txt-tlumaceni"><?php the_field('tlumoceni_paragraph_3'); ?>
            </p>
        </div>
    </div>
</section>

<section class="cenik-section">
    <div class="container">
        <h3 class="txt-blue">
            <?php the_field('tlumoceni_header_3'); ?>
        </h3>

        <p class="col-lg-7 h-p-text"><?php the_field('tlumoceni_paragraph_4'); ?>
        </p>

        <ul class="ceny-list row">
            <li class="col-md-12 col-lg-6">
                <p class="text-border text-plus-border"><?php the_field('tlumoceni_cena_1'); ?></p>

                <p class="text-border"><?php the_field('tlumoceni_cena_1_info'); ?></p>
            </li>

            <li class="col-md-12 col-lg-6">
                <p class="text-border text-plus-border"><?php the_field('tlumoceni_cena_2'); ?></p>

                <p class="text-border"><?php the_field('tlumoceni_cena_2_info'); ?></p>
            </li>
        </ul>

        <a class="chci-btn new-btn" href="<?php the_field('chci_nabidku_link'); ?>"><?php the_field('big_button_text'); ?></a>

        <p class="col-lg-9 mx-auto"><?php the_field('tlumoceni_paragraph_5'); ?>
        </p>
    </div>
</section>

<section>
    <div class="container-fluid">

            <div class="flexslider">
                <ul class="slides ">
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => 6,
                            'category_name'    => 'slider_tlumoceni',
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
                    <li class="row">

                        <div class="slide-photo col-md-12 col-lg-6">
                            <img src="<?php the_post_thumbnail_url(); ?> ">
                        </div>

                        <blockquote class="quote  col-md-12 col-lg-6">
                            <p class="italic-style"><?php the_content(); ?>
                            </p>

                            <p class="sm-bold"><?php the_title(); ?></p>
                        </blockquote>
                    </li>
                    <?php

                        }
                        wp_reset_postdata(); // сброс

                    ?>
                </ul>
            </div>
        </div>
</section>

<?php
    get_footer();
?>
