<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="content-post">

		<div class="full-title">
			<h1><strong>Réalisations</strong><br/>Portfolio > <?php $category = get_the_category();
echo $firstCategory = $category[0]->cat_name;
?></h1>
		</div>

		
		
		

		<section class="content-cols center-test <?php if( get_field('type_de_realisation') == 'construction' ): ?>reverse<?php endif; ?>">
			<div class="content-single">
				<h2 class="back">< Retour aux réalisations</h2>
				<img src="<?php the_field('vignettes'); ?>">
			</div>
			<!--<div class="post-card">
				<h1><?php the_field("titre_complet"); ?></h1>
				<h2><?php the_field("sous_titre"); ?></h2>
				<div class="cont-texte">
					<?php the_field("texte_complet"); ?>
				</div>
			</div>-->
			<div class="post-desc">
				<h3><?php the_field("type"); ?></h3>
				<h1><?php the_title(); ?></h1>
				<!--<h4><?php the_field("indice"); ?></h4>-->
				<div class="cont-text">
					<?php the_field("texte_indice"); ?>
					<!--<a class="pdf" href="<?php the_field("pdf"); ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/img/pdf-icon.jpg">
					</a>-->
				</div>
			</div>
		</section>

	</div>		
					
<?php endwhile; endif; ?>