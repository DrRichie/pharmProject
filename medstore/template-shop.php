  <?php
 
 /*
 
 Template Name: Shop Page
 
 */
 
 
 
 
 get_header(); ?>
 <br><br>

    <div class="content">

        <div class="container">
		
			<div class="row">

			    <div class="col-lg-12">
		
					   <?php if(has_post_thumbnail());?>
		 
		               <h1><?php the_title(); ?></h1>
		
                       <?php if(have_posts()) : while(have_posts()) : the_post();?>
   
                       <?php the_content();?>
   
                       <?php endwhile; else: endif;?>
					
				</div>


			</div>

	    </div>
	   
    </div>

<?php get_footer('secondary'); ?> 
 