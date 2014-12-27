<?php include("header.php"); ?>

				<div id="content">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
										
	<?php if (has_post_thumbnail()) { //if a thumbnail has been set
	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array ?>
	<style type="text/css">
    .header-image {
	background-image: url(<?php echo $imgURL ?>);
	background-repeat: no-repeat ;
	background-position: center;   
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	width:100vw;
	max-width: 1290px;
	background-color:black;
	}
	</style>

	<?php 
	}//end if ?>

	</style>
	<div class="header-image">
	</div>
					
	
						<div class="post-title"><?php the_title(); ?></div>

						<div class="post_content">
					
							<?php the_content(); ?>
							
						</div>
						
					<?php endwhile; ?>
					<?php else : ?>		
					<p>Désolé, aucun article ne correspond à vos critères.</p>
					<?php endif; ?>
				</div>


</body>
</html>
