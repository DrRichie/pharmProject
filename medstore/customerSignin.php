 <?php 
  /*
 
 Template Name: CustomerSignin Page
 
 */

 ?>


 <?php get_header(); ?>


  <div id="cSpage" style="height: 1000px;">


<div class="container both_logs">

  <div class="container logger">
	   		
	<div class="row">
		
		<div class="col-lg-12">
		
		       <h1><?php the_title(); ?></h1>
		
               <?php if(have_posts()) : while(have_posts()) : the_post();?>
   
               <?php the_content();?>
   
               <?php endwhile; else: endif;?>

               <p class="message">Not Registered? <a href="http://kumomida.com/my-account/" class="Register">Register</a></p>

          </div>

        </div>
	
	</div>

</div>

 
 </div>

