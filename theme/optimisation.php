<?php
/*
Template Name: Optimisation
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
		<h1><?php the_field("titre_page", false, false); ?></h1>
	</div>
	<div class="entete">
		<h2><?php the_field("titre"); ?></h2>
	</div>


	<section class="page-optimisation">

		<div class="two-cols">
			<article>
				<div class="title-img">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow-light.png">
					<h1 id="op"><?php the_field("titre_1"); ?></h1>
				</div>
				<p class="optimisation"><?php the_field("text_1"); ?></p>
			</article>
			<article class="fonce">
				<div class="title-img">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow-dark.png">
					<h1 id="ex"><?php the_field("titre_2"); ?></h1>
				</div>
				<p class="expertise"><?php the_field("text_2"); ?></p>
			</article>
		</div>

		<div id="optimisation" class="bandeau light">
			<div class="inner-bandeau">
				<?php the_field("bandeau_1"); ?>
			</div>
		</div>


		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
					Notre expertise
					en 3 étapes 
				</div>

				<div class="box-border">
					<div class="box">
						<?php the_field("analyse"); ?>
					</div>
					<div class="box">
						<?php the_field("planification"); ?>
					</div>
					<div class="box">
						<?php the_field("execution"); ?>
					</div>

				</div>
			</div>
		</div>

		<div class="button">
			<div class="left-button">&nbsp;</div>
			<div class="right-button">
				<a href="http://maisondurable.ch/realisations/">voir les réalisations</a>
			</div>
		</div>

		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
					Nos outils
				</div>

				<div class="box-border">
					<div class="remove">
						<?php the_field("outils"); ?>
					</div>
				</div>
			</div>
		</div>

		<div id="expertise" class="bandeau">
			<div class="inner-bandeau">
				<?php the_field("bandeau_2"); ?>
			</div>
		</div>

		<div class="three-cols">
			<div class="inner">
				<div class="accroche">
					C’est quoi
					le CECB ? 
					<a href="">
						<img class="pos" src="<?php bloginfo('template_url'); ?>/img/plus.png">
					</a>
				</div>

				<div class="box-border nobord">
					<div class="remove">
						<?php the_field("cecb"); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="three-cols big-margin lighter">
			<div class="inner">
				<div class="accroche">
					Notre analyse
					par étapes 
				</div>
				<div class="box-border">
					<div class="box">
						<?php the_field("inspection"); ?>
					</div>
					<div class="box">
						<?php the_field("bilan_energetique"); ?>
					</div>
					<div class="box">
						<?php the_field("mesures"); ?>
					</div>
					<div class="box">
						<?php the_field("resultats"); ?>
					</div>
				</div>
			</div>
		</div>




	</section>
</div>			
<?php get_footer(); ?>        