require('./bootstrap');
require('./basic.js');
$(document).ready(function(){

    //Fade in header content
    $('#header-content-container').fadeIn(1500);


    // Add smooth scrolling to all links
    $("#header-chevron").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
      /* Check the location of each desired element */
      $('.fadeInOnScroll').each( function(i){
          
          var bottom_of_object = $(this).offset().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();
          
          /* If the object is completely visible in the window, fade it it */
          if( bottom_of_window > bottom_of_object ){
              
              $(this).animate({'opacity':'1'},1500);
                  
          }  
        }); 
      });

      /* Simple Accordion */
      $(".tab-button").click(function(){
        $(".tab-content").slideToggle(300);
      });
});