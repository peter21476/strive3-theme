document.addEventListener( 'DOMContentLoaded', function() {


  const blockElement = document.querySelectorAll('.wp-block-create-block-s3-slider');
    
  blockElement.forEach(function(item) {

    if (item) {
      // Detach the children
      while (item.firstChild) {
        item.parentNode.insertBefore(item.firstChild, item);
      }

      // Remove the empty parent element
      item.parentNode.removeChild(item);
  }

  });

const checkTestinonials = document.querySelectorAll('.testimonials-type');
const checkClients = document.querySelectorAll('.clients-type');
const generic01 = document.querySelectorAll('.generic01-type');

if (generic01.length > 0) {
  const splide = new Splide( '.generic01-type', {
      type    : 'loop',
      autoplay: 'play',
      perPage : 1,
  } );
  splide.mount();
}

if (checkTestinonials.length > 0) {
  const splide = new Splide( '.testimonials-type', {
      type    : 'loop',
      autoplay: 'play',
      perPage : 1,
  } );
  splide.mount();
}

if (checkClients.length > 0) {
  const clientsSlider = new Splide( '.clients-type', {
    type    : 'loop',
    autoplay: 'play',
    perPage : 3,
    breakpoints: {
      850: {
        perPage: 2,
      },
      640: {
        perPage: 1,
      },
    }
  } );
  clientsSlider.mount();
}


AOS.init();


    // Show submenu on click
    const menuItems = document.querySelectorAll('.menu-item-has-children');
    menuItems.forEach(function(item) {
      item.addEventListener('click', function(e) {
        this.classList.toggle('submenu-active');
      });
    });

    //Show menu when click on mobile-trigger
    const mobileTrigger = document.querySelector('.s3-mobile-trigger');
    const mobileMenu = document.querySelector('.menu-main-menu-container');
    mobileTrigger.addEventListener('click', function(e) {
      e.preventDefault();
      mobileMenu.classList.toggle('menu-active');
    });

  } );


  