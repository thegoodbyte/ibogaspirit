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
