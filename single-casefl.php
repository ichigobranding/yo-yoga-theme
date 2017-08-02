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
<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
      	<div id="primary" class="content-area">
      		<main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                          <div class="kiji-page">
                               <!--記事全体-->
                                            <div class="ibskinArticle">
                                                      <div class="ibskinArticleBody2">

                                                      <div >
                                                          <div class="ibskinArticleTitle">
                                                                <h1 class="ibskinArticleHeader-case2">
                                                                  <b><?php the_title(); ?></b>
                                                                </h1>
                                                          </div>
                                                      </div>

                                                                <!--記事　中身-->
                                                      <?php while ( have_posts() ) : the_post(); ?>
                                         <!--記事info-->
                                                          <div class="ibarticleDetailArea">
                                                             <time datetime="2016-08-12" pubdate="pubdate"><?php echo get_the_date(); ?></time><?php get_template_part( 'new' ); ?>
                                                              <br />テーマ：<?php echo get_the_term_list( $id,tema, $before, $sep, $after ); ?>
                                                          </div>
                                                                    <!--記事info-->
                                                      <?php the_content(); ?>

                                                          <!--記事info-->
                                                      <?php endwhile; // end of the loop. ?>
                                                                <!--記事　中身-->
                                                            <div class="hensyuu">
                                                            <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                            </div>
                                                      </div>                                             
                                            </div> 
<?php get_template_part( 'case-parts' ); ?>
                               <!--記事全体-->
                        </div><!--kiji page-->

                   </div><!--col-md-8 col-md-push-2-->
                </div> <!--row-->
      		</main><!-- #main -->
      	</div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>