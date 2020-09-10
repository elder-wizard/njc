<?php



get_header();
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
the_content();
?>

<section class="welcome-section" id="start-page">
    <div class="container">

        <div class="welcome-slogan col-md-10 offset-md-1">

            <h1 class="slogan-big-text"><?php the_field('home_header_one'); ?></h1>

            <h2 class="slogan-big-text"><?php the_field('home_header_two'); ?></h2>

            <div class="main-btn-block">
                <a href="#servises" class="btn-main d-inline-block service-btn">
                    <?php the_field('services_link'); ?>
                </a>
                <a href="#about" class="btn-main d-inline-block">
                    <?php the_field('about_link'); ?>
                </a>
            </div>
            
        </div>

        <div class="welcome-img">
                <img src="<?php the_field('home_header_image'); ?>">
        </div>
    </div>

    
</section>

<section class="about-us" id="about">
    <div class="container">

        <p class="page-caption"><?php the_field('o_nas_caption'); ?></p>

        <div class="caption-center">
            <h3 class="h-caption col-md-12 col-lg-6"><?php the_field('o_nas_header'); ?></h3>
        </div>
        
        <div class="about-content row">

            <div class="img-about col-md-12 col-lg-5">
                <img src="<?php the_field('o_nas_image_one'); ?>" alt="2002">
            </div>
            
            <ul class="about-list col-md-12 col-lg-6">
                <li>
                    <?php the_field('o_nas_text_one'); ?>
                </li>

                <li>
                    <?php the_field('o_nas_text_two'); ?>
                </li>

                <li>
                    <?php the_field('o_nas_text_three'); ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="img-muz">
        <img src="<?php the_field('o_nas_image_two'); ?>" alt="">
    </div>

</section>

<section class="servises" id="servises">
    <div class="container">

        <p class="page-caption"><?php the_field('nase_sluzby'); ?></p>

        <div class="caption-center">
            <h3 class="h-caption"><?php the_field('nase_sluzby_header'); ?></h3>
        </div>

        <ul class="servises-list row">

        <?php 
        
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => 3,
                'category_name'    => 'nase_sluzby',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                // формат вывода the_title() ...

                ?>



            <li class="col-xs-12 col-lg-3">
                <h3 class="servise-h"><?php the_title(); ?></h3>

                <?php the_content(); ?>
            </li>



                    <?php

                }
                    wp_reset_postdata(); // сброс

        ?>
    </ul>
    </div>
</section>

<section class="features-section">
    <div class="container">

        <p class="page-caption"><?php the_field('proc_my'); ?></p>

        <div class="caption-center">
            <h3 class="h-caption"><?php the_field('proc_my_header'); ?></h3>
        </div>

        <ul class="list-features row">
            <li class="col-xs-12 col-md-6">
                <h3 class="caption-text"><?php the_field('proc_my_list_header_one'); ?></h3>

                <p><?php the_field('proc_my_text_one'); ?>
                </p>
            </li>

            <li class="col-xs-12 col-md-6">
                <h3 class="caption-text"><?php the_field('proc_my_list_header_two'); ?></h3>

                <p><?php the_field('proc_my_text_two'); ?>
                </p>
            </li>

            <li class="col-xs-12 col-md-6">
                <h3 class="caption-text"><?php the_field('proc_my_list_header_three'); ?></h3>

                <p><?php the_field('proc_my_text_three'); ?>
                </p>
            </li>

            <li class="col-xs-12 col-md-6">
                <h3 class="caption-text"><?php the_field('proc_my_list_header_four'); ?></h3>

                <p><?php the_field('proc_my_text_four'); ?>
                </p>
            </li>
        </ul>
    </div>
</section>

<section class="darkove-certifikaty">
    <div class="container">

        <div class="mx-auto row align-items-center">

            <div class="col-md-12 col-lg-6">
                <img src="<?php the_field('certyfikaty_image'); ?>"/>
            </div>

            <div class="col-md-12 col-lg-6">
                <p class="txt-blue"><?php the_field('certyfikaty_header'); ?></p>
                <p class="zdarma-txt"><?php the_field('certyfikaty_text'); ?></p>
                <a class="chci-btn" href="<?php the_field('certyfikaty_button_link'); ?>">Chci !!!</a>
            </div>

        </div>
    </div>
</section>

<section class="works-section">
    <div class="container-fluid">

        <ul class="list-project row">
            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_1'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_1'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_2'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_2'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_3'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_3'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_4'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_4'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_5'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_5'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_6'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_6'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_7'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_7'); ?>" alt="">
                    </div>

                   <div class="hover-block-works"></div>
                </a>
            </li>

            <li class="col-sm-6 col-lg-3">
                <a href="<?php the_field('gallery_image_8'); ?>" class="work-overlay">
                    <div class="photo-work">
                        <img src="<?php the_field('gallery_image_8'); ?>" alt="">
                    </div>

                    <div class="hover-block-works"></div>
                </a>
            </li>
        </ul>
    </div>
</section>

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
                        <a class="link-style-brand" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
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

<section>
    <div class="container-fluid">

            <div class="flexslider">
                <ul class="slides ">
                    <?php 
        
                        $posts = get_posts( array(
                            'numberposts' => 6,
                            'category_name'    => 'slider_home',
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

<section class="team-section">
    <div class="container-fluid">

        <p class="page-caption"><?php the_field('nas_tym_caption'); ?></p>

        <div class="caption-center">
            <h3 class="h-caption"><?php the_field('nas_tym_header'); ?></h3>
        </div>

        <ul class="list-team row">

            <li class="col-sm-6 col-lg-2">
                <div class="photo-team">
                    <img src="<?php the_field('member_photo_1'); ?>" alt=""/>
                </div>

                <div class="info-team">
                    <h4 class="secondary-font-caption"><?php the_field('member_name_1'); ?></h4>
                    <p class="accent-text">Lektor</p>
                </div>
            </li>

            <li class="col-sm-6 col-lg-2">
                <div class="photo-team">
                    <img src="<?php the_field('member_photo_2'); ?>" alt=""/>
                </div>

                <div class="info-team">
                    <h4 class="secondary-font-caption"><?php the_field('member_name_2'); ?></h4>
                    <p class="accent-text">Lektor</p>
                </div>
            </li>

            <li class="col-sm-6 col-lg-2">
                <div class="photo-team">
                    <img src="<?php the_field('member_photo_3'); ?>" alt=""/>
                </div>

                <div class="info-team">
                    <h4 class="secondary-font-caption"><?php the_field('member_name_3'); ?></h4>
                    <p class="accent-text">Lektor</p>
                </div>
            </li>

            <li class="col-sm-6 col-lg-2">
                <div class="photo-team">
                    <img src="<?php the_field('member_photo_4'); ?>" alt=""/>
                </div>

                <div class="info-team">
                    <h4 class="secondary-font-caption"><?php the_field('member_name_4'); ?></h4>
                    <p class="accent-text">Lektor</p>
                </div>
            </li>

            <li class="col-sm-6 col-lg-2">
                <div class="photo-team">
                    <img src="<?php the_field('member_photo_5'); ?>" alt=""/>
                </div>

                <div class="info-team">
                    <h4 class="secondary-font-caption"><?php the_field('member_name_5'); ?></h4>
                    <p class="accent-text">Lektor</p>
                </div>
            </li>
        </ul>
    </div>
</section>
</article>

<?php
get_sidebar();
get_footer();
