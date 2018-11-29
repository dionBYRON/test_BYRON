$(document).ready(function() {    
      $("#smooth").on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                 scrollTop: $(".nature-text").offset().top
              }, 1000);
         });
            
});

//  Animatie functie navbar
let toggleNavStatus = false;

let toggleNav = function() {
      let getSidebar = document.querySelector(".nav-sidebar");
      let getSidebarUL= document.querySelector(".nav-sidebar ul");
      let getSidebarLinks= document.querySelectorAll(".nav-sidebar a");
      let getSidebarIcon = document.querySelector(".btn-toggle-nav");
      let getSidebarMenu = document.querySelector(".btn-icon");
      let getSidebarLI = document.querySelector(".nav-sidebar ul li a");
      
      

      if(toggleNavStatus === false){
            getSidebarUL.style.visibility = "visible";
            getSidebar.style.width = "20%";
            
            getSidebarMenu.style.marginLeft = "140px";
            getSidebarIcon.style.width = "200px";
            
            
            let arrayLength = getSidebarLinks.length;
            for(let i = 0; i < arrayLength; i++){
                  getSidebarLinks[i].style.opacity = "1";
                  getSidebarLinks[i].style.marginLeft = "0";

            }

            toggleNavStatus = true;
      }

      else if(toggleNavStatus === true){

            getSidebar.style.width = "20%";
            
            let arrayLength = getSidebarLinks.length;
            for(let i = 0; i < arrayLength; i++){
                  getSidebarLinks[i].style.opacity = "0";
                  getSidebarLinks[i].style.marginLeft = "-150px";
            }

            getSidebarUL.style.visibility = "hidden";
            getSidebarIcon.style.width = "60px";
            getSidebarMenu.style.marginLeft = "0px";

            toggleNavStatus = false;
      }

}

//  Smooth mouse scroll function
$(function(){
	
	var $window = $(window);		//Window object
	
	var scrollTime = 1.2;			//Scroll time
	var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
		
	$window.on("mousewheel DOMMouseScroll", function(event){
		
		event.preventDefault();	
										
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,	//For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
				autoKill: true,
				overwrite: 5							
			});
					
	});
	
});



// function initialize() {
// var fenway = {lat: <?php echo get_field('eerste_coordinaten') ; ?>, lng: <?php echo get_field('tweede_coordinaten') ; ?>};
// var panorama = new google.maps.StreetViewPanorama(
//       document.getElementById('pano'), {
//       position: fenway,
//       pov: {
//       heading: 34,
//       pitch: 10
//       },
//       disableDefaultUI: true,
//       clickToGo: false,
//       scrollwheel: false,
//       });
// map.setStreetView(panorama);
// }

// <script async defer
//       src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB7oV4Z-5MJqg0ezZ8Uammb-v2EQ1p2Ak&callback=initialize">
// </script>