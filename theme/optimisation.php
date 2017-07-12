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
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-interne-final.jpg" alt=""></a>
		<nav class="page-interne">
			<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
		</nav>
	</div>
</div>

<div class="page" <?php if(function_exists("live_edit")){ live_edit('titre_page, titre, titre_1, text_1, titre_2, text_2'); }?>>
	<div class="full-title wow slideInUp" data-wow-duration="1s">
		<h1><?php the_field("titre_page", false, false); ?></h1>
	</div>
	<div class="entete wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
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
			<article>
				<div class="title-img">
					<img src="<?php bloginfo('template_url'); ?>/img/arrow-light.png">
					<h1 id="ex"><?php the_field("titre_2"); ?></h1>
				</div>
				<p class="expertise"><?php the_field("text_2"); ?></p>
			</article>
		</div>

		<div id="optimisation" class="bandeau light" <?php if(function_exists("live_edit")){ live_edit('bandeau_1'); }?>>
			<div class="inner-bandeau">
				<?php the_field("bandeau_1"); ?>
			</div>
		</div>


		<div class="three-cols" <?php if(function_exists("live_edit")){ live_edit('analyse, planification, execution'); }?>>
			<div class="inner">
				<div class="accroche">
					Notre expertise<br/>
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

		<div class="three-cols" <?php if(function_exists("live_edit")){ live_edit('outils'); }?>>
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
		<!---->
		<div class="two-cols">
			<article class="same" <?php if(function_exists("live_edit")){ live_edit('image_avant, image_apres'); }?>>
				<div class="text-split">
					Avant/<br/>Après
					<span>rénovation</span>
				</div>
				<div class="image-split">
					<!--<img src="<?php the_field('image_avant'); ?>" alt="avant">-->
					<div class="twentytwenty-container">
          				<img src="<?php the_field('image_avant'); ?>" alt="avant">
          				<img src="<?php the_field('image_apres'); ?>" alt="après">
        			</div>
				</div>
			</article>
			<article class="same" <?php if(function_exists("live_edit")){ live_edit('image_avant_2, image_apres_2'); }?>>
				<div class="text-split">
					Avant/<br/>Après
					<span>optimisation</span>
				</div>
				<div class="image-split">
					<!--<img src="<?php the_field('image_apres'); ?>" alt="après">-->
					<div class="twentytwenty-container">
          				<img src="<?php the_field('image_avant_2'); ?>" alt="avant">
          				<img src="<?php the_field('image_apres_2'); ?>" alt="après">
        			</div>
				</div>
			</article>

		</div>

		<div id="expertise" class="bandeau light" <?php if(function_exists("live_edit")){ live_edit('bandeau_2'); }?>>
			<div class="inner-bandeau">
				<?php the_field("bandeau_2"); ?>
			</div>
		</div>

		<div class="three-cols" <?php if(function_exists("live_edit")){ live_edit('cecb'); }?>>
			<div class="inner">
				<div class="accroche">
					C’est quoi
					le CECB ? 
					<a target="_blank" href="http://www.cecb.ch/StartPage.aspx">
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

		<div class="three-cols big-margin lighter" <?php if(function_exists("live_edit")){ live_edit('inspection, bilan_energetique, mesures, resultats'); }?>>
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