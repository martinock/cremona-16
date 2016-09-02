<?php
/* 
Template Name: page
*/ 
?>
<?php get_header(); ?>
<div class="row" style="margin:2.5%">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<hr>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<h1><?php the_title(); ?></h1>
		<p>Belum ada post terbaru. Nantikan kelanjutannya!</p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
		
	</body>

</html>