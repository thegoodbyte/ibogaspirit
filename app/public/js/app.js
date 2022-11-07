// const square = document.querySelector('.square');
// square.classList.remove('square-transition');
//
// // Create the observer, same as before:
// const observer = new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             square.classList.add('square-transition');
//             return;
//         }
//
//         square.classList.remove('square-transition');
//     });
// });
//
// observer.observe(document.querySelector('.square-wrapper'));



/*Interactivity to determine when an animated element in in view. In view elements trigger our animation*/
$(document).ready(function() {

    //window and animation items
    var animation_elements = $.find('.animation-element');
    var web_window = $(window);

    //check to see if any animation containers are currently in view
    function check_if_in_view() {
        //get current window information
        var window_height = web_window.height();
        var window_top_position = web_window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        //iterate through elements to see if its in view
        $.each(animation_elements, function() {

            //get the element sinformation
            var element = $(this);
            var element_height = $(element).outerHeight();
            var element_top_position = $(element).offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                element.addClass('in-view');
            } else {
                element.removeClass('in-view');
            }
        });

    }

    //on or scroll, detect elements in view
    $(window).on('scroll resize', function() {
        check_if_in_view()
    })
    //trigger our scroll event on initial load
    $(window).trigger('scroll');

});



function testFunction() {
    window.alert('This is test function');
   //alert( $('.menu-main-menu-container'));


   // menu-main-menu-container
}

// $( document ).ready(function() {
//     // Handler for .ready() called.
//     var x = document.getElementsByClassName("");
//     if (x.style.display === "block") {
//         x.style.display = "none";
//     } else {
//         x.style.display = "block";
//     }
// });


console.log('READY 2');

//import './menu2.css';

// Prevent showing animation on window resize
let resizeTimer;
window.addEventListener("resize", () => {
    document.body.classList.add("resize-animation-stopper");
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        document.body.classList.remove("resize-animation-stopper");
    }, 400);
});


// Menu toogle on mobile
const navToggle = document.querySelector('.nav-toggle');
const menuToggle = document.querySelector('.menu-toggle');

navToggle.addEventListener('click', function(e) {
    this.classList.toggle('open');
    menuToggle.classList.toggle('active');
    e.stopPropagation();
});



// Dropdown toogle on mobile
const dropdown = document.querySelector('.dropdown a');

dropdown.addEventListener('click', function(e) {
    this.nextElementSibling.classList.toggle('show');
    this.parentNode.classList.toggle('active');
    e.stopPropagation();
});


// Second level dropdown toggle on mobile
const deepDropdown = document.querySelector('.second-level a');

deepDropdown.addEventListener('click', function(e) {
    this.nextElementSibling.classList.toggle('show');
    this.parentNode.classList.toggle('active');
    e.stopPropagation();
});
//elementor-widget-container


