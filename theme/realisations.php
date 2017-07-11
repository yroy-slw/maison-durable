<?php
/*
Template Name: Realisations
*/
?>
<?php get_header(); ?>
<div class="loader">
	<div class="inner-loader">
		<h2>Chargement...</h2>
	</div>
</div>

<div class="main-new-interne">
	<div class="ajax-content-post"></div>
	<div class="header-interne">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-interne-final.jpg" alt=""></a>
		<nav class="page-interne">
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
	</div>

	<!--<div class="entete">
		<h2>Réalisations<br/>Portfolio</h2>
	</div>-->

	<div class="full-title wow slideInUp" data-wow-duration="1s">
		<h1><strong>Réalisations</strong><br/>Portfolio</h1>
	</div>

	<section class="content-realisations">
		<article class="row-top-rea">

			<div class="ajax-content-cat"></div>

			<div class="swiper-container2">
			    <div class="swiper-wrapper">

					<?php query_posts('cat=4'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="swiper-slide">
							<div class="content-single">
								<div class="box">
									<a class="post-ajax" href="<?php the_permalink(); ?>">
										<img src="<?php the_field('vignettes'); ?>">
										<div class="overlay-vignette <?php if( get_field('type_de_realisation') == 'construction' ): ?>overlay-construction<?php endif; ?>">
											<h4><?php the_field("texte_vignettes"); ?></h4>
										</div>
									</a>
								</div>
								<div class="box">
									<img src="<?php the_field('vignette_apres'); ?>">
								</div>
							</div>
						</div>


					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>

				</div>
				<div class="swiper-pagination"></div>
			</div>

		</article>

		<article class="row-bottom-rea">

			<div class="left-rea">
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="right-rea ajax-cats">
				<ul>
				<?php

				$parent_cat_arg = array(
					'hide_empty' => false, 
					'parent' => 3,
					'orderby'  => 'id',
          			'order'    => 'DESC'
					);
				$parent_cat = get_terms('category',$parent_cat_arg);
				$i = 0;

				foreach ($parent_cat as $catVal) { 
					$i ++;
					$term_link = get_term_link( $catVal );?>

				    <li><a href="<?php echo $term_link; ?>">0<?php echo $i; ?> - <?php echo $catVal->name; ?></a></li>

				<?php } ?> 
				</ul>
			</div>

		</article>
	</section>
			
</div>
<?php get_footer(); ?>        