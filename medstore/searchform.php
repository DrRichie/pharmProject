<div class="animate__animated animate__lightSpeedInRight animate__delay-2s searchformdiv">  
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input value="" name="s" id="s" type="text" placeholder="Search for product/seller/categories <?php the_search_query(); ?>" required>
        <button type="submit" class="searchButton">
        <i class="fa fa-search" style="font-size: 50px;"></i>
        </button>
    </div>
</form>
</div>