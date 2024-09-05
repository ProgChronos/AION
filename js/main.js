/* ===================================================================
 * Monica 1.0.0 - Main JS
 *
 * ------------------------------------------------------------------- */


let nav_toggle = document.querySelector('.nav_toggle');
let nav_toggle_icon = document.querySelector('.nav_toggle bi-list');
let nav_menu = document.querySelector('.nav_menu');

nav_toggle.addEventListener('click', () => {
  nav_menu.classList.toggle('active');
  nav_toggle_icon.setAttribute('name',
    nav_menu.classList.contains('active') ? 'bi-x-lg' : 'bi-list'
  );
});

(function(html) {

    'use strict';

    const cfg = {

        // MailChimp URL
        mailChimpURL : 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6' 

    };


   /* preloader
    * -------------------------------------------------- */
    const ssPreloader = function() {

        const siteBody = document.querySelector('body');
        const preloader = document.querySelector('#preloader');
        if (!preloader) return;

        html.classList.add('ss-preload');
        
        window.addEventListener('load', function() {
            html.classList.remove('ss-preload');
            html.classList.add('ss-loaded');
            
            preloader.addEventListener('transitionend', function afterTransition(e) {
                if (e.target.matches('#preloader'))  {
                    siteBody.classList.add('ss-show');
                    e.target.style.display = 'none';
                    preloader.removeEventListener(e.type, afterTransition);
                }
            });
        });

    }; // end ssPreloader

    

   /* mobile menu
    * ---------------------------------------------------- */ 
    const ssMobileMenu = function() {

        const toggleButton = document.querySelector('.s-header__menu-toggle');
        const mainNavWrap = document.querySelector('.s-header__nav');
        const siteBody = document.querySelector('body');

        if (!(toggleButton && mainNavWrap)) return;

        toggleButton.addEventListener('click', function(e) {
            e.preventDefault();
            toggleButton.classList.toggle('is-clicked');
            siteBody.classList.toggle('menu-is-open');
        });

        mainNavWrap.querySelectorAll('.s-header__nav a').forEach(function(link) {

            link.addEventListener("click", function(event) {

                // at 900px and below
                if (window.matchMedia('(max-width: 900px)').matches) {
                    toggleButton.classList.toggle('is-clicked');
                    siteBody.classList.toggle('menu-is-open');
                }
            });
        });

        window.addEventListener('resize', function() {

            // above 900px
            if (window.matchMedia('(min-width: 901px)').matches) {
                if (siteBody.classList.contains('menu-is-open')) siteBody.classList.remove('menu-is-open');
                if (toggleButton.classList.contains('is-clicked')) toggleButton.classList.remove('is-clicked');
            }
        });

    }; // end ssMobileMenu


   /* swiper
    * ------------------------------------------------------ */ 
    const ssSwiper = function() {

        const homeSliderSwiper = new Swiper('.home-slider', {

            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is > 400px
                401: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is > 800px
                801: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                // when window width is > 1330px
                1331: {
                    slidesPerView: 3,
                    spaceBetween: 48
                },
                // when window width is > 1773px
                1774: {
                    slidesPerView: 4,
                    spaceBetween: 48
                }
            }
        });

        const pageSliderSwiper = new Swiper('.page-slider', {

            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is > 400px
                401: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is > 800px
                801: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                // when window width is > 1240px
                1241: {
                    slidesPerView: 3,
                    spaceBetween: 48
                }
            }
        });

    }; // end ssSwiper


   /* mailchimp form
    * ---------------------------------------------------- */ 
    const ssMailChimpForm = function() {

        const mcForm = document.querySelector('#mc-form');

        if (!mcForm) return;

        // Add novalidate attribute
        mcForm.setAttribute('novalidate', true);

        // Field validation
        function hasError(field) {

            // Don't validate submits, buttons, file and reset inputs, and disabled fields
            if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

            // Get validity
            let validity = field.validity;

            // If valid, return null
            if (validity.valid) return;

            // If field is required and empty
            if (validity.valueMissing) return 'Please enter an email address.';

            // If not the right type
            if (validity.typeMismatch) {
                if (field.type === 'email') return 'Please enter a valid email address.';
            }

            // If pattern doesn't match
            if (validity.patternMismatch) {

                // If pattern info is included, return custom error
                if (field.hasAttribute('title')) return field.getAttribute('title');

                // Otherwise, generic error
                return 'Please match the requested format.';
            }

            // If all else fails, return a generic catchall error
            return 'The value you entered for this field is invalid.';

        };

        // Show error message
        function showError(field, error) {

            // Get field id or name
            let id = field.id || field.name;
            if (!id) return;

            let errorMessage = field.form.querySelector('.mc-status');

            // Update error message
            errorMessage.classList.remove('success-message');
            errorMessage.classList.add('error-message');
            errorMessage.innerHTML = error;

        };

        // Display form status (callback function for JSONP)
        window.displayMailChimpStatus = function (data) {

            // Make sure the data is in the right format and that there's a status container
            if (!data.result || !data.msg || !mcStatus ) return;

            // Update our status message
            mcStatus.innerHTML = data.msg;

            // If error, add error class
            if (data.result === 'error') {
                mcStatus.classList.remove('success-message');
                mcStatus.classList.add('error-message');
                return;
            }

            // Otherwise, add success class
            mcStatus.classList.remove('error-message');
            mcStatus.classList.add('success-message');
        };

        // Submit the form 
        function submitMailChimpForm(form) {

            let url = cfg.mailChimpURL;
            let emailField = form.querySelector('#mce-EMAIL');
            let serialize = '&' + encodeURIComponent(emailField.name) + '=' + encodeURIComponent(emailField.value);

            if (url == '') return;

            url = url.replace('/post?u=', '/post-json?u=');
            url += serialize + '&c=displayMailChimpStatus';

            // Create script with url and callback (if specified)
            var ref = window.document.getElementsByTagName( 'script' )[ 0 ];
            var script = window.document.createElement( 'script' );
            script.src = url;

            // Create global variable for the status container
            window.mcStatus = form.querySelector('.mc-status');
            window.mcStatus.classList.remove('error-message', 'success-message')
            window.mcStatus.innerText = 'Submitting...';

            // Insert script tag into the DOM
            ref.parentNode.insertBefore( script, ref );

            // After the script is loaded (and executed), remove it
            script.onload = function () {
                this.remove();
            };

        };

        // Check email field on submit
        mcForm.addEventListener('submit', function (event) {

            event.preventDefault();

            let emailField = event.target.querySelector('#mce-EMAIL');
            let error = hasError(emailField);

            if (error) {
                showError(emailField, error);
                emailField.focus();
                return;
            }

            submitMailChimpForm(this);

        }, false);

    }; // end ssMailChimpForm


   /* alert boxes
    * ------------------------------------------------------ */
    const ssAlertBoxes = function() {

        const boxes = document.querySelectorAll('.alert-box');
  
        boxes.forEach(function(box){

            box.addEventListener('click', function(e) {
                if (e.target.matches('.alert-box__close')) {
                    e.stopPropagation();
                    e.target.parentElement.classList.add('hideit');

                    setTimeout(function() {
                        box.style.display = 'none';
                    }, 500)
                }
            });
        })

    }; // end ssAlertBoxes


    /* Back to Top
    * ------------------------------------------------------ */
    const ssBackToTop = function() {

        const pxShow = 900;
        const goTopButton = document.querySelector(".ss-go-top");

        if (!goTopButton) return;

        // Show or hide the button
        if (window.scrollY >= pxShow) goTopButton.classList.add("link-is-visible");

        window.addEventListener('scroll', function() {
            if (window.scrollY >= pxShow) {
                if(!goTopButton.classList.contains('link-is-visible')) goTopButton.classList.add("link-is-visible")
            } else {
                goTopButton.classList.remove("link-is-visible")
            }
        });

    }; // end ssBackToTop


   /* smoothscroll
    * ------------------------------------------------------ */
    const ssMoveTo = function() {

        const easeFunctions = {
            easeInQuad: function (t, b, c, d) {
                t /= d;
                return c * t * t + b;
            },
            easeOutQuad: function (t, b, c, d) {
                t /= d;
                return -c * t* (t - 2) + b;
            },
            easeInOutQuad: function (t, b, c, d) {
                t /= d/2;
                if (t < 1) return c/2*t*t + b;
                t--;
                return -c/2 * (t*(t-2) - 1) + b;
            },
            easeInOutCubic: function (t, b, c, d) {
                t /= d/2;
                if (t < 1) return c/2*t*t*t + b;
                t -= 2;
                return c/2*(t*t*t + 2) + b;
            }
        }

        const triggers = document.querySelectorAll('.smoothscroll');
        
        const moveTo = new MoveTo({
            tolerance: 0,
            duration: 1200,
            easing: 'easeInOutCubic',
            container: window
        }, easeFunctions);

        triggers.forEach(function(trigger) {
            moveTo.registerTrigger(trigger);
        });

    }; // end ssMoveTo


   /* Initialize
    * ------------------------------------------------------ */
    (function ssInit() {

        ssPreloader();
        ssMobileMenu();
        ssSwiper();
        ssMailChimpForm();
        ssAlertBoxes();
        ssMoveTo();

    })();

})(document.documentElement);



