const navSlide = () => {

	const burger = document.querySelector('.burger i');

	const nav = document.querySelector('.top-bar');
 

	const navlinks = document.querySelectorAll('.top-bar li');


//Toggle Nav
	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');


//Activate Nav Links
	navlinks.forEach((link, index)=> {
		if(link.style.animation){
			link.style.animation = '';
		}else{

			link.style.animation = `navLinkfade 0.5s ease forwards ${index / 7 + 1}s`;

		}
		



});


});


}

navSlide();


