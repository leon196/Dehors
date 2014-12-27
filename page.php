<?php include("header.php"); ?>

<div id="page">
	<a href="<?php echo get_permalink(138); ?>">
		<div id="header-title">
			<div id="header-title-container-left">DE</div>
			<div id="header-title-container-middle"></div>
			<div id="header-title-container-right">HORS</div>
		</div>
	</a>
	<div id="header-cat">
		<div id="header-cat-button-left"><a href="<?php echo get_permalink(147); ?>">RECHERCHES</a></div>
		<div id="header-cat-button-middle"><a href="<?php echo get_permalink(149); ?>">CHANTIERS</a></div>
		<div id="header-cat-button-right"><a href="<?php echo get_permalink(151); ?>">COLLECTIONS</a></div>
	</div>


	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

	<?php if (has_post_thumbnail()) { //if a thumbnail has been set
	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array ?>
	<style type="text/css">
		.content-cover {
			background-image: url(<?php echo $imgURL ?>);
			background-repeat: no-repeat ;
			background-position: center;   
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			width:100vw;
			height:79vw;
			max-height:1019px;
			max-width: 1290px;
			background-color:black;
		}
	</style>

	<?php } ?>
</style>
<div class="content-cover">
	<div class="content-title centered"><?php the_title(); ?></div>
</div>
<div id="content">

	<div class="content-page">
		<?php the_content(); ?>
	</div>

	<div class="content-thumbnails">
		<div class="thumbnail">
			<img src="<?php echo $imgURL ?>"/>
		</div>
	</div>

<<<<<<< HEAD
						<div class="post_content">
					
							<?php the_content(); ?>
							<?php 
							$categorySlug = get_the_slug();
							$idObj = get_category_by_slug('$categorySlug'); 
							$id = $idObj->term_id;
							echo $categorySlug
							?>


						</div>
						
					<?php endwhile; ?>
					<?php else : ?>		
					<p>Désolé, aucun article ne correspond à vos critères.</p>
					<?php endif; ?>
				</div>
=======
<?php endwhile; ?>
<?php else : ?>		
	<p>Désolé, aucun article ne correspond à vos critères.</p>
<?php endif; ?>
</div>
>>>>>>> d212de51eed3e8594f64915d08b663bb4d7ffdb1


</body>
</html>
