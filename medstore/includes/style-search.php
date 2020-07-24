
<article class="mobile_search_article" style="margin-top:100px;">

<form  role="search" method="get" class="mobile_search_form" action="<?php echo home_url( '/' ); ?>">
  
    <input class="mobile_search_input" value="" name="s" type="text" placeholder="Search for product/seller/categories <?php the_search_query(); ?>" required>
   
    <button type="submit" class="mobile_search_button">
      <i class="fa fa-search"></i>
    </button>

</form>

</article>