 <?php 
  /*
 
 Template Name: VendorRegistation Page
 
 */

 ?>

  <div id="vRpage" >

 <?php get_header(); ?>

<br><br><br>
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
