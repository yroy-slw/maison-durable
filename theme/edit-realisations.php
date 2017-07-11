<?php
/*
Template Name: Edition réalisations
*/
?>
<?php get_header(); ?>
<div class="loader">
	<div class="inner-loader">
		<h2>Chargement...</h2>
	</div>
</div>


<div class="page-interne-2">
	<div class="header-interne">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-interne-final.jpg" alt=""></a>
		<nav class="page-interne">
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
	</div>
</div>

<div class="page">
	<div class="full-title wow slideInUp" data-wow-duration="1s">
		<h1 class="dark-color"><?php the_title(); ?></h1>
	</div>


	<section class="page-optimisation">


		<div class="liste">
			<?php query_posts('cat=3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="liste-elem" <?php if(function_exists("live_edit")){ live_edit('post_title, vignettes, vignette_apres, type_de_realisation, type, texte_vignettes, galerie_dimages, texte_indice'); }?>>
					<div class="delete"><?php echo wp_delete_post_link(); ?></div>
					<h2><?php the_title(); ?></h2>
					<img src="<?php the_field('vignettes'); ?>">
					<h4><?php the_field("texte_vignettes"); ?></h4>
				</div>
			<?php endwhile; endif; ?>
		</div>

		




	</section>
</div>			
<?php get_footer(); ?>        