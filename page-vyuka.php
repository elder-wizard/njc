<!-- <?php
    /*
    Template Name: Vyuka
    */
?> -->

<?php
    get_header();
?>

<section class="sluzby-info sluzby-bg-red" id="start-page">
    <div class="container">

        <div class="caption-center">
            <h3 class="h-caption-other"><?php the_field('vyuka_header'); ?>
            </h3>
        </div>

        <ul class="vyuka-list row">
            <li class="col-sm-4 col-lg-3"><?php the_field('vyuka_list_1'); ?></li>

            <li class="col-sm-4 col-lg-3"><?php the_field('vyuka_list_2'); ?></li>

            <li class="col-sm-4 col-lg-3"><?php the_field('vyuka_list_3'); ?></li>
        </ul>

        <div class="chuv-style">
            <img src="<?php the_field('vyuka_background_image_1'); ?>">
        </div>

    </div>
</section>

<section class="points-section">
    <div class="container">

        <div class="row mx-auto">

            <div class="points-info col-md-12 col-lg-8">

                <img src="<?php the_field('section_2_img1'); ?>" />


                <div>
                    <p class="txt-blue"><?php the_field('vyuka_header_2'); ?>
                    </p>

                    <p class="sm-txt-li"><?php the_field('vyuka_text_1'); ?></p>
                </div>
            </div>

            <div class="points-info col-md-12 col-lg-8 offset-lg-4 offset-md-0">

                <img src="<?php the_field('section_2_img2'); ?>" />

                <div>
                    <p class="txt-red"><?php the_field('vyuka_header_3'); ?></p>
                    <p><?php the_field('vyuka_text_2'); ?>
                    </p>
                </div>

            </div>
            <div class="points-info col-md-12 col-lg-8">

                <a class="certificat-style" href="<?php the_field('section_2_links'); ?>" target="blank" >
                     <img src="<?php the_field('section_2_img3');?>" alt="certifikát www.Jazykovky.cz"/>
                </a>
               
                <div>
                    <p class="txt-blue"><?php the_field('vyuka_header_4_1');?>
                     </p>

                     <p class="sm-txt-li"><?php the_field('vyuka_text_3_1'); ?></p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="cenik-section">
    <div class="container">

        <h3 class="txt-blue">
            <?php the_field('vyuka_header_4'); ?>
        </h3>

        <p class="col-lg-7 h-p-text"><?php the_field('vyuka_text_3'); ?>
        </p>

        <ul class="ceny-list row">
            <li class="col-md-12 col-lg-3">
                <p class="text-border text-plus-border"> <?php the_field('vyuka_cena_1'); ?> </p>

                <p class="text-border"> <?php the_field('vyuka_service_1'); ?> </p>

                <p> <?php the_field('vyuka_cena_info_1'); ?> </p>
            </li>

            <li class="col-md-12 col-lg-3">
                <p class="text-border text-plus-border"> <?php the_field('vyuka_cena_2'); ?> </p>

                <p class="text-border"> <?php the_field('vyuka_service_2'); ?> </p>

                <p> <?php the_field('vyuka_cena_info_2'); ?> </p>
            </li>
        </ul>

        <a class="chci-btn new-btn"
            href="<?php the_field('chci_nabidku_link'); ?>"><?php the_field('big_button_text'); ?></a>

        <p class="col-lg-9 mx-auto"><?php the_field('vyuka_cena_paragraph'); ?>
        </p>
    </div>
</section>

<section class="zdarma-section">
    <div class="container">

        <div class="mx-auto row align-items-center">

            <div class="col-md-12 col-lg-6">
                <img src="<?php the_field('section_4_img'); ?>" />
            </div>

            <div class="col-md-12 col-lg-6">
                <p class="txt-blue"><?php the_field('vyuka_header_5'); ?></p>
                <p class="zdarma-txt"><?php the_field('vyuka_section_4_text'); ?></p>
                <a class="chci-btn" href="<?php the_field('chci_zdarma');?>">Chci !!!</a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-fluid">

        <div class="flexslider">
            <ul class="slides ">
                <?php 

                        $posts = get_posts( array(
                            'numberposts' => 6,
                            'category_name'    => 'slider_vyuka',
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