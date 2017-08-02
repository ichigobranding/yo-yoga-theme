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
                        <div class="col-md-8 col-md-push-2">
                          <div class="kiji-page">
                               <!--記事全体-->
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                        <div class="ibskinArticleBody2">
                                                                <!--記事　中身-->
                                                            <?php while ( have_posts() ) : the_post(); ?>
                                                                    <div class="titleichiran3">
                                                                      <h2 class="fontW6">
                                                                        <?php the_title(); ?>
                                                                      </h2>
                                                                    </div>
                                                                    <?php the_field('consulnakami'); ?><br><br>
                                                            <?php endwhile; // end of the loop. ?>
                                                                          <!-- 募集終了 -->
                                                                              <?php
                                                                              if( get_field('cunsul-unyo') )
                                                                              {
                                                                                  echo '<div class="manseki"> 【募集終了】</div>
                                                  <br>
                                                  募集を終了いたしました。<br><br>
                                                  募集は、メルマガにて優先的にご案内しております。<br><br>
                                                  <b><a href="get_stylesheet_directory_uri()/mailmag">メルマガのご登録はこちらです。</a></b><br><br><br>';
                                                                              }

                                                                              else
                                                                              {
                                                                                  the_field('cunsulform'); 
                                                                              }
                                                                              ?>
                                                                           <!-- 募集終了 -->
                                                            
                                                                <!--記事　中身-->
                                                            <div class="hensyuu">
                                                            <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                            </div>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                               <!--記事全体-->
                        </div><!--kiji page-->
                   </div><!--col-md-8 col-md-push-2-->
                </div> <!--row-->
            </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>