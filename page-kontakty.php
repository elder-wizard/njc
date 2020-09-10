<?php
    get_header();
?>

<section class="kontakty-section" id="start-page">
    <div class="container">
        <p class="txt-blue"><?php the_field('kontakty_header'); ?></p>

        <p class="kontakty-txt-style"><?php the_field('kontakty_header_description'); ?></p>

        <ul class="row kontakty-info">
            <li class="col-sm-12 col-lg-5">
               <i class="fa fa-mobile" aria-hidden="true"></i>
                <a href="tel:<?php the_field('telephone'); ?>"><?php the_field('telephone'); ?></a> 
            </li>

            <li class="col-sm-12 col-lg-5">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
            </li>
        </div>

        <p><?php the_field('ic'); ?></p>
        <p class="kontakty-txt-style"><?php the_field('dic'); ?></p>

        <h3 class="h-adr-style kontakty-txt-style"><?php the_field('kontakty_header2'); ?></h3>

        <ul class="adress-list">
            <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <a href="<?php the_field('kontakty_address_link_1'); ?>" target="blank"><?php the_field('kontakty_address_1'); ?></a>
            </li>

            <!-- <li> 
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <a href="<?php the_field('kontakty_address_link_2'); ?>" target="blank"><?php the_field('kontakty_address_2'); ?></a>
            </li>

            <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <a href="<?php the_field('kontakty_address_link_3'); ?>" target="blank"><?php the_field('kontakty_address_3'); ?></a>
            </li> -->
        </ul>
    </div> 

    <div class="img-muz">
        <img src="<?php the_field('kontakty_background_image'); ?>" alt=""/>
    </div>
</section>

<section class="form-section">
    <div class="container">

        <?php echo do_shortcode('[contact-form-7 id="347" title="Contact form" html_class="kontakty-form row"]');?>
        
    </div>
</section>

<?php
    get_footer();
?>

