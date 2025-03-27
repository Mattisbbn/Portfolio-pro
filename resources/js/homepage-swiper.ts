import Swiper from 'swiper';
import { Navigation, Pagination, EffectCoverflow } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';

const swiperContainer: HTMLElement | null = document.querySelector(".swiper");

if (swiperContainer) {
  Swiper.use([Navigation, Pagination, EffectCoverflow]);

  const swiper = new Swiper(swiperContainer, {
    modules: [Navigation, Pagination, EffectCoverflow],
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView:"auto",
    spaceBetween: -40,
    coverflowEffect: {
        
      rotate: 40, // Rotation des slides
      stretch: 0, // Étirement des slides
      depth: 50, // Profondeur de l'effet 3D
      modifier: 1, // Multiplicateur de l'effet
      slideShadows: true, // Ombres des slides
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
