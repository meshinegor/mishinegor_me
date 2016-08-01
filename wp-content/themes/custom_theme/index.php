<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mishinegor_private_site
 */

get_header(); ?>

		<main id="main" class="site-main" role="main">

       <!--Section main -->

    <section id="main">

             <div class="centerConteiner">

                <div id="leftBlock">
                    <article>
                          <?php query_posts('p=6'); ?>

                                         <?php if ( have_posts() ) : ?>

                                            			<?php while ( have_posts() ) : the_post(); ?>


                                                        <h1><?php the_field('h1'); ?></h1>
                                                        <p><?php the_content();?></p>

                                            			 <?php endwhile;


                                            		 endif; ?>

                    </article>

                </div> <!-- End LeftBlock -->

                 <div id="centerBlock">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/character_main.png" alt="<?php bloginfo( 'name' ); ?>" class="mainPerson">
                </div> <!-- End centerBlock -->

                <div id="rightBlock">
                    <ul>
                        <li><a href="/files/me_brief.pdf"><i class="fa fa-upload" aria-hidden="true"></i> Скачать бриф</a></li>
                        <li><a href="/files/me_portfolio.pdf"><i class="fa fa-th-large" aria-hidden="true"></i>Скачать портфолио</a></li>
                    </ul>
                    <a href="#" data-modal="modal-1" class="buttons md-trigger">Начать сотрудничать</a>
                </div> <!-- End rightBlock -->
            </div><!-- End centerConteiner -->

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hand.png" alt="<?php bloginfo( 'name' ); ?>" id="hand">

        </section>

    <!--Section About -->

     <section id="about">
         <div class="centerConteiner">
             <div id="topPart">
                 <article>
                       <?php query_posts('p=19'); ?>

                                      <?php if ( have_posts() ) : ?>

                                         			<?php while ( have_posts() ) : the_post(); ?>

                                         			<h2><?php the_title(); ?></h2>

                                                     <p><?php the_content();?></p>
                                         			 <?php endwhile;


                                         		 endif; ?>

                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow_about.png" alt="Мой профессиональный путь" id="arrow_about">

                 </article>

                 <a href="#topPart" class="buttons md-trigger" data-modal="modal-1">Начать сотрудничать</a>

             </div> <!-- End topPart -->

             <div id="bottomPart">
                 <ul class="topList">
                     <li id="one">
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/web-design.png" alt="Веб-дизайнер">
                         <div class="rightCol">
                             <h3>Фриланс</h3>
                             <p class="sk">Веб-дизайнер</p>
                             <p class="year">2008</p>
                         </div>
                     </li>

                    <li id="two">

                         <p>Через два года я основал агентство интернет-маркетинга «SitesLab», агентство успешно работает на территории двух стран: Казахстан (SitesLab.kz) и Беларуси (SitesLab.by).</p>

                    </li>
                     <li id="three">
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/logoBY.png" alt="Агентство интернет-маркетинга «SitesLab»,  Беларуь">
                         <div class="rightCol">
                             <h3>Агентство<br>интернет-маркетинга<br>«SitesLab»,  Беларуь</h3>
                             <p class="sk">Основатель агентства<br>интернет маркетинга “SitesLab”</p>
                             <p class="year">2011</p>
                         </div>
                     </li>
                     <li id="four">
                         <p>Сегодня SitesLab – это команда профессионалов, объединённых желанием работать для достижения желаемого результата.</p>
                     </li>
                 </ul> <!--End topList -->

                  <ul class="bottomList">
                     <li id="five">
                        <p> Семь лет назад я встал на этот тернистый путь IT-шника. И начал реализовывать первые проекты, совершать первые ошибки и приобретать первый опыт. </p>
                     </li>

                    <li id="six">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/web-programmer.png" alt="Веб-дизайнер Веб-программист">
                         <div class="rightCol">
                             <h3>Фриланс</h3>
                             <p class="sk">Веб-дизайнер,<br>Веб-программист</p>
                             <p class="year">2009</p>
                         </div>
                    </li>

                     <li id="seven">
                        <p>За годы существования агентства было реализовано множество проектов различной степени сложности: от посадочных станиц и интернет магазинов для малого и среднего бизнеса (управление продажами через интернет) до корпоративных сайтов и порталов для государственного сектора. </p>
                     </li>

                    <li id="eight">
                         <div class="leftCol">
                             <h3>Агентство<br>интернет-маркетинга <br> «SitesLab»,  Казахстан</h3>
                             <p class="sk">Управляющий партнёр<br>интернет-маркетолог</p>
                             <p class="year">2013</p>
                         </div>
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/logoKZ.png" alt="Управляющий партнёр, интернет-маркетолог">
                     </li>
                 </ul> <!--End bottomList -->

             </div> <!-- End bottomPart -->

         </div><!-- End centerConteiner -->
     </section>

         <!--Section Skills -->

     <section id="skills">
         <div class="centerConteiner">

            <div id="leftConteiner">
                <div id="trigger">
                <article>
                    <p>
                      <?php query_posts('p=21'); ?>

                                     <?php if ( have_posts() ) : ?>

                                        			<?php while ( have_posts() ) : the_post(); ?>



                                        				 <?php the_content();?>

                                        			 <?php endwhile;


                                        		 endif; ?>

                    </p>

                </article>
                <a href="#skills" data-modal="modal-1" class="buttons md-trigger">расказать о проекте</a>
                </div> <!--End trigger -->


             </div><!--End leftConteiner -->



            <div id="topContent">
                <h4>мои навыки</h4>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow_skills.png" alt="мои навыки">
            </div>

            <div id="topConteiner_skills">
                <!-- Проценты -->
                 <div class="skillConteiner">
                <div class="chart" data-percent="73"><p class="percent"></p></div>
                    <div class="skils">
                        <h3>Менеджмент</h3>
                        <ul>
                            <li>
                                <p>Подготовка технической документации</p>
                            </li>
                            <li>
                                <p>Планирование реализации проекта</p>
                            </li>
                            <li>
                                <p>Подбор исполнителей и постановка задач</p>
                            </li>
                        </ul>
                 </div>

                        </div>

                        <div class="skillConteiner">
                <div class="chart" data-percent="75"><p class="percent"></p></div>
                    <div class="skils">
                        <h3>Интернет-маркетинг</h3>
                        <ul>
                            <li>
                                <p>Контекстная реклама</p>
                            </li>
                            <li>
                                <p>Таргетинговая реклама в соц. сетях</p>
                            </li>
                            <li>
                                <p>Веб аналитика</p>
                            </li>
                        </ul>
                 </div> <!-- End skills -->
                 </div><!-- End skillConteiner -->



                 <div class="skillConteiner">
                <div class="chart" data-percent="85"><p class="percent"></p></div>
                    <div class="skils">
                        <h3>веб-программирование</h3>
                        <ul>
                            <li>
                                <p>PHP и MySQL, AJAX, Yii Framework, Ruby</p>
                            </li>
                            <li>
                                <p>Работа с CMS:
                                    1С Битрикс, Siteedit, Wordpress, Concrete5</p>
                            </li>
                        </ul>
                 </div> <!-- End skillConteiner -->

                        </div> <!-- End skills -->

                    <div class="skillConteiner">
                <div class="chart" data-percent="88"><p class="percent"></p></div>
                    <div class="skils">
                        <h3>Веб-дизайн</h3>
                        <ul>
                            <li>
                                <p>Создание протатипов, Photoshop (UX/UI, дизайн сайтов)</p>



                            </li>
                            <li>
                                <p>HTML5, XHTML, DHTML</p>
                            </li>
                            <li>
                                <p>CSS3, SASS, Bootstrap Framework </p>
                            </li>

                            <li>
                                <p>JS, JQuery</p>
                            </li>

                        </ul>
                 </div> <!-- End skill -->

                 </div> <!-- End skillConteiner -->

            </div><!-- End topConteiner -->

            <div id="imgConteiner">

                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/character_about.png" alt="Я готов сотрудничать">

            </div> <!-- End centerConteiner -->

            </div><!-- End centerConteiner -->

            <div id="bottomConteiner">
                    <div class="centerConteiner">
                        <h4>Моё <span>агентство:</span></h4>
                        <ul>
                            <li>
                                <a href="siteslab.by">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_sl_by.png" alt="Агентство интернет-маркетинга  «SitesLab»,  Беларуь">
                                    <h5>Агентство интернет-маркетинга  «SitesLab»,  Беларуь</h5>
                                </a>
                            </li>
                            <li>
                               <a href="siteslab.kz">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_sl_kz.png" alt="Агентство интернет-маркетинга  «SitesLab»,  Казахстан">
                                    <h5>Агентство интернет-маркетинга  «SitesLab»,  Казахстан</h5>
                                </a>
                            </li>
                        </ul>
                </div>  <!--End centerConteiner -->

                </div> <!--End bottomConteiner -->
     </section>

    <!-- Section Portfolio -->

     <section id="portfolio">
         <div id="grid-gallery" class="grid-gallery">
	<section class="grid-wrap">
		<ul class="grid">

           <?php query_posts('category_name=portfolio'); ?>

                  <?php if ( have_posts() ) : ?>

                     			<?php while ( have_posts() ) : the_post(); ?>

                     			<li class="grid-sizer"></li><!-- for Masonry column width -->

                     			<li>
                                    <figure>
                                        <img src="<?php the_field('portfolio_img'); ?>" alt="<?php the_title(); ?>"/>
                                        <figcaption>
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                            <h3><?php the_title(); ?></h3>
                                        </figcaption>
                                    </figure>
			                    </li>

                     			 <?php endwhile;


                     		     endif; ?>
        </ul>

	</section><!-- // grid-wrap -->
	<section class="slideshow">
		<ul>

           <?php query_posts('category_name=portfolio'); ?>

                     <?php if ( have_posts() ) : ?>

                        			<?php while ( have_posts() ) : the_post(); ?>

                        			    <li>
				<figure>
					<figcaption>
                    	<img src="<?php the_field('portfolio_img_big'); ?>" alt="<?php the_title(); ?>">

                    	<article>

						<h3><?php the_title(); ?></h3>

						<p><?php the_content();?></p>

                        </article>
                        <section>
                        	<p class="siteLink">Сайт:<a href="http://<?php the_field('site_link'); ?>"><?php the_field('site_link'); ?></a></p>
                            <div class="list">
                                    <h4>Что было сделано:</h4>
                                            <p><?php the_field('wedo'); ?></p>
                                            <p><?php the_field('wedo1'); ?></p>
                                            <p><?php the_field('wedo2'); ?></p>

							</div>
                        </section>
					</figcaption>
				</figure>
			</li>
                        			 <?php endwhile;


                        		 endif; ?>
		</ul>

		<nav>
			<span class="icon nav-prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
			<span class="icon nav-next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
			<span class="icon nav-close"><i class="fa fa-times" aria-hidden="true"></i></span>
		</nav>

	</section><!-- // slideshow -->
</div><!-- // grid-gallery -->

    <div id="bottomCaption">
        <h4>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio_arrow.png" alt="Портфолио здесь">
        Портфолио здесь
        </h4>
    </div>

     </section>

		</main><!-- #main -->


<?php

get_footer(); ?>
