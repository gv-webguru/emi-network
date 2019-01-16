<?php

/**
 * Default Sidebar for Blog
 * by www.eminetwork.com
 */

?>

<style>

ul.sidebar img {
	float: left;
	margin-left: 10px;
	/*max-height: auto;*/
	padding-top: 0px;
	padding-right: 15px;
	margin-top: 20px;
	-webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
}
</style>

<?php if( is_active_sidebar('blog-widget-area') ) : ?>
    
        <ul class="sidebar hide-on-mobile">
       	<img src="http://www.eminetwork.com/wp-content/themes/emi/images/vertical-rule.png">
        <li class="clearfix widget-container">
            <?php dynamic_sidebar('blog-widget-area'); ?>
            <h3 style="font-family: GothamMedium; font-size: 16px;" class="widget-title"><span>Case Studies</span></h3>
            <a href="http://www.eminetwork.com/wp-content/uploads/2015/09/Caring-Transitions-Case-Study.pdf" target="_blank"> Caring Transitions Logo and Website</a>
            <!-- <h3 style="font-family: GothamMedium; font-size: 16px;" class="widget-title"><span>Resources</span></h3>
            <a href="http://www.eminetwork.com/wp-content/uploads/2015/09/Caring-Transitions-Case-Study.pdf" target="_blank"> B2B Marketing Budget Planning Guide</a> -->
        </li>
        </ul>
    
<?php endif; ?>