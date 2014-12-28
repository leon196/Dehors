<?php include("header.php"); ?>
	<style type="text/css">
/* Header Title */
#header-title {
    background-color: #da2128;
        color: #f1f2f2;
}

#header-title-container-left {
	background-color: #da2128;

}

#header-title-container-middle {
    background-color: #f1f2f2;
}

#header-title-container-right {
	background-color: #da2128;
}

/* Header cat */
#header-cat {
    background-color: #dcddde;
    color: #f1f2f2;
}
#header-cat a { color:#f1f2f2;}
	</style>

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
	<div id="content">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
									<div class="content-text category-text"><?php the_content(); ?></div>	
<?php $pages = get_pages( array( 'child_of' => 151, 'excule_tree' => 151) ); ?> 
<ul>
	<?php foreach ( $pages as $page ) : ?>
	<li>
		<?php
			$imgID = get_post_thumbnail_id($page->ID); //get the id of the featured image
			$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
			$imgURL = $featuredImage[0]; //get the url of the image out of the array ?>
		<style type="text/css">
		    #thumbnail-<?php echo $imgID ?> {
			background-image: url(<?php echo $imgURL ?>);
			background-repeat: no-repeat ;
			background-position: center;   
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			width:100vw;
			height:79vw;
			max-height:995px;
			max-width: 1260px;
			background-color:black;
		}
		</style>
		<div class="content-image">
			<a href="<?php echo get_permalink( $page->ID ); ?>">
				<div class="image-button" id="thumbnail-<?php echo $imgID ?>">
					<div class="content-title centered"><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?>
					</div>
					<div class="image-button-overlay"></div>
				</div>
			</a>
		</div>	
	</li>
	<?php endforeach; ?>
</ul>
						
<?php endwhile; ?>
<?php else : ?>		
<p>Désolé, aucun article ne correspond à vos critères.</p>
<?php endif; ?>
	
</div>		

</body>
</html>
</body>
</html>