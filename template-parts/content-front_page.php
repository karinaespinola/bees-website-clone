<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bees
 */

?>

<section class="bg-primary">
	<div class="relative h-screen container md:mx-auto">
		<div class="clouds">
			<img src="<?php echo get_template_directory_uri() . '/img/cloud.svg' ?>"  alt="">
			<img src="<?php echo get_template_directory_uri() . '/img/cloud.svg' ?>"  alt="">
			<img src="<?php echo get_template_directory_uri() . '/img/cloud.svg' ?>"  alt="">
			<img src="<?php echo get_template_directory_uri() . '/img/cloud.svg' ?>"  alt="">
		</div>
		<div class="absolute bottom-2/4 z-10">
			<h1 class="text-4xl font-bold uppercase border-b-8 border-black">We are listening...</h1>
			<h2 class="mt-3">Don't hold back we are ready to turn your ideas into goals</h2>	
		</div>
	</div>
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
