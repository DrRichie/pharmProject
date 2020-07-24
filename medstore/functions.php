<?php  

//load css file

		function load_stylesheets(){
			
			wp_register_style('stylesheet',get_template_directory_uri() . '/style.css','',1,'all');
			wp_enqueue_style('stylesheet');

			wp_register_style('stylesheet5',get_template_directory_uri() . '/landing.css','',1,'all');
			wp_enqueue_style('stylesheet5');


			wp_register_style('stylesheetl',get_template_directory_uri() . '/mainheader.css','',1,'all');
			wp_enqueue_style('stylesheetl');

			wp_register_style('stylesheete',get_template_directory_uri() . '/mainfooter.css','',1,'all');
			wp_enqueue_style('stylesheete');


			wp_register_style('stylesheet6',get_template_directory_uri() . '/join.css','',1,'all');
			wp_enqueue_style('stylesheet6');

			wp_register_style('stylesheet999',get_template_directory_uri() . '/cssfiles/includes.css','',1,'all');
			wp_enqueue_style('stylesheet999');


			wp_register_style('stylesheet99',get_template_directory_uri() . '/font.css','',1,'all');
			wp_enqueue_style('stylesheet99');


			wp_register_style('stylesheetb',get_template_directory_uri() . '/cssfiles/woocom-styles.css','',1,'all');
			wp_enqueue_style('stylesheetb');


			wp_register_style('stylesheetd',get_template_directory_uri() . '/cssfiles/widg.css','',1,'all');
			wp_enqueue_style('stylesheetd');


			wp_register_style('stylesheeti',get_template_directory_uri() . '/cssfiles/vendorhow.css','',1,'all');
			wp_enqueue_style('stylesheeti');


			wp_register_style('stylesheety',get_template_directory_uri() . '/cssfiles/animate.min.css','',1,'all');
			wp_enqueue_style('stylesheety');




			wp_register_style('fonts',get_template_directory_uri() . '/fontawesome-free-5.13.1-web/css/all.css','',1,'all');
			wp_enqueue_style('fonts');

		
			wp_register_style('custom',get_template_directory_uri() . '/css/bootstrap.min.css','',1,'all');
			wp_enqueue_style('custom');

			
			
			}
	
add_action('wp_enqueue_scripts','load_stylesheets');


//load javascript file

		function load_javascripts(){

			wp_register_script('custom4',get_template_directory_uri() . '/js1/hidecat.js','jquery',false,true);
			wp_enqueue_script('custom4');

			
			wp_register_script('custom8',get_template_directory_uri() . '/js1/seperatereg.js','jquery',false,true);
			wp_enqueue_script('custom8');


			wp_register_script('customz',get_template_directory_uri() . '/js1/hidee.js','jquery',false,true);
			wp_enqueue_script('customz');


			
			wp_register_script('custom1',get_template_directory_uri() . 'fontawesome-free-5.13.1-web/js/all.js','jquery',false,true);
			wp_enqueue_script('custom1');

		
			wp_register_script('custom3',get_template_directory_uri() . '/js1/mobile.js','jquery',false,true);
			wp_enqueue_script('custom3');



			wp_register_script('custom',get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
			wp_enqueue_script('custom');
		

			}
			
add_action('wp_enqueue_scripts','load_javascripts');


//add support 

add_theme_support('menus');
add_theme_support('post-thumbnails');



//Register some menus

register_nav_menus(
			array(
					'top-menu' => 'Top Menu',
			
			)
		); 
		




		
// Add Image Sizes
add_image_size('post_image',1100,900,false);


//Add a Widget
register_sidebar(
			array(
					'name' => 'Page Sidebar',
					'id' => 'page-sidebar',
					'class' => '',
					'before_title'=> '<h4>',
					'after_title'=>'</h4>'			
			)
		); 
		
		
register_sidebar(
			array(
					'name' => 'Blog Sidebar',
					'id' => 'blog-sidebar',
					'class' => '',
					'before_title'=> '<h4>',
					'after_title'=>'</h4>'			
			)
		);
		
register_sidebar(
			array(
					'name' => 'Shop Sidebar',
					'id' => 'shop-sidebar',
					'class' => '',
					'before_title'=> '<h4>',
					'after_title'=>'</h4>'			
			)
		);
		

//load woocommerce file

			function mytheme_add_woocommerce_support() {
				
				add_theme_support('woocommerce');
				
			}

add_action('after_setup_theme','mytheme_add_woocommerce_support');



add_filter('widget_text', 'do_shortcode');



/**
 * @snippet       Rename "My Account" Link @ WooCommerce/WP Nav Menu
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_filter( 'wp_nav_menu_items', 'dynamic_label_change', 10, 2 ); 
 
function dynamic_label_change( $items, $args ) { 
   if ( ! is_user_logged_in() ) { 
      $items = str_replace( "Account", "Log in", $items ); 
   } elseif ( is_user_logged_in() ) { 
      $items = str_replace( "Account", "Log Out", $items ); 
   }
   return $items; 
} 



