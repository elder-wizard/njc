<?php get_header();

?>

<section class="sluzby-info sluzby-bg-blue" id="start-page">
    <div class="container">
        <div>
            <div class="caption-center">
            <h3 class="h-caption-other"><?php the_field('preklady_header_1'); ?>
            </h3>
        </div>

        <ul class="preklady-list row">
            <li class="col-sm-4 col-lg-2"><?php the_field('preklady_list_1');?></li>
            <li class="col-sm-4 col-lg-2"><?php the_field('preklady_list_2');?></li>
            <li class="col-sm-4 col-lg-2"><?php the_field('preklady_list_3');?></li>
            <li class="col-sm-4 col-lg-2"><?php the_field('preklady_list_4');?></li>
            <li class="col-sm-4 col-lg-2"><?php the_field('preklady_list_5');?></li>
        </ul>
    </div>
        

        <div class="chuv-style">
            <img src="<?php the_field('preklady_background_image');?>">
        </div>
    </div>

</section>

<section class="points-section">
    <div class="container">

        <div class="row mx-auto">
            <div class="points-info col-md-12 col-lg-8">
                <img src="<?php the_field('section_2_image_1'); ?>"/>

            
                <div>
                    <p class="txt-red"><?php the_field('preklady_header_2'); ?>
                     </p>
                     <p><?php the_field('section_2_paragraph'); ?></p>
                </div>
            </div>

            <div class="points-info col-md-12 col-lg-8 offset-lg-4 offset-md-0">
                <img src="<?php the_field('section_2_image_2'); ?>"/>

            
                    <p class="txt-blue"><?php the_field('preklady_header_3'); ?></p>
               
            </div>
        </div>
    </div>
</section>

<section class="cenik-section">
    <div class="container">
        <h3 class="txt-blue">
        <?php the_field('preklady_header_4'); ?>
        </h3>

        <p class="col-lg-7 h-p-text"><?php the_field('cenik_caption'); ?>
        </p>

        <ul class="ceny-list row">
            <li class="col-md-12 col-lg-5">
                <p class="text-border text-plus-border"><?php the_field('cena_1'); ?></p>
                <p><?php the_field('cena_caption_1'); ?>
                </p>
                <p class="text-border text-plus-border"><?php the_field('cena_3'); ?></p>
                <p><?php the_field('cena_caption_3'); ?>
                </p>
            </li>

            <li class="col-md-12 col-lg-5">
                <p class="text-border text-plus-border"><?php the_field('cena_2'); ?></p>
                <p><?php the_field('cena_caption_2'); ?>
                <p class="text-border text-plus-border"><?php the_field('cena_4'); ?></p>
                <p><?php the_field('cena_caption_4'); ?>
                </p>
            </li>
        </ul>

        <a class="chci-btn new-btn" href="<?php the_field('chci_nabidku_link'); ?>"><?php the_field('big_button_text'); ?></a>

        <p class="col-lg-9 mx-auto"><?php the_field('cenik_paragraph'); ?>
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
                            'category_name'    => 'slider_preklady',
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

<?php get_footer();

?>