(function($) { 
    
    "use strict";
 
      document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
      t.style.left = n.clientX + "px", 
      t.style.top = n.clientY + "px", 
      e.style.left = n.clientX + "px", 
      e.style.top = n.clientY + "px", 
      i.style.left = n.clientX + "px", 
      i.style.top = n.clientY + "px"
      });
      var t = document.getElementById("cursor"),
          e = document.getElementById("cursor2"),
          i = document.getElementById("cursor3");
      function n(t) {
          e.classList.add("hover"), i.classList.add("hover")
      }
      function s(t) {
          e.classList.remove("hover"), i.classList.remove("hover")
      }
      s();
      for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
          o(r[a])
      }
      function o(t) {
          t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
      }
    
    $(document).ready(function() {
      
      /* Hero Case study images */      
      
      $('.case-study-name:nth-child(1)').on('mouseenter', function() {
        $('.case-study-name.active').removeClass('active');
        $('.case-study-images li.show').removeClass("show");
        $('.case-study-images li:nth-child(1)').addClass("show");
        $('.case-study-name:nth-child(1)').addClass('active');
      })
      $('.case-study-name:nth-child(2)').on('mouseenter', function() {
        $('.case-study-name.active').removeClass('active');
        $('.case-study-images li.show').removeClass("show");
        $('.case-study-images li:nth-child(2)').addClass("show");
        $('.case-study-name:nth-child(2)').addClass('active');
      })
      $('.case-study-name:nth-child(3)').on('mouseenter', function() {
        $('.case-study-name.active').removeClass('active');
        $('.case-study-images li.show').removeClass("show");
        $('.case-study-images li:nth-child(3)').addClass("show");
        $('.case-study-name:nth-child(3)').addClass('active');
      })
      $('.case-study-name:nth-child(4)').on('mouseenter', function() {
        $('.case-study-name.active').removeClass('active');
        $('.case-study-images li.show').removeClass("show");
        $('.case-study-images li:nth-child(4)').addClass("show");
        $('.case-study-name:nth-child(4)').addClass('active');
      })
      $('.case-study-name:nth-child(1)').trigger('mouseenter')
            
    });

    })(jQuery);






