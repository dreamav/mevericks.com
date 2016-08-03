<?php

get_header();

ishyoboy_custom_part_tagline('<h1 class="color1">Oups!</h1><h2>Seems like there\'s no such page.</h2>'); ?>

<?php
// Breadcrumbs display
ishyoboy_show_breadcrumbs();
?>

<!-- Content part section -->
<section class="<?php echo apply_filters( 'ish_part_content_classes', 'ish-part_content' ); ?>">
    <div class="wpb_row vc_row-fluid ish-row-notfull ish-row_notsection">
	    <div class="ish-vc_row_inner">
		    <p>We've searched more than <strong>404</strong> pages and none of them seems to be the one you we're looking for.</p>
		    <p>Why don't you have a look around and try to find it?</p>
	    </div>
    </div>
</section>
<!-- Content part section END -->

<!-- #content  END -->
<?php  get_footer(); ?>