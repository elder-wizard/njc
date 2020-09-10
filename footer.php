<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package njc
 */

?>

<footer class="footer">
    <div class="container">
        <div class="row footer-info">

            <ul class="kontakty-list col-xs-12 col-md-4">

                <p class="caption-style-footer">Kontakty</p>

                <li>
                     <i class="fa fa-mobile" aria-hidden="true"></i>
					<a href="tel:<?php footer_tel(); ?>"><?php footer_tel(); ?></a>
                </li>

                <li>
                     <i class="fa fa-envelope" aria-hidden="true"></i>
					<a href="mailto:<?php footer_email(); ?>"><?php footer_email(); ?></a>
                </li>
            </ul>

            <div class="share-link col-xs-12 col-md-4">
                <h3 class="caption-style-footer">Sledujte nás</h3>

                <ul class="list-share">
                    <li>
                        <a href="<?php footer_fb_link(); ?>">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
						<a href="<?php footer_insta_link(); ?>">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
						<a href="<?php footer_youtube_link(); ?>">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="adress-st col-xs-12 col-md-4">
                <p class="caption-style-footer">Adresa</p>

                <p> 
					 <i class="fa fa-map-marker" aria-hidden="true"></i>
					 <?php footer_adr_1(); ?>
                </p>

                
            </div>
        </div>

        <div class="bottom-footer">
                <a href="#start-page" class="btn-to-top">Zpět na začátek
                <i class="fa fa-angle-up"></i>
                </a>
        </div>
	</div>
	
</footer>
</div><!-- #page -->


<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/njc/bootstrap/js/bootstrap.min.js"/></script>

<script defer src="<?php echo get_site_url(); ?>/wp-content/themes/njc/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/njc/js/jquery.magnific-popup.min.js"></script>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/njc/js/main.js"></script>
</body>
</html>
