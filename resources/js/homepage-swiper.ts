import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const swiperContainer: HTMLElement | null = document.querySelector(".swiper");

if (swiperContainer) {
  Swiper.use([Navigation, Pagination]);


  const swiper = new Swiper(swiperContainer, {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    // Ajoutez d'autres options ici si nécessaire
  });
}