// Expand/Collapse Article
document.querySelectorAll("#infographic article").forEach((article) => {
    article.addEventListener("click", () => {
       article.classList.toggle("active");
    });
 });
 
 // Always Collapse Article on click outside
 document.addEventListener("mouseup", (e) => {
    document.querySelectorAll("article.active").forEach((article) => {
       if (article.contains(e.target)) return;
       if (article === e.target) return;
       article.classList.remove("active");
    });
 });
 
 // Activate artciles through prev/next interactions
 document.querySelectorAll("#infographic article .btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
       e.preventDefault();
       var isprev =
          e.target === e.target.parentElement.firstElementChild ? true : false;
       var article = btn.closest("article");
       var step = parseInt(article.getAttribute("data-step"));
       var next = document.querySelector(
          `[data-step="${isprev ? step - 1 : step + 1}"]`
       );
       next.classList.add("active");
       next.scrollIntoView({
          behavior: "smooth",
          block: "nearest"
       });
    });
 });






 jQuery(document).ready(function($) {
    var fullBg = '';
    $('.project').mouseenter(function()  {
      if($(this).hasClass('is-hidden')){
        $(this).removeClass('is-hidden');
      }
      // change the full-bg
      fullBg = $(this).children('.project__bg').attr('data-img');
      
      $('.project-full__bg').addClass('is-hidden');
      
      
      $("[data-index=" + fullBg + "]").removeClass('is-hidden');
  
      
      // hide other projects on hover
      $(this).siblings().addClass('is-hidden'); 
    });
    
    // show all projects on mouse leave
    $('.projects-grid').mouseleave(function(){
      $('.project').removeClass('is-hidden');
    });
    
    
  
  });

  $(document).ready(function() {
    $("#single_1").fancybox({
        helpers: {
            title : {
                type : 'float'
            }
        },
        scrolling: 'no'
    });

    $("#single_2").fancybox({
        openEffect : 'elastic',
        closeEffect : 'elastic',
        helpers : {
            title : {
                type : 'inside'
            }
        },
        scrolling: 'no'
    });

    $("#single_3").fancybox({
        openEffect : 'none',
        closeEffect : 'none',
        helpers : {
            title : {
                type : 'outside'
            }
        },
        scrolling: 'no'
    });

    $("#single_4").fancybox({
        padding: 0,
        helpers : {
            title : {
                type : 'over'
            },
            overlay: {
                locked: false
              }
        },
       
        scrolling: 'no',
        iframe: {'scrolling': 'no'}
    });
});


$(document).ready(function() {
    $("#single_1, #single_2, #single_3, #single_4").on('click', function(e) {
        e.preventDefault(); // Evita o comportamento padrão do clique

        // Em seguida, abre o Fancybox para o elemento clicado
        $.fancybox.open({
            href: $(this).attr('href'),
            type: 'image',
            helpers: {
                title : {
                    type : 'float'
                }
            },
            scrolling: 'no'
        });
    });
});
