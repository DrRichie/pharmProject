<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<style type="text/css">
.mainmainbody {
  margin:10px auto;
  width: 80%;
  height: auto;
  display: flex;
  align-items: center;
  justify-content: center; 
  background:url("background.jpg");
  overflow: hidden;
}
.mainmainbody .card {
  display: grid;
  grid-template-columns: 300px;
  grid-template-rows: 210px 210px 80px;
  grid-template-areas: "image" "text" "stats";

  border-radius: 18px;
  background: white;
  box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
  font-family: 'Poppins', sans-serif;
  text-align: center;
  

  transition: 0.5s ease;
  cursor: pointer;
  margin:30px;
}
.mainmainbody .card-image {
  grid-area: image;
  background: url("img1.jpg");
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  background-size: cover;
}

.mainmainbody .card-text {
  grid-area: text;
  margin: 25px;
}
.mainmainbody .card-text .date {
  color: rgb(255, 7, 110);
  font-size:13px;
}
.mainmainbody .card-text p {
  color: grey;
  font-size:15px;
  font-weight: 300;
}
.mainmainbody .card-text h2 {
  margin-top:0px;
  font-size:28px;
}
.mainmainbody .card-stats {
  grid-area: stats; 
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  background: orange;
}
.mainmainbody .card-stats .stat {
  padding:10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: white;
}
.mainmainbody .card-stats .border {
  border-left: 1px solid rgb(172, 26, 87);
  border-right: 1px solid rgb(172, 26, 87);
}
.mainmainbody .card-stats .value{
  font-size:22px;
  font-weight: 500;
}
.mainmainbody .card-stats .value sup{
  font-size:12px;
}
.mainmainbody .card-stats .type{
  font-size:11px;
  font-weight: 300;
  text-transform: uppercase;
}
.mainmainbody .card:hover {
  transform: scale(1.15);
  box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
}

/*card2*/
.mainmainbody .card-image.card2 {
  background: url("img2.jpg");
  background-size: cover;
}
.mainmainbody .card-text.card2 .date {
  color: rgb(255, 77, 7);
}
.card-stats.card2 .border {
  border-left: 1px solid rgb(185, 67, 20);
  border-right: 1px solid rgb(185, 67, 20);
}
.mainmainbody .card-stats.card2 {
  background: rgb(255, 77, 7);
}





/*card3*/
.mainmainbody .card-image.card3 {
  background: url("img3.jpg");
  background-size: cover;
}
.mainmainbody .card-text.card3 .date {
  color: rgb(0, 189, 63);
}
.mainmainbody .card-stats.card3 .border {
  border-left: 1px solid rgb(14, 122, 50);
  border-right: 1px solid rgb(14, 122, 50);
}
.mainmainbody .card-stats.card3 {
  background: gold;
}


/*MEDIA QUERIES*/


@media only screen and (max-width: 900px) {
  .mainmainbody {
    flex-direction: column;
  }

  .mainmainbody .card {
  grid-template-columns: 300px;
  grid-template-rows: 150px 180px 80px;
}


}
	</style>

</head>
<body <?php body_class('test'); ?>>

	<!--<div class="dowmloadapp"><a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>Download Our Mobile Application</div> -->
  
<nav class="d-flex align-items-center justify-content-around">


			<div class="burger">
				<i class="fa fa-bars" ></i>
			</div>

	        

	        <div class="Logo">

			   <h3><a href="<?php bloginfo('url');?>">
			   	Our Logo
			   </a></h3>

			</div>

   
		    <?php 

		wp_nav_menu(

			array(
				'theme_location' => 'top-menu',
				'menu_class' => 'top-bar'

			)

		);?>


			


			<a href="http://kumomida.com/join/"><button class="join">
			Join
			</button></a>



</nav>


<?php get_template_part('includes/section','navv'); ?>