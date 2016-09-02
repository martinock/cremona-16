<?php
/* 
Template Name: page-with-sidebar
*/ 
?>
<?php get_header(); ?>
<div class="row" style="margin:2.5%">
	<h1><?php the_title(); ?></h1>
	<hr>
	<?php get_sidebar(); ?>
	<div class="col-md-8">
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<h1><?php the_title(); ?></h1>
			<p>Belum ada post terbaru. Nantikan kelanjutannya!</p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
		
	</body>

</html>