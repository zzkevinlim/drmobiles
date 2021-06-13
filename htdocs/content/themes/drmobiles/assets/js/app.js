import 'alpinejs';
import Swiper from 'swiper/bundle';

let swiper_one = new Swiper('.swiper-one', {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  speed: 5000,
  pagination: {
    el: '.swiper-custom-pagination',
    clickable: true,
  },
});

/**
 * Scroll to Top
 */
const scroll_to_top_button = document.getElementById('scroll-to-top-button');

const toggleScrollToTopButton = () => {
  let y = window.scrollY;

  if (y > 0) {
    scroll_to_top_button.classList.add('opacity-100');
    scroll_to_top_button.classList.remove('opacity-0');
  } else {
    scroll_to_top_button.classList.add('opacity-0');
    scroll_to_top_button.classList.remove('opacity-100');
  }
};

window.addEventListener('scroll', toggleScrollToTopButton);

const scrollToTop = () => {
  const scrolled = document.documentElement.scrollTop || document.body.scrollTop;

  if (scrolled > 0) {
    window.scrollTo(0, 0);
  }
};

scroll_to_top_button.onclick = e => {
  e.preventDefault();
  scrollToTop();
};
