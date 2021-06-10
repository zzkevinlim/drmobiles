import 'alpinejs';
import Swiper from 'swiper/bundle';

let swiper_one = new Swiper('.swiper-one', {
  loop: true,
  // autoplay: {
  //   delay: 1000,
  //   disableOnInteraction: false,
  // },
  speed: 300,
  pagination: {
    el: '.swiper-custom-pagination',
    clickable: true,
  },
});
