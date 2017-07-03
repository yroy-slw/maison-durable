<?php
/*
Template Name: Maison durable
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
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-interne.png" alt=""></a>
		<nav class="page-interne">
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
	</div>
</div>

<div class="page">
	<div class="full-title">
		<img id="logo-page" src="<?php the_field('logo'); ?>">
	</div>
	<div class="entete pageh">
		<h2><?php the_field("titre"); ?></h2>
	</div>


	<section class="page-optimisation">

		<div id="optimisation" class="bandeau normal light margin-bas">
			<div class="inner-bandeau">
				<?php the_field("bandeau_1"); ?>
			</div>
		</div>

		<div class="two-cols">
			<article class="reduce fonce">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-light.png">-->
					<h1><a href="http://maisondurable.ch/renovation/"><?php the_field("titre_1"); ?></a></h1>
				</div>
				<p class="optimisation"><?php the_field("text_1"); ?></p>
			</article>
			<article class="reduce fonce">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">-->
					<h1><a href="http://maisondurable.ch/renovation/"><?php the_field("titre_2"); ?></a></h1>
				</div>
				<p class="expertise"><?php the_field("text_2"); ?></p>
			</article>
			<article class="reduce topp">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-light.png">-->
					<h1><a href="http://maisondurable.ch/optimisation/"><?php the_field("titre_3"); ?></a></h1>
				</div>
				<p class="optimisation"><?php the_field("texte_3"); ?></p>
			</article>
			<article class="reduce topp">
				<div class="title-img">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">-->
					<h1><a href="http://maisondurable.ch/optimisation/"><?php the_field("titre_4"); ?></a></h1>
				</div>
				<p class="expertise"><?php the_field("texte_4"); ?></p>
			</article>
		</div>

		<div class="encart-simple">
			<img src="<?php the_field('encart_image'); ?>">
		</div>

		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
					MD
					c’est qui ? 
				</div>

				<div class="box-border">
					<div class="box nope">
						<?php the_field("analyse"); ?>
					</div>
					<div class="box nope">
						<?php the_field("planification"); ?>
					</div>
					<div class="box nope">
						<?php the_field("execution"); ?>
					</div>

				</div>
			</div>
		</div>

		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
					&nbsp;
				</div>

				<div class="box-border nobord stop-bord">
					<h2><?php the_field("encart_texte"); ?></h2>
				</div>
			</div>
		</div>

	</section>
</div>			
<?php get_footer(); ?>        