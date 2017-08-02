<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>
      	<div id="primary" class="content-area">
      		<main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-md-12">
                            <?php get_template_part( 'case-parts' ); ?>
                        </div><!--col-md-8 col-md-push-2-->
                    </div> <!--row-->
      		</main><!-- #main -->
      	</div><!-- #primary -->
<?php get_footer(); ?>