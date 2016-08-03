<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mishinegor_private_site
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="md-modal md-effect-1" id="modal-1">
	    <div class="md-content">
            <h2>Оставить информацию о Вашем проекте можно здесь:</h2>
             <div class="formConteiner">
                  <?php query_posts('p=28'); ?>

                             <?php if ( have_posts() ) : ?>

                                			<?php while ( have_posts() ) : the_post(); ?>



                                				 <?php the_content();?>

                                			 <?php endwhile;


                                		 endif; ?>
              </div> <!-- End formConteiner -->

		      <button class="md-close">Close me!</button>

		</div> <!-- End md-content -->
	</div> <!--End modal-1 -->

   <div id="bottomToolsConteiner">
           <div class="centerConteiner">
               <div id="toolTip">
                   <div id="social">
                       <ul>
                           <li><a href="https://www.facebook.com/mishin.egor"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="https://vk.com/mishin.egor"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                           <li><a href="https://www.linkedin.com/in/mishin-egor"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="skype:siteslab.biz?add"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                       </ul>
                   </div><!--End Social -->

                    <nav class="siteNav">
                       <a href="" class="prev"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Вниз</a>
                       <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                       <a href="" class="next"><i class="fa fa-angle-double-up" aria-hidden="true"></i>Вверх</a>
                   </nav>

               <div id="LangConsole">
                   <ul>
                       <li><a href="">ru</a></li>
                       <li><a href="">pl</a></li>
                       <li><a href="">en</a></li>
                   </ul>
               </div>  <!--End  LangConsole-->

            </div> <!--End toolTip -->

           </div> <!-- End centerConteiner -->

           <div id="logo">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
           </div>

           <header>
               <div id="menuConteiner">
                  <div class="centerConteiner">
                           <nav class="mainMenu">
                               <?php wp_nav_menu( array( 'theme_location' => 'left', 'menu_id' => 'menu_left' ) ); ?>

                           <?php wp_nav_menu( array( 'theme_location' => 'right', 'menu_id' => 'menu_right' ) ); ?>
                            </nav>
               </div> <!--End centerConteiner -->
            </div> <!--End  menuConteiner-->

        </div> <!--End bottomToolsConteiner -->
    </header>

	<div id="content" class="site-content">
