 <?php 
  /*
 
 Template Name: ex Page
 
 */

 ?>

  <div id="expage" >

 <?php get_header(); ?>


<div class="container both_logs">

  <div class="container logger">
	   		
	<div class="row">
		
		<div class="col-lg-12">
		
		       <h1><?php the_title(); ?></h1>
		
               <?php if(have_posts()) : while(have_posts()) : the_post();?>
   
               <?php the_content();?>
   
               <?php endwhile; else: endif;?>

          </div>

        </div>
	
	</div>

</div>

 
 </div>

