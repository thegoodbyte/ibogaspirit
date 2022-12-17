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

}



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
    console.log('.menu-toggle clixked')
    this.classList.toggle('open');
    menuToggle.classList.toggle('active');
    e.stopPropagation();
});



// Dropdown toogle on mobile
const dropdown = document.querySelector('.dropdown a');
const dropdown2 = document.querySelector('.dropdown2 a');
const dropdown3 = document.querySelector('.dropdown3 a');

console.log(dropdown);

dropdown.addEventListener('click', function(e) {
    console.log('.dropdown a clicked')
    this.nextElementSibling.classList.toggle('show');
    this.parentNode.classList.toggle('active');
    e.stopPropagation();
});


dropdown2.addEventListener('click', function(e) {
    console.log('.dropdown2 a clicked')
    this.nextElementSibling.classList.toggle('show');
    this.parentNode.classList.toggle('active');
    e.stopPropagation();
});

dropdown3.addEventListener('click', function(e) {
    console.log('.dropdown3 a clicked')
    this.nextElementSibling.classList.toggle('show');
    this.parentNode.classList.toggle('active');
    e.stopPropagation();
});



// // Second level dropdown toggle on mobile
// const deepDropdown = document.querySelector('.second-level a');
//
// deepDropdown.addEventListener('click', function(e) {
//     console.log('.second-level a clicked');
//     this.nextElementSibling.classList.toggle('show');
//     this.parentNode.classList.toggle('active');
//     e.stopPropagation();
// });
//elementor-widget-container

// Create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// Read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Set cookie consent
function acceptCookieConsent(){
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 30);
    document.getElementById("cookieNotice").style.display = "none";
}

let cookie_consent = getCookie("user_cookie_consent");
if(cookie_consent != ""){
    document.getElementById("cookieNotice").style.display = "none";
}else{
    document.getElementById("cookieNotice").style.display = "block";
}
