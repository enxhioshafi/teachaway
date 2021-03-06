<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<div class =" content main-header">
<div class = "container header-img"  style="
background-image: url(https://www.teachaway.com/sites/default/files/online-tefl-certification.jpg);">
<div class=" container tefl">
<h1>Online TEFL certification</h1>
<p>Teach English abroad or online with an TEFL certificate from the world’s leading universities.&nbsp;</p></div>
<div class="container">
<div class="col-12 row test">
<div class="col-6">
<div class="description">
<p ><img src="../../wp-content/uploads/2020/11/ih-berkeley-logo-text.png">Designed by the education faculty at Canada’s largest and internationally top-ranked university, this online TEFL course offers 100-, 120- and 150-hour options. The customizable curriculum from the University of Toronto OISE offers such specializations as: Teaching Business English, Teaching Young Learners and Teaching English to Mandarin Speakers.</p>
<div class="cta">
<a class="btn btn-cta-front" href="/courses/oise-tefl" title="Learn More">Learn More</a>
<a class="btn btn-cta" href="https://teflonline.teachaway.com/enroll/" title="Enroll Now">Enroll Now</a>
</div>
</div>
</div>
<div class="col-6" style="    border-top: 6px solid #ce7029;">
<div class="description">
<p ><img src="../../wp-content/uploads/2020/11/ezgif.com-gif-maker.jpg">Developed in partnership with the Robertson Center for Intercultural Leadership at I-House Berkeley, this flexible online course gives you a TEFL certificate that focuses on developing skills for living and working in a global setting.</p>
<div class="cta">
<a class="btn btn-cta-front" href="/courses/oise-tefl" title="Learn More">Learn More</a>
<a class="btn btn-cta" href="https://teflonline.teachaway.com/enroll/" title="Enroll Now">Enroll Now</a></div>
</div>
</div>
</div>
</div>
</div>

				<section class="page-content col-lg-9">
					<?php
					the_content();
					?>
				</section>


</div>
<?php
get_footer();
