<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<div id="footer-bar" class="footer-bar-1" style="transform: translate(0px, 0px);">
<a href="#"><i class="fa fa-home"></i><span>Jobs</span></a>
<a href="#"><i class="fa fa-star"></i><span>Tefl</span></a>
<a href="#"><i class="fa fa-shopping-cart"></i><span>Teacher<br> Certification</span></a>
<a href="#"><i class="fa fa-user"></i><span>Hire <br>Teachers</span></a>
</div>
<footer id="site-footer" role="contentinfo" class="header-footer-group">
<div class="footer container ">

    <div class="pure-g row col-md-12">

        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

            <?php dynamic_sidebar( 'footer_area_one' ); ?>

        </div>

        <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

            <?php dynamic_sidebar( 'footer_area_two' ); ?>

        </div>

        <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

            <?php dynamic_sidebar( 'footer_area_three' ); ?>

        </div>

        <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

            <?php dynamic_sidebar( 'footer_area_four' ); ?>

        </div>

    </div>

</div></footer>
			<footer id="site-footer" role="contentinfo" class="header-footer-group col-12">



					<div class="footer-credits"><div class="partneret1 part-footer row ">
                                                <div class="column"><img src="http://localhost/teachaway/wp-content/uploads/2020/11/Screenshot_1.jpg"></div><div class="column">
                                                	<img src="https://www.teachaway.com/themes/contrib/tams/images/gptw.png"></div></div>


</div>
			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
