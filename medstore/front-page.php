<?php get_header(); ?>

<div id="hero" style="padding-top:50px;">


<div class="container-fluid" id="heroabout">

          <div class="container">
        

            <h1 class="animate__animated animate__fadeIn animate__delay-1s">Find The Perfect Pharmacy To Purchase Your Drugs and Medical Equipments</h1>


          </div>

          

                 <?php get_search_form(); ?>


        </div>

</div>


<?php get_template_part('includes/style','search'); ?>

<?php get_template_part('includes/section','navv'); ?>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<article class="animate__animated animate__zoomIn animate__delay-3s" id="serviceSlide">

          <h6>Our Services</h6>
  
<div class="horizontal_slider">
   
    <div class="slider_container">

          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/signin.png" class="img-fluid">

          </div> 

          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/Login.png" class="img-fluid">

          </div> 

          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/onlinechat.png" class="img-fluid">

          </div> 


          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" class="img-fluid">

          </div> 


     </div>

  </div>

</article>



<br/>

<hr/>

  

<div class="content">

   <div class="container">
   <?php if(have_posts()) : while(have_posts()) : the_post();?>
   
   <?php the_content();?>
   
   <?php endwhile; else: endif;?>


  </div>
</div>


<article class="container-fluid" id="ViewCat">
     <button class="btn btn-success ViewCatButton" id="vcble" style="width: 100%;">
      View All Products Category 
      <i class="fa fa-angle-down"></i>
    </button>
</article>


<div class="contentP animate__animated animate__fadeIn animate__delay-30s" id="data">

      <h2> PRODUCT CATEGORY</h2>

      <h3 >What Type Of Product Are You Looking At Buying</h3>

     <div class="container">
       
    <div class="row">
    
       <div class="col-lg-4 one">
                    
          
          <ul id="lis">
               
              <li>
                         <a href="http://woosite.test/retailers/">
                            Pain reliever
                         </a>
                    </li>
        
                    <li>
                          <a href="http://woosite.test/retailers/">
                             Heart conditions
                          </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/retailers/">
                              Antibiotics
                           </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/retailers/">
                             4. Drugs affecting the brain function
                           </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/product-category/energy-booster-and-pain-relief/">
                              5.  Drugs affecting blood and nutrition
                           </a>
                     </li>
              
               <li>
                           <a href="http://woosite.test/retailers/">
                              Oral and Dental Care
                           </a>
                     </li>
         
               <li>
                            <a href="http://woosite.test/retailers/">
                               Anti-Malaria
                            </a>
                     </li>
        
                     <li>
                            <a href="http://woosite.test/retailers/">
                               Medical &amp; Hospital Equipment
                            </a>
                     </li>
              
           <li>
                         <a href="http://woosite.test/retailers/">
                            Anti-Malaria
                         </a>
                     </li>
        
                     <li>
                          <a href="http://woosite.test/retailers/">
                             Medical &amp; Hospital Equipment
                          </a>
                     </li>
         
             </ul>

     
           </div>
       
       <div class="col-lg-4 two">
                    
          
        <ul>
               
              <li>
                         <a href="http://woosite.test/product-category/cold/">
                            Cold
                         </a>
                    </li>
        
                    <li>
                          <a href="http://woosite.test/retailers/">
                             Medical &amp; Hospital Equipment
                          </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/retailers/">
                              Multivitamins | Dietary Supplements
                           </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/retailers/">
                             Sexual Wellness | Fertility Drugs
                           </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/product-category/multi-action/">
                              Multi-Action
                           </a>
                     </li>
              
               <li>
                           <a href="http://woosite.test/retailers/">
                              Oral and Dental Care
                           </a>
                     </li>
         
               <li>
                            <a href="http://woosite.test/retailers/">
                               Anti-Malaria
                            </a>
                     </li>
        
                     <li>
                            <a href="http://woosite.test/retailers/">
                               Medical &amp; Hospital Equipment
                            </a>
                     </li>
              
           <li>
                         <a href="http://woosite.test/retailers/">
                            Anti-Malaria
                         </a>
                     </li>
        
                     <li>
                          <a href="http://woosite.test/retailers/">
                             Medical &amp; Hospital Equipment
                          </a>
                     </li>
         
             </ul>

     
           </div>

       <div class="col-lg-4 three">
                    
          
        <ul>
               
              <li>
                         <a href="http://woosite.test/retailers/">
                            Anti-Malaria
                         </a>
                    </li>
        
                    <li>
                          <a href="http://woosite.test/retailers/">
                             Medical &amp; Hospital Equipment
                          </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/retailers/">
                              Multivitamins | Dietary Supplements
                           </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/retailers/">
                             Sexual Wellness | Fertility Drugs
                           </a>
                     </li>
        
                     <li>
                           <a href="http://woosite.test/product-category/fever/">
                              Fever
                           </a>
                     </li>
              
               <li>
                           <a href="http://woosite.test/retailers/">
                              Oral and Dental Care
                           </a>
                     </li>
         
               <li>
                            <a href="http://woosite.test/retailers/">
                               Anti-Malaria
                            </a>
                     </li>
        
                     <li>
                            <a href="http://woosite.test/retailers/">
                               Medical &amp; Hospital Equipment
                            </a>
                     </li>
              
           <li>
                         <a href="http://woosite.test/retailers/">
                            Anti-Malaria
                         </a>
                     </li>
        
                     <li>
                          <a href="http://woosite.test/retailers/">
                             Medical &amp; Hospital Equipment
                          </a>
                     </li>
         
             </ul>

     
           </div>

     
           </div>

      </div>
     
    </div>



<article class="container-fluid" id="BuyandSell">

    <div class="row">
      
      <div class="col-lg-6">
    
          <div class="split">
            
            <h2>Buy or Sell faster, with confidence</h2>

            <ul>
              
              <li>
              
                <h6>Payment protection, guaranteed</h6>

                  <p>Payment is released to the seller once items are delivered to your location.</p>
              
              </li>

              <li>

                <h6>Know the price up front</h6>

                  <p>Find any of our services within minutes and know exactly what you’ll pay. No hourly rates, just a fixed price.</p>

              </li>

              <li>
                
                <h6>We’re here for you 24/7</h6>
                  
                  <p>Reach out to us at any time! We have your back, from answering your questions to resolving issues.</p>
              
              </li>
              
            </ul>
            
          </div>

    </div>    


    <div class="col-lg-6" >

        <div class="video-modal">
              
          <div class="picture-wrapper">

            <picture>
              
              <img alt="video's image" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" class="img-fluid" width="376" height="290">
            
            </picture>
          
          </div>

        </div>

      </div>

  </div>


</article> 


<article class="animate__animated animate__zoomIn animate__delay-3s" id="mobileserviceSlide">

          <h6>Our Services</h6>
  
<div class="horizontal_slider">
   
    <div class="slider_container">

          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" class="img-fluid">

          </div> 

          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" class="img-fluid">

          </div> 

          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" class="img-fluid">

          </div> 


          <div class="item">

            <img alt="service 1" src="<?php bloginfo('template_directory');?>/images/Undraw/profile.png" class="img-fluid">

          </div> 


     </div>

  </div>

</article>


<article class="container-fluid" id="LearnMoreLink">
  <h2>Start selling  your products on Our store <a href="http://kumomida.com/become-a-vendor/"><button class=" animate__animated animate__flash animate__repeat-3 3 LearnMore">Learn More...</button></a></h2>
    
</article>












           
<?php get_footer(); ?>