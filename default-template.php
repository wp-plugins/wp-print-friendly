<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	</head>
	<body <?php body_class(); ?>>
	
	<?php
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				?>
				
				<h1><?php the_title(); ?></h1>
				<p>by <?php the_author(); ?> | <?php the_time( 'F j, Y g:i a' ); ?></p>
				
				<?php
				the_content();
				
			endwhile;
		endif;
	?>
	
	</body>
</html>