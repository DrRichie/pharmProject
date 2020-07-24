
<?php get_header(); ?>

<div class="content">

   <div class="container">

<?php 

if ( have_posts() ) {
	?>
    <h2>Search results for query: "<?php the_search_query(); ?>"</h2>
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'theposts' );
	}
} else {
	echo '<p>No search results found!</p>';
}
 ?>
 
   </div>
</div>


<?php get_footer();?>