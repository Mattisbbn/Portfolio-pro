import Swiper from 'swiper';
import { Navigation, Pagination, EffectCoverflow , Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';
import 'swiper/css/autoplay';

const swiperContainer: HTMLElement | null = document.querySelector(".swiper");

if (swiperContainer) {
  Swiper.use([Navigation, Pagination, EffectCoverflow,Autoplay]);

  const swiper = new Swiper(swiperContainer, {
    modules: [Navigation, Pagination, EffectCoverflow,Autoplay],
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView:1.5,
    spaceBetween: 0,
    coverflowEffect: {
        
      rotate: 0, // Rotation des slides
      stretch: 0, // Étirement des slides
      depth: 200, // Profondeur de l'effet 3D
      modifier: 2, // Multiplicateur de l'effet
      slideShadows: false, // Ombres des slides
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
}
