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
        <h2>Latest Posts</h2>
        <ul>
 
 <?php 
 // Define our WP Query Parameters
 $the_query = new WP_Query( 'posts_per_page=5' ); ?>
   
  
 <?php 
 // Start our WP Query
 while ($the_query -> have_posts()) : $the_query -> the_post(); 
 // Display the Post Title with Hyperlink
 ?>
   
  
 <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
   
  
 <li><?php 
 // Display the Post Excerpt
 the_excerpt(__('(more…)')); ?></li>
   
  
 <?php 
 // Repeat the process and reset once it hits the limit
 endwhile;
 wp_reset_postdata();
 ?>
 </ul>

        </div>

        <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

        <h2 id="block-about-menu">About</h2>
<ul class="footer-link">
  <li>About Us</li>
  <li>Blog</li>
  <li>Professional Development</li>
  <li>Teach English Abroad</li>
  <li> Careers at Teach Away</li>
  <li>Privacy Policy</li>
</ul>

        </div>

        <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

        <div>
        <h2>Get in touch</h2>
<p>HQ: 343-2927 Lakeshore Blvd W.<br>Toronto, Ontario&nbsp;M8V 1J3</p>
</div>
<footer>
  <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
</footer>
<h4>
Also seen on
</h4>
<div class="partneret row col-12">
<div class="column">
<img src="https://www.teachaway.com/themes/contrib/tams/images/footer-logos/abc.webp" style="max-width: 42px;"></div>
<div class="column"><img src="https://www.teachaway.com/themes/contrib/tams/images/footer-logos/cbs.png"></div>
<div class="column"><img src="https://www.teachaway.com/themes/contrib/tams/images/footer-logos/nbc.webp"></div>
<div class="column">
<img src="https://www.teachaway.com/themes/contrib/tams/images/footer-logos/theglobeandmail.webp"></div>
<div class="column">
<img src="https://www.teachaway.com/themes/contrib/tams/images/footer-logos/chicago_tribune.webp"></div>
</div>
<div class="partneret row col-12">

</div>     
        </div>

        <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-5 pure-u-xl-1-5 col-md-3">

        <h2 id="block-about-menu">Contacts</h2>
<ul  class="footer-link">
  <li>Toronto, Canada
</li>
  <li>Vancouver, Canada
</li>
<li>Dover, USA</li>
<li>Edinburgh, UK</li>
 
</ul>

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
