
 <?php 
  /*
 
 Template Name: Vendors Page
 
 */
 
 
 get_header('secondary'); ?>
<br><br>

<?php get_template_part('includes/section','navv'); ?>


<div class="container both_logs">

  <div class="container logger">
	   		
	  <div class="row">
		
		<div class="col-lg-9">

			<br>
			<br>
			<br>
		
		       <h1><?php the_title(); ?></h1>




<article class="container-fluid" id="ViewvendorSearchBy_article">
     <button class="btn btn-success ViewvendorSearchBy" id="vcbvsearch">Search for sellers by:</button>
</article>




<div class="card" id="vendorSearchBy">


<div class="card-body animate__animated animate__slideInLeft animate__delay-3s " >
    
   
 <form action="<?php echo home_url('/');?>" >


 <div class="form-group" >
  
     <label><strong>Search a Retailer or Price Of Drugs Within your Desired Range</strong></label>
         <input type="text" name="keyword"placeholder="Search a Retailer" class="form-control">

  </div>

  <div class="form-group">
        
         <select name="retailer" class="form-control">

          <option value="">Choose A Retailer 
          <option value="Retailer 1">Retailer 1</option>
          <option value="Retailer 2">Retailer 2</option>
          <option value="Retailer 3">Retailer 3</option>
          <option value="Retailer 4">Retailer 4</option>


         </select>

 </div>


  <div class="form-group row">

                                <div class="col-lg-6">

                                       <label>From price</label>

                                        <select name="price_above" class="form-control">

                                          <?php for($i=0; $i < 210000; $i+=10000):?>    

                                                <option 
                                                
                                                <?php if(  isset($_GET['price_above']) && ( $_GET['price_above'] == $i)  ):?>
                                                    selected
                                                <?php endif;?>
                                                
                                                
                                                value="<?php echo $i;?>">
                                                    <?php echo '$' . number_format($i) ;?>
                                                </option>

                                            <?php endfor;?>

                                        </select>

                                </div>

                                <div class="col-lg-6">

                                        <label>To Price</label>

                                        <select name="price_below" class="form-control">

                                            <?php for($i=0; $i < 210000; $i+=10000):?>    

                                                <option 
                                                
                                                <?php if(  isset($_GET['price_below']) && ( $_GET['price_below'] == $i)  ):?>
                                                    
                                                    selected

                                                <?php elseif( $i == 200000):?>

                                                    selected

                                                <?php endif;?>
                                                
                                                
                                                value="<?php echo $i;?>">
                                                    <?php echo '$' . number_format($i) ;?>
                                                </option>

                                            <?php endfor;?>

                                        </select>

                                </div>

            </div>


            <button type="submit" class="btn btn-success btn-lg btn-block">Search</button>

        
            <a href="<?php echo home_url('/car-search');?>">Reset search</a>

</form>

</div>

</div>




               <?php if(have_posts()) : while(have_posts()) : the_post();?>
   
               <?php the_content();?>
   
               <?php endwhile; else: endif;?>

</div>


<div class="col-lg-3">
             
      <div class="sticky-top" style="top:50px">
            
           <?php dynamic_sidebar('shop-sidebar');?>
          
     </div>
         
</div>
        


    </div>

</div>

</div>